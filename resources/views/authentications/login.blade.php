@extends('layouts.app')

@section('content')
    <style>
        .hide_div {
            display: none;
        }

        .card-container.card {
            max-width: 350px;
            padding: 40px 40px;
        }

        .card {
            background-color: #F7F7F7;
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            border: solid 1px #eee;
            box-shadow: 0 0 7px #926f93;
            margin-bottom: 20px;
        }
    </style>


        <div style="margin-left: 200px; margin-right: 200px; margin-top: 50px; margin-bottom: 10px">
            @if (\App\Setting::where('type', 'circular_published')->first()->value == 1)
                <marquee attribute_name = "attribute_value" style="color: red;">
                    Online application submission has been extended till {{ date('M d, Y', \App\Setting::where('type', 'submission_date')->first()->value) }}. Exam Date has been rescheduled to {{ date('M d, Y', \App\Setting::where('type', 'exam_date')->first()->value) }}.
                </marquee>
            @endif
        </div>


    <div class="container">
        <div class="card card-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h3 style="text-align: center">Applicant Login</h3>
                </br>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="username" type="text" class="form-control" name="email" placeholder="Email">

                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </br>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </br>

                <div class="form-inline">
                    <label class="checkbox"><input name="remember" value="1" id="remember" type="checkbox"> Stay Signed in</label>
                    <input  name="submit" value="Login" class="btn btn-info pull-right" type="submit">
                </div>
                </br>

                <div class="form-inline">Do not have account?
                    <a href="{{ route('register') }}" class="text-center">Register Now</a>
                </div>

                <hr>
            </form>
        </div>
    </div>
@endsection
