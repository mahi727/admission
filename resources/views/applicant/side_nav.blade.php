<ul class="nav nav-pills nav-stacked">
    <li class="{{ areActiveRoutes(['home']) }}"><a href="{{ route('home') }}" class="title">Application Form Status</a></li>
    <li class="{{ areActiveRoutes(['payment_status']) }}"><a href="{{ route('payment_status') }}" class="title">Payment Status</a></li>
    <li class="{{ areActiveRoutes(['admit']) }}"><a href="{{ route('admit') }}" class="title">Admit Card</a></li>
    <li class="{{ areActiveRoutes(['seatplan']) }}"><a href="{{ route('seatplan') }}" class="title">Seat Plan</a></li>
    <li class="{{ areActiveRoutes(['result']) }}"><a href="{{ route('result') }}" class="title">Result</a></li>
</ul>
