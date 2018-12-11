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
                @include('administrator.side_nav');
            </div>


            <div class="col-sm-8 text-left">
                <h4>Download Attendance Sheet</h4>

                </br>

                @if(\App\Setting::where('type', 'attendance_sheet_published')->first()->value != 1)
                    <form action="{{ route('attendance_sheet.upload') }}" class="form-horizontal" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-6">Upload attendance sheet as pdf format to publish it:</label>
                            <div class="col-sm-2" style="margin-top: -5px">
                                <input type="file" id="files" accept=".pdf" class="hidden" name="attendance" required/>
                                <h4><label class="badge" for="files">Upload Result</label></h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-6"></label>
                            <div class="col-sm-2" style="margin-top: -5px">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                @else
                    <div class="form-group">
                        <label class="control-label col-sm-6">Click the button to download attendance sheet:</label>
                        <div class="col-sm-2" style="margin-top: -5px">
                            <a href="{{ asset(\App\Setting::where('type', 'attendance_sheet_link')->first()->value) }}" download="attendance_sheet">
                            <button class="btn btn-primary" style="margin-right: 350px">Download</button>
                        </a>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>

@endsection
