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

            <div id="form" class="container-fluid col-sm-8" style="text-align: center">
                <h2>Application Form Submission</h2>
                <p>Application submission has been successfully done.</p>
                <span class="glyphicon glyphicon-ok-circle" style="font-size: 150px">
            </div>

        </div>
    </div>


@endsection
