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
                <h4>Publish Admission Circular</h4>

                <form action="{{ route('circular.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <table>
                        <tr>
                            <td>
                                @if (\App\Setting::where('type', 'circular_link')->first() != null)
                                    <a href="{{ asset(\App\Setting::where('type', 'circular_link')->first()->value) }}" download="">Download Current Circular</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Select admission session:</label>
                            </td>
                            <td style="padding-right: 80px;">
                                <select class="form-control" id="session_year" name="session_year" required>
                                </select>
                            </td>
                        </tr>

                    </table>



                    <div class="form-group">
                        <label class="control-label col-sm-6" style="margin-left: -10px;">Upload PGDIT circular as pdf format to publish it:</label>

                        <div class="col-sm-2" style="margin-top: -5px">
                            <input type="file" id="files" accept=".pdf" name="circular" class="hidden" required/>
                            <h4 style="margin-left: -10px;"><label class="badge" for="files">Upload Circular</label></h4>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary" title="submit" style="margin-right:350px">Publish</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        var start = 2018;
        var end = 2020;
        var options = "";
        for(var year = start ; year <=end; year++){
            options += "<option value="+year+">"+ year +"</option>";
        }
        document.getElementById("session_year").innerHTML = options;
    </script>

@endsection
