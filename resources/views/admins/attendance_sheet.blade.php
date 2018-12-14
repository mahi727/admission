<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="home.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
    .card-container.card {
        max-width: 70%;
    }

    .card {
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-bottom: 20px;
    }

</style>

<body>
	<div class="card card-container">

        <div class="top" style="margin-bottom: 100px">
			<div class="col-sm-2 pull-left">
				<img src="{{asset('images/DU.png')}}" class="pull-left" style="height: 100px; width: 100px;">
			</div>
            <div class="col-sm-8 pull-left" style="text-align: center">
                <h3><b>Attendance Sheet of PGDIT Admission</b></h3>
                <h3>Institute of Information Technlogy</h3>
                <h4>University of Dhaka</h4>
            </div>
            <div class="col-sm-2 pull-right">
                <img src="{{asset('images/iit.png')}}" class="pull-left" style="height: 100px; width: 100px;">
            </div>
		</div>

        <table class="table table-bordered" style="margin-top: 10px">
            <thead>
              <tr>
                <th style="width: 15%;">Roll</th>
                <th>Name</th>
                <th>Signature</th>
              </tr>
            </thead>
            <tbody>
              @foreach($applications as $application)
              <tr>
                <td>{{ $application->roll }}</td>
                <td>{{ $application->name }}</td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
        </table>


        <div class="form-group" style="text-align: center;">
            <div class="col-sm-3 pull-right" style=" margin-top: 40px">
                <img src="{{ asset('images/signature.png') }}" style="height: 50px; width: 100px;">
                <hr style="border: 1px solid black;">
                <h6>Signature of Director</h6>
            </div>
        </div>

    </div>




</body>
</html>


                
						
						
			
