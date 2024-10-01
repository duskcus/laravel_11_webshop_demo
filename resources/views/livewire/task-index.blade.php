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
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '18:00:00',
                firstDay: 1, // Start the week on Monday
                events: @json($calendarItems),
            });
            calendar.render();
        });
      </script>
@endpush
