@extends('layouts.app')

@section('content')

    <style>
        .card-container.card {
            max-width: 350px;
            background-image: url("{{ asset('dist/img/index.jpeg') }}");
            background-repeat: no-repeat;
            margin-bottom: 100px;
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

    <h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Notice</h2>


    <div class="container">
        <div class="card card-container" style="text-align: center">

            <h4>PGDIT Admission</h4>

            @if (\App\Setting::where('type', 'circular_link')->first() != null)
                <div>
                    <a href="{{ asset(\App\Setting::where('type', 'circular_link')->first()->value) }}" download="pgdit-circular">
                        <button class="btn btn-primary " style="margin-top: 45px">Download Circular </button>
                    </a>
                </div>
                </br>
                <div style="text-align: center">
                    @if (\App\Application::where('user_id', Auth::user()->id)->first() != null)
                        <a href="#" class="btn btn-primary " title="apply">View Application Details</a>
                    @else
                        <a href="{{ route('apply') }}" class="btn btn-primary " title="apply">Apply Now</a>
                    @endif
                </div>
            @endif

        </div>
    </div>


@endsection
