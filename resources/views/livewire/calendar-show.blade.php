<div>


    <!-- Your existing calendar -->
    <div id="calendar"></div>

    {{-- <!-- Include the modal Livewire component -->
    @livewire('calendar-modal') --}}

    <!-- Open the modal using ID.showModal() method -->
    <dialog id="event_modal" class="modal">
        <div class="modal-box">
            <h3 id="modal_title" class="text-lg font-bold"></h3>
            <span id="modal_start_time"></span> - <span id="modal_end_time"></span>
            <p id="modal_description" class="py-4"></p>
            <div class="modal-action">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-error absolute right-2 top-2">✕</button>
                </form>
            </div>
        </div>
    </dialog>


    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
        <script>
            // Calendar is seen as an object and it has existing properties in the docs
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    height: 'auto',
                    initialView: 'timeGridWeek',
                    slotMinTime: '8:00:00',
                    slotMaxTime: '18:00:00',
                    firstDay: 1, // Start the week on Monday
                    // locale: 'nl', // The language is set to Dutch (nl).
                    selectable: true,
                    events: @json($calendarItems),
                    // FUNCTIONS / HANDLERS / CALLBACKS
                    // Activates when clicking somehwere
                    // dateClick: function() {
                    //     alert('a day has been clicked!');
                    // },
                    // Actives when clicking an event aka task
                    eventClick: function(info) {
                        // CALLS THE MODAL
                        var modal = document.getElementById('event_modal');
                        var modalTitle = document.getElementById('modal_title');
                        var modalDescription = document.getElementById('modal_description');
                        var modalStartTime = document.getElementById('modal_start_time'); // Element to display start time
                        var modalEndTime = document.getElementById('modal_end_time');     // Element to display end time

                        modalTitle.textContent = info.event.title;
                        modalDescription.textContent = info.event.extendedProps.description || 'No description available';

                        // Format start and end times
                        var startTime = info.event.start ? info.event.start.toLocaleString() : 'No start time';
                        var endTime = info.event.end ? info.event.end.toLocaleString() : 'No end time';

                        // Set start and end times in the modal
                        modalStartTime.textContent = `${startTime}`;
                        modalEndTime.textContent = `${endTime}`;

                        modal.showModal();
                    }
                });
                calendar.render();
            });
        </script>
    @endpush


</div>
