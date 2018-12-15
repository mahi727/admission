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
                <h4>Applications</h4>
                </br>

                <div style="margin-top: 40px">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Application ID</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Payment Status</th>
                            <th>Approve Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($applications as $key => $application)
                                <tr>
                                    <td>{{ $application->application_id }}</td>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->mobile }}</td>
                                    <td>{{ $application->payment_status }}</td>
                                    <td>{{ $application->approval_status }}</td>
                                    <td>
                                        @if (Auth::user()->user_type != 'program-chair')
                                            <a href="{{ route('applications.show', $application->id) }}" class="btn btn-info">View</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>


@endsection
