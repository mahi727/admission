@extends('layouts.app')

@section('content')

<style>
    .card-container.card {
        max-width: 350px;
        margin-bottom: 50px;
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

    .form-group {
        margin-left: 20px;
    }

    .hide_div_admin, .hide_div {
        display: none;
    }
</style>


<div class="container">
    <div class="card card-container">

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h3 style="text-align: center">Admin Login</h3>
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
                <input  name="submit" value="Login" class=".btn-default pull-right" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection
