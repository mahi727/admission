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
                @include('administrator.side_nav');
            </div>


            <div class="col-sm-8 text-left">
                <h4>Publish Admission Circular</h4>

                </br>

                <div class="form-group">
                    <label class="control-label col-sm-6">Upload PGDIT circular as pdf format to publish it:</label>
                    <div class="col-sm-2" style="margin-top: -5px">
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload Circular</label></h4>
                    </div>
                </div>
            </div>

            <div class="pull-right">
                <a href="http://localhost/admission/Applications/payment" class="btn btn-primary" title="submit" style="margin-right:350px">Publish</a>
            </div>

        </div>
    </div>

@endsection
