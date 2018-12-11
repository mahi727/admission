<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>

	<style>
	    .card-container.card {
	        max-width: 700px;
	        height: 700px;
	    }

	    .card {
	        padding: 20px 25px 30px;
	        margin: 0 auto 25px;
	        margin-bottom: 20px;
	        background-image: url("{{ asset('images/bgi.png') }}");
	        background-repeat: no-repeat;
	        background-size: contain;
	    }

	</style>

	<div class="card card-container">

        <div class="top" style="margin-bottom: 100px">
			<div class="col-sm-2 pull-left">
				<img src="{{ asset('images/DU.png') }}" class="pull-left" style="height: 100px; width: 100px;">
			</div>
            <div class="col-sm-8 pull-left" style="text-align: center">
                <h3>Institute of Information Technlogy</h3>
                <h4>University of Dhaka</h4>
            </div>
            <div class="col-sm-2 pull-right">
                <img src="{{ asset('images/iit.png')}}" class="pull-left" style="height: 100px; width: 100px;">
            </div>
		</div>


        <div class="form-group" style="text-align: center">
            <h4><b>Post Graduate Diploma in Information Technology</b></h4>
            <h5><b>Admit Card</b></h5>
        </div>

        <div class="form-group" style="text-align: center">
            <h5><b>Admission Session (year)</b></h5>
        </div>

        <table class="table table-responsive table-bordered">
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
                </td>
            </tr>
        </table>



        <div class="form-group" style="text-align: center;">
            <div class="col-sm-3 pull-right" style=" margin-top: 40px">
                <hr style="border: 1px solid black;">
                <h6>Signature of Director</h6>
            </div>
        </div>

    </div>




</body>
</html>
