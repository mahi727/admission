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
                @include('administrator.side_nav')
            </div>

             <div class="col-sm-8 text-left">
                <h4>Upload Admission Circular Dates</h4>
                </br>


                <div style="margin-top: 10px">
                    <form action="{{ route('sign.upload') }}" class="form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-5" style="text-align: left;">Application form submission last date</label>
                            <div class="col-sm-3" style="text-align: left;">
                                <input type="date" class="form-control" id="submission_date" placeholder="" name="submission_date" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" style="text-align: left;">Exam Date</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="exam_date" name="exam_date" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" style="text-align: left;">Upload Director Signature</label>
                            <div class="col-sm-3">
                                <input type="file" id="files" accept=".jpg" name="sign" class="hidden" required/>
                                <h4><label class="badge" for="files">Upload Signature</label></h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8">

                            </div>
                            <button type="submit" class="btn btn-success col-sm-2">Publish</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <script>
        var start = 2017;
        var end = new Date().getFullYear();
        var options = "";
        for(var year = start ; year <=end; year++){
            options += "<option value="+year+">"+ year +"</option>";
        }
        document.getElementById("session_year").innerHTML = options;
    </script>

@endsection
