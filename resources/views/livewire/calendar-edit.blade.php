<div>
    <!-- Your existing calendar -->
    <div id="calendar"></div>

    <!-- Open the modal using ID.showModal() method -->
    <dialog id="event_modal" class="modal">
        <div class="modal-box">
            <form id="event_form">
                <div class="form-control mt-4">
                    <label class="label" for="modal_title">
                        <span class="label-text">Title</span>
                    </label>
                    <input type="text" name="title" id="modal_title" class="input input-bordered w-full" required>
                </div>

                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2">
                        <div class="form-control mt-4">
                            <label class="label" for="modal_start_time">
                                <span class="label-text">Start Time</span>
                            </label>
                            <input type="datetime-local" name="start_time" id="modal_start_time" class="input input-bordered w-full" required>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <div class="form-control mt-4">
                            <label class="label" for="modal_end_time">
                                <span class="label-text">End Time</span>
                            </label>
                            <input type="datetime-local" name="end_time" id="modal_end_time" class="input input-bordered w-full" required>
                        </div>
                    </div>
                </div>

                <div class="form-control mt-4">
                    <label class="label" for="modal_location">
                        <span class="label-text">Location</span>
                    </label>
                    <input type="text" name="location" id="modal_location" placeholder="Optional" class="input input-bordered w-full">
                </div>

                <div class="form-control mt-4">
                    <label class="label" for="modal_description">
                        <span class="label-text">Description</span>
                    </label>
                    <textarea name="description" id="modal_description" class="textarea textarea-bordered w-full" rows="3"></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-info w-full">Save Changes</button>
                </div>
            </form>

            <div class="mt-6">
                <button type="submit" class="btn btn-error w-full">Delete Task</button>
            </div>

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
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 'auto',
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '18:00:00',
                firstDay: 1,
                selectable: true,
                events: @json($calendarItems),
                eventClick: function(info) {
                    var modal = document.getElementById('event_modal');
                    var form = document.getElementById('event_form');

                    // Fill in the form fields
                    form.elements.title.value = info.event.title;
                    form.elements.start_time.value = info.event.start ? info.event.start.toISOString().slice(0, 16) : '';
                    form.elements.end_time.value = info.event.end ? info.event.end.toISOString().slice(0, 16) : '';
                    form.elements.location.value = info.event.extendedProps.location || '';
                    form.elements.description.value = info.event.extendedProps.description || '';

                    modal.showModal();

                    // Handle form submission
                    form.onsubmit = function(e) {
                        e.preventDefault();
                        // Here you would typically send the form data to your server
                        // For now, we'll just update the event in the calendar
                        info.event.remove();
                        calendar.addEvent({
                            title: form.elements.title.value,
                            start: form.elements.start_time.value,
                            end: form.elements.end_time.value,
                            extendedProps: {
                                location: form.elements.location.value,
                                description: form.elements.description.value
                            }
                        });
                        modal.close();
                    };
                }
            });
            calendar.render();
        });
    </script>
    @endpush
</div>
