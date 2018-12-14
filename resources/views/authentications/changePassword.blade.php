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


    <div class="container">
        <div class="card card-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h3 style="text-align: center">Applicant Login</h3>
                </br>

                <div class="input-group">
                    <label>Current Password</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="username" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                </br>

                <div class="input-group">
                    <label>New Password</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                </br>

                 <div class="input-group">
                    <label>Confirm New Password</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                </br>

                <hr>
            </form>
        </div>
    </div>
@endsection
