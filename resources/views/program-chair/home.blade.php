@extends('layouts.app')

@section('content')

    <style>

        .hide_div_admin {
            display: none;
        }

        table, th, td {
            border-collapse: collapse;
            width: 70%;
            padding: 5px;
        }
    </style>


    <div class="container-fluid text-center">
        <div class="row content" style="margin-top: 5px">

            <div class="col-sm-2 sidenav">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{ route('home') }}" class="" title="circular">Admission Circular</a></li>
                    <li><a href="http://localhost/admission/Admins/applications" class="" title="applications">Applications</a></li>
                    <li><a href="http://localhost/admission/Admins/admit" class="" title="admit">Admit Card</a></li>
                    <li><a href="http://localhost/admission/Admins/seat" class="" title="seat_plan">Seat Plan</a></li>
                    <li><a href="http://localhost/admission/Admins/attendance" class="" title="attendance">Attendance Sheet</a></li>
                    <li><a href="http://localhost/admission/Admins/result" class="" title="result">Result</a></li>
                </ul>
            </div>


            <div class="col-sm-8 text-left">
                <h4>Publish Admission Circular</h4>
                </br>

                @if (\App\Setting::where('type', 'circular_link')->first() != null)
                    <a href="{{ asset(\App\Setting::where('type', 'circular_link')->first()->value) }}" download="">Download Current Circular</a>
                @endif

                <form action="{{ route('circular.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-6">Upload PGDIT circular as pdf format to publish it:</label>
                        <div class="col-sm-2" style="margin-top: -5px">
                            <input type="file" id="files" accept=".pdf" name="circular" class="hidden" required/>
                            <h4><label class="badge" for="files">Upload Circular</label></h4>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary" title="submit" style="margin-right:350px">Publish</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
