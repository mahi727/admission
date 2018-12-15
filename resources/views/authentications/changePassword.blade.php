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
            <form action="{{ route('password_update') }}" method="POST">
                @csrf
                <h3 style="text-align: center">Applicant Login</h3>
                </br>

                <div class="input-group">
                    <label>New Password</label>
                    <input id="password" type="password" class="form-control" name="new_password" placeholder="Password">
                </div>
                </br>

                 <div class="input-group">
                    <label>Confirm New Password</label>
                    <input id="password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div>
                </br>

                <div class="form-inline">
                    <input  name="submit" value="Change Password" class="btn btn-info pull-right" type="submit">
                </div>

                <hr>
            </form>
        </div>
    </div>
@endsection
