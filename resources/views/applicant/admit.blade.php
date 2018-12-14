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


        <div id="admit" class="container-fluid col-sm-8" style="text-align: center">
            <h2>Admit Card</h2>
            @if (\App\Setting::where('type', 'admit_card_published')->first()->value != 1)
                <p>Admit Card is not published</p>
            @else
                <a href="{{ route('admit.download') }}">
                    <button class="btn btn-primary" style="margin-top: 45px">Download Admit Card </button>
                </a>
            @endif
        </div>

    </div>
</div>

@endsection
