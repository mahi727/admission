@extends('layouts.app')

@section('content')
    <style>
        .card-container.card {
            max-width: 350px;
            background-image: url("{{ asset('dist/img/index.jpeg')}}");
            background-repeat: no-repeat;
            margin-bottom: 100px;
            margin-top: 50px;
        }

        .card {
            background-color: #F7F7F7;
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            border: solid 1px #eee;
            box-shadow: 0 0 7px #926f93;
            margin-bottom: 20px;
        }
        .hide_div_admin {
            display: none;
        }
    </style>

    <h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Publish PGDIT Admission Circular</h2>

    <div class="container">
        <div class="card card-container">
            <div style="text-align: center; margin-top: 100px; margin-bottom: 100px">
                <a href="{{ route('circular.publish') }}" class="btn btn-primary" title="active_admission">Click to Active <br> PGDIT Admission Session</a>
            </div>
        </div>
    </div>
@endsection
