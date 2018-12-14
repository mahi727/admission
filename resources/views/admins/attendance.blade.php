@extends('layouts.app')

@section('content')

    <style>

        .hide_div_admin {
            display: none;
        }
    </style>


    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                @include('administrator.side_nav')
            </div>


            <div class="col-sm-8 text-left">
                <h4>Download Attendance Sheet</h4>

                </br>

                <div class="form-group">
                    <label class="control-label col-sm-6">Click the button t download attendance sheet:</label>
                    <div class="col-sm-2" style="margin-top: -50px">
                         <a href="{{ route('attendance.download') }}">
                            <button class="btn btn-primary" style="margin-top: 45px">Download</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
