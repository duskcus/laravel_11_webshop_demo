<section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">
    <h1 class="text-4xl font-bold mb-6">Calendar</h1>
    <div id="calendar"></div>
</section>

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
                    locale: 'nl', // The language is set to Dutch (nl).
                    selectable: true,
                    events: @json($calendarItems),
                    // FUNCTIONS / HANDLERS / CALLBACKS
                    // Activates when clicking somehwere
                    // dateClick: function() {
                    //     alert('a day has been clicked!');
                    // },
                    // Actives when clicking an event aka task
                    eventClick: function(info) {
                        // You can access the event's details via 'info' parameter
                        // alert('Event: ' + info.event.title);

                        // Send the event data to Livewire and trigger the modal
                        Livewire.emit('openModal', {
                            title: info.event.title,
                            start: info.event.startStr
                        });
                    }
                });
                calendar.render();
            });
        </script>
@endpush
