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

        <div id="result" class="container-fluid col-sm-8" style="text-align: center">
            <h2>Result</h2>
            @if(\App\Setting::where('type', 'result_published')->first()->value != 1)
                <p>Result is not published</p>
            @else
                <div class="form-group">
                    <label class="control-label col-sm-6">Click the button to download result:</label>
                    <div class="col-sm-2" style="margin-top: -5px">
                        <a href="{{ asset(\App\Setting::where('type', 'result_link')->first()->value) }}" download="result">
                        <button class="btn btn-primary" style="margin-right: 350px">Download</button>
                    </a>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>

@endsection
