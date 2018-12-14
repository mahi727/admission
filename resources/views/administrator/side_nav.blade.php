<ul class="nav nav-pills nav-stacked">
    <li class="{{ areActiveRoutes(['home']) }}"><a href="{{ route('home') }}" class="" title="circular">Admission Circular</a></li>
    <li class="{{ areActiveRoutes(['applications.index', 'application.show']) }}"><a href="{{ route('applications.index') }}" class="" title="applications">Applications</a></li>
    <li class="{{ areActiveRoutes(['admitcard.index']) }}"><a href="{{ route('admitcard.index') }}" class="" title="admit">Admit Card</a></li>
    <li class="{{ areActiveRoutes(['seatplans.index', 'seatplans.create']) }}"><a href="{{ route('seatplans.index') }}" class="" title="seat_plan">Seat Plan</a></li>
    <li class="{{ areActiveRoutes(['attendance']) }}"><a href="{{ route('attendance') }}" class="" title="attendance">Attendance Sheet</a></li>
    <li class="{{ areActiveRoutes(['admin.result']) }}"><a href="{{ route('admin.result') }}" class="" title="result">Result</a></li>
</ul>