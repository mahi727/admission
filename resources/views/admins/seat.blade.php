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
                <h4>Generate Seat Plan</h4>
                </br>


                <div style="margin-top: 10px">
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Room No</th>
                                <th>Capacity</th>
                                <th>Roll No</th>
                                <th width="10%">Options</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($seatplans as $key => $seatplan)
                                <tr>
                                    <td>{{ $seatplan->room_no }}</td>
                                    <td>{{ $seatplan->capacity }}</td>
                                    <td>{{ $seatplan->starting_roll }}-{{ $seatplan->ending_roll }}</td>
                                    <td>
                                        @if (Auth::user()->user_type != 'program-chair')
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                  <li><a href="{{ route('seatplans.edit', $seatplan->id)}}">Edit</a></li>
                                                  <li><a href="{{ route('seatplans.destroy', $seatplan->id) }}">Delete</a></li>
                                                </ul>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if (Auth::user()->user_type != 'program-chair')
                    <div class="pull-right">
                        <a href="{{ route('seatplans.create') }}" class="btn btn-success" title="submit">Add New Room</a>
                    </div>
                @endif

                @if(\App\Setting::where('type', 'seat_plan_published')->first()->value != 1)
                    <div class="form-group" style="margin-top: 95px">
                        <label class="control-label col-sm-6">Click the button to pulblish seat plan:</label>
                        <div class="col-sm-2" style="margin-top: -5px">
                            <a href="{{ route('seatplans.publish') }}" class="btn btn-primary" title="submit" style="margin-right:350px">Publish</a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection
