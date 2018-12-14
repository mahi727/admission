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
            @include('applicant.side_nav')
        </div>

        <div id="payment" class="container-fluid col-sm-8" style="text-align: center">
            <h2>Payment Status</h2>
            <p>{{ Auth::user()->application->payment_status }}!</p>
        </div>

        @if (Auth::user()->application->payment_status != 'Paid')
            <div style="text-align: center; margin-top: 50px; margin-bottom: 50px;" class="container-fluid col-sm-8">
                <a href="{{ route('payment.checkout') }}" class="btn btn-primary" title="payment">Complete Payment</a>
            </div>
        @endif
    </div>
</div>

@endsection
