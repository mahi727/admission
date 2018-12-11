@extends('layouts.app')

@section('content')
    <style>
        .card-container.card {
            max-width: 350px;
            background-image: url("{{ asset('dist/img/index.jpeg')}}");
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

    <h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Payment</h2>


    <div class="container">
        <div class="card card-container" style="text-align: center">

            <div style="text-align: center; margin-top: 50px; margin-bottom: 50px;}">
                <a href="{{ route('payment.checkout') }}" class="btn btn-primary" title="payment">Complete Payment</a>
            </div>

        </div>
    </div>
@endsection
