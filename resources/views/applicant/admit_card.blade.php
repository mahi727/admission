<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
        
         body {
        font-family: Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
    }

    .card-container.card {
        max-width: 700px;
        height: 700px;
    }

    .card {
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-bottom: 20px;
    }

    .duImage {
        float: left !important;
        width: 16.66666667%;
    }

    .iitImage {
        float: left !important;
        width: 16.66666667%;
    }

    .top_middle {
        text-align: center;
        width: 66.66666667%;  
        float: left !important;
    }

    .table {
        min-height: .01%;
        overflow-x: auto;
        border: 1px solid #ddd;
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
        background-color: transparent;
        border-spacing: 0;
        border-collapse: collapse
    }

    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        padding: 8px;
        line-height: 1.42857143;
        border-top: 1px solid #ddd;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .col-sm-3 {
        width: 25%;
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .col-sm-8 {
        width: 66.66666667%;
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 120px;
        margin-top: -43px;
    }

    .applicant-img{
        height: 100px;
        width: 100px;
    }

    </style>
<body>

	

	<div class="card card-container">

        <div class="top" style="margin-bottom: 100px">
			<div class="duImage">
				<img src="{{ asset('images/DU.png') }}" style="height: 100px; width: 100px;">
			</div>
            <div class="top_middle" style="text-align: center">
                <h3>Institute of Information Technlogy</h3>
                <h4>University of Dhaka</h4>
            </div>
            <div class="iitImage">
                <img src="{{ asset('images/iit.png')}}" style="height: 100px; width: 100px;">
            </div>
            <div class="form-group"  style="text-align: center; margin-bottom: 15px;">
                <h4><b>Post Graduate Diploma in Information Technology</b></h4>
                <h5><b>Admit Card</b></h5>
            </div>
             <div class="form-group" style="text-align: center">
                <h5><b>Admission Session {{ $application->year }}</b></h5>
            </div>
		</div>
                 

        <table class="table">
            <tr>
                <td>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Name:</label>
                        <div class="col-sm-8">
                            <h5>{{ $application->name }}</h5>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Roll:</label>
                        <div class="col-sm-8">
                            <h5>{{ $application->roll }}</h5>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Exam Place:</label>
                        <div class="col-sm-8">
							@php
								foreach (\App\SeatPlan::all() as $key => $seatplan){
									if(Auth::user()->application->roll >= $seatplan->starting_roll && Auth::user()->application->roll <= $seatplan->ending_roll){
										$room = $seatplan->room_no;
									}
								}
							@endphp
                            <h5>{{ $room }}, IIT,DU</h5>
                        </div>
                    </div>
                </td>

                <td>
                    <h4>Applicant Image</h4>
                    <img class="applicant-img" src="{{ asset($application->photo) }}">
                </td>
            </tr>
        </table>



        <div class="form-group" style="text-align: center;">
            <div class="col-sm-3" style=" margin-top: 40px; float: right !important;">
                <img src="{{ asset(\App\Setting::where('type', 'sign_link')->first()->value) }}" style="height: 50px; width: 100px;">
                <hr style="border: 1px solid black;">
                <h6>Signature of Director</h6>
            </div>
        </div>

    </div>




</body>
</html>
