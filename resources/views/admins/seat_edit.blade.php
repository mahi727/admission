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
                <h4>Edit Seat Plan</h4>
                </br>


                <div style="margin-top: 10px">
                    <form action="{{ route('seatplans.update', $seatplan->id) }}" class="form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">

                        <div class="form-group">
                            <label class="control-label col-sm-3">Room No</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="room_no" placeholder="Room No" name="room_no" value="{{ $seatplan->room_no }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Capacity</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="capacity" placeholder="Capacity" name="capacity" value="{{ $seatplan->capacity }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Starting Roll</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="starting_roll" placeholder="Starting Roll" name="starting_roll" value="{{ $seatplan->starting_roll }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Ending Roll</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ending_roll" placeholder="Ending Roll" name="ending_roll" value="{{ $seatplan->ending_roll }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8">

                            </div>
                            <button type="submit" class="btn btn-success col-sm-3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
