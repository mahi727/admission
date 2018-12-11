@extends('layouts.app')

@section('content')
    <style>
        .card-container.card {
            max-width: 700px;
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

        .hide_div, .hide_div_admin {
            display: none;
        }
    </style>
    <h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Registration</h2>

    <div class="container">
        <div class="card card-container">
            <form action="{{ route('register') }}" class="form-horizontal" method="POST" accept-charset="utf-8">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-3">Email ID:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fisrtName" placeholder="Full Name" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Gender:</label>
                    <div class="col-sm-8" style="text-align: left">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Male" checked>Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Female">Female
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">Mobile No:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="mobile" placeholder="+088" name="mobile">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="password">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="password_confirmation">Confirm Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password_confirmation" placeholder="Enter password" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <div class="pull-right">
                        <a href="{{ route('index') }}" class="btn btn-info" title="cancel">Cancel</a>
                        <button type="submit" class="btn btn-success ">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
