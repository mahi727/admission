<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>
    .card-container.card {
    }

    .card {
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-bottom: 20px;
    }

	.col-sm-2 {
    	width: 16.66666667%;
	}

	.table-bordered {
	    border: 1px solid #ddd;
	}

	.table {
	    width: 100%;
	    max-width: 100%;
	    margin-bottom: 20px;
		background-color: transparent;
		border-spacing: 0;
		border-collapse: separate;
	}

	.form-group {
	    margin-bottom: 15px;
	}

</style>

<body>
	<div class="card card-container">

        <div class="top" style="margin-bottom: 30px">
			<div class="col-sm-2" style="float: left !important; width: 16.66666667%;">
				<img src="{{asset('images/iit.png')}}" style="height: 100px; width: 100px;">
			</div>
            <div class="col-sm-8" style="text-align: center;">
                <h3><b>Attendance Sheet</b></h3>
                <h3>Institute of Information Technlogy</h3>
                <h4 style="text-align: center; margin-left: 120px">University of Dhaka</h4>
            </div>


		</div>

        <table class="table table-bordered" style="margin-top: 100px">
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


        <div class="form-group" style="text-align: center; margin-bottom: 15px;">
            <div class="col-sm-3 pull-right" style=" margin-top: 40px; width: 25%; float: right !important">
                <img src="{{ asset('images/signature.png') }}" style="height: 50px; width: 100px;">
                <hr style="border: 1px solid black;">
                <h6>Signature of Director</h6>
            </div>
        </div>

    </div>




</body>
</html>
