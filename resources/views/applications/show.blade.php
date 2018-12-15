@extends('layouts.app')

@section('content')

    <style>

        .card-container.card {
            margin-bottom: 100px;
        }

        .card {
            background-color: #F7F7F7;
            padding: 20px 25px 45px;
            margin: 0 auto 25px;
            border: solid 1px #eee;
            box-shadow: 0 0 7px #926f93;
        }

        .hide_div_admin {
            display: none;
        }

    </style>

    <h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Application Form</h2>

    <div class="container">

        <div class="card card-container">
            <div class="form-group">
                <label class="control-label col-sm-3">Name of Applicant:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->name }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Father's Name:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->fatherName }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Mother's Name:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->motherName }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Mailing Address:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->mailingAddress }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Permanent Address:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->permanentAddress }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Date of Birth:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->birthDate }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Nationality:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->nationality }}</p>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Mobile No:</label>
                <div class="col-sm-8">
                    <p class="form-control">{{ $application->mobile }}</p>
                </div>
            </div>

            <hr>

            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th>Examination</th>
                    <th>School/College Name</th>
                    <th>Board</th>
                    <th>Group</th>
                    <th>Year</th>
                    <th>Division</th>
                    <th>GPA</th>
                    <th>Marksheet</th>
                    <th>Certificate</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>SSC </td>
                    <td>
                        <p>{{ $application->school_name }}</p>
                    </td>
                    <td>
                        <p>{{ $application->ssc_board }}</p>
                    </td>
                    <td>
                        <p>{{ $application->ssc_group }}</p>
                    </td>
                    <td>
                        <p>{{ $application->ssc_year }}</p>
                    </td>
                    <td>
                        <p>{{ $application->ssc_division }}</p>
                    </td>
                    <td>
                        <p>{{ $application->ssc_gpa }}</p>
                    </td>
                    <td>
                        <a href="{{ asset($application->ssc_marksheet) }}" download="ssc_marksheet">Markesheet</a>
                    </td>
                    <td>
                        <a href="{{ asset($application->ssc_certificate) }}" download="ssc_certificate">Certificate</a>
                    </td>
                </tr>

                <tr>
                    <td>HSC </td>
                    <td>
                        <p>{{ $application->college_name }}</p>
                    </td>
                    <td>
                        <p>{{ $application->hsc_board }}</p>
                    </td>
                    <td>
                        <p>{{ $application->hsc_group }}</p>
                    </td>
                    <td>
                        <p>{{ $application->hsc_year }}</p>
                    </td>
                    <td>
                        <p>{{ $application->hsc_division }}</p>
                    </td>
                    <td>
                        <p>{{ $application->hsc_gpa }}</p>
                    </td>
                    <td>
                        <a href="{{ asset($application->hsc_marksheet) }}" download="hsc_marksheet">Markesheet</a>
                    </td>
                    <td>
                        <a href="{{ asset($application->hsc_certificate) }}" download="hsc_certificate">Certificate</a>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th>Examination</th>
                    <th>Department</th>
                    <th>University</th>
                    <th>Year</th>
                    <th>Class</th>
                    <th>CGPA</th>
                    <th>Marksheet</th>
                    <th>Certificate</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Honors </td>
                    <td>
                        <p>{{ $application->department }}</p>
                    </td>
                    <td>
                        <p>{{ $application->university }}</p>
                    </td>
                    <td>
                        <p>{{ $application->honors_year }}</p>
                    </td>
                    <td>
                        <p>{{ $application->honors_class }}</p>
                    </td>
                    <td>
                        <p>{{ $application->cgpa }}</p>
                    </td>
                    <td>
                        <a href="{{ asset($application->honors_marksheet) }}" download="honors_marksheet">Markesheet</a>
                    </td>
                    <td>
                        <a href="{{ asset($application->honors_certificate) }}" download="honors_certificate">Certificate</a>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                <tr>
                    <td>
                        <img src="{{ asset($application->photo) }}" alt="Photo" style="height:100px; width: 75px">
                    </td>
                    <td>
                        <div> Applicant Photo </div>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <img src="{{ asset($application->sign) }}" alt="Sign" style="height:40px; width: 80px">
                    </td>
                    <td>
                        <div> Applicant Sign</div>
                    </td>
                    <td style="width: 50%;"></td>
                </tr>
                </tbody>
            </table>

            <div class="form-inline">
                <div class="pull-left">
                    <a href="{{ URL::previous() }}" class="btn btn-success" title="cancel">Cancel</a>
                </div>
            </div>

            @if(Auth::user()->user_type != 'applicant')
                @if ($application->approval_status != 'Eligible')
                    <hr>
                    <div class="form-inline">
                        <div class="pull-right">
                            <a href="{{ route('applications.approve', $application->id) }}" class="btn btn-success" title="cancel">Accept</a>
                            <a href="{{ route('applications.decline', $application->id) }}" class="btn btn-danger" title="cancel">Decline</a>
                        </div>
                    </div>
                @endif
            @endif
        </div>

    </div>


@endsection
