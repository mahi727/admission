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
                <h4>Publish Admit Card</h4>

                </br>

                <div class="form-group">
                    <label class="control-label col-sm-6">Click the button to pulblish admit card:</label>
                    <div class="col-sm-2" style="margin-top: -5px">
                        <a href="{{ route('admitcard.publish') }}" class="btn btn-primary" title="submit" style="margin-right:350px">Publish</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
