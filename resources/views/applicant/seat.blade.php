@extends('layouts.app')

@section('content')

<style>
    table, th, td {
        border-collapse: collapse;
        width: 70%;
        padding: 5px;
    }

    .hide_div_admin {
        display: none;
    }
</style>


<div class="container-fluid text-center">
    <div class="row content" style="margin-top: 5px">
        <div class="col-sm-2 sidenav">
            @include('applicant.side_nav');
        </div>

        <div id="seat" class="container-fluid col-sm-8" style="text-align: center">
            <h2>View Seat Plan</h2>
            @if (\App\Setting::where('type', 'seat_plan_published')->first()->value != 1)
                <p>Seat Plan is not published</p>
            @else
                @foreach (\App\SeatPlan::all() as $key => $seatplan)
                    @if(Auth::user()->application->roll >= $seatplan->starting_roll && Auth::user()->application->roll <= $seatplan->ending_roll)
                        Room No. - {{ $seatplan->room_no }}
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
