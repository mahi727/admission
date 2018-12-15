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

        .file{
            max-width: 150px;
        }

    </style>

    <h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Application Form</h2>

    <div class="container">

        <div class="card card-container">
            <form action="{{ route('applications.store') }}" id="form" class="form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-3">Name of Applicant:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ Auth::user()->name }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Father's Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fatherName" placeholder="" name="fatherName" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Mother's Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="motherName" placeholder="" name="motherName" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Mailing Address:</label>
                    <div class="col-sm-8">
                        <input type="textBox" class="form-control" id="mailingAddress" placeholder="" name="mailingAddress" value="{{ Auth::user()->email }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Permanent Address:</label>
                    <div class="col-sm-8">
                        <input type="textBox" class="form-control" id="permanentAddress" placeholder="" name="permanentAddress" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Date of Birth:</label>
                    <div class="col-sm-8">
                        <input type="text" data-provide="datepicker" class="form-control" id="birthDate" placeholder="" name="birthDate" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Nationality:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="Bangladeshi" id="nationality" placeholder="" name="nationality" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">Mobile No:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="mobile" placeholder="+088" name="mobile" value="{{ Auth::user()->mobile }}" required>
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
                            <input type="text" class="form-control" id="school_name" placeholder="" name="school_name" required>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="ssc_board">
                                <option value="">Select Board</option>
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Chittagong</option>
                                <option>Barisal</option>
                                <option>Sylhet</option>
                                <option>Comilla</option>
                                <option>Dinajpur</option>
                                <option>Jessore</option>
                                <option>Mymensingh</option>
                                <option>Madrasha</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="ssc_group" required>
                                <option value="">Select Group</option>
                                <option>Science</option>
                                <option>Business Studies</option>
                                <option>Arts</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" id="ssc_year" name="ssc_year" required>

                            </select>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="ssc_division" required>
                                <option value="">Select Division</option>
                                <option>1st Division</option>
                                <option>2nd Division</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" min="0" class="form-control" id="ssc_gpa" placeholder="" name="ssc_gpa" required>
                        </td>
                        <td>
                            <input type="file" id="ssc_marksheet" accept=".pdf" class="file" name="ssc_marksheet">
                        </td>
                        <td>
                            <input type="file" id="files" accept=".pdf" class="file" name="ssc_certificate">
                        </td>
                    </tr>

                    <tr>
                        <td>HSC </td>
                        <td>
                            <input type="text" class="form-control" id="college_name" placeholder="" name="college_name" required>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="hsc_board" required>
                                <option value="">Select Board</option>
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Chittagong</option>
                                <option>Barisal</option>
                                <option>Sylhet</option>
                                <option>Comilla</option>
                                <option>Dinajpur</option>
                                <option>Jessore</option>
                                <option>Mymensingh</option>
                                <option>Madrasha</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="hsc_group" required>
                                <option value="">Select Group</option>
                                <option>Science</option>
                                <option>Business Studies</option>
                                <option>Arts</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" id="hsc_year" name="hsc_year" required>

                            </select>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="hsc_division" required>
                                <option value="">Select Division</option>
                                <option>1st Division</option>
                                <option>2nd Division</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" min="0" class="form-control" id="gpa" placeholder="" name="hsc_gpa" required>
                        </td>
                        <td>
                            <input type="file" id="hsc_marksheet" accept=".pdf" class="file" name="hsc_marksheet">
                        </td>
                        <td>
                            <input type="file" id="hsc_certificate" accept=".pdf" class="file" name="hsc_certificate">
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
                            <input type="text" class="form-control" id="department" placeholder="" name="department" required>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="university" placeholder="" name="university" required>
                        </td>
                        <td>
                            <select class="form-control" id="honors_year" name="honors_year" required>

                            </select>
                        </td>
                        <td>
                            <input type="hidden" readonly="true">
                            <select class="form-control" name="honors_class" required>
                                <option value="">Select Class</option>
                                <option>1st Division</option>
                                <option>2nd Division</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="cgpa" placeholder="" name="cgpa" required>
                        </td>
                        <td>
                            <input type="file" id="honors_marksheet" accept=".pdf" class="file" name="honors_marksheet" required>
                        </td>
                        <td>
                            <input type="file" id="honors_certificate" accept=".pdf" class="file" name="honors_certificate" required>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            <input type="file" id="photo" accept=".jpg" class="" name="photo">
                        </td>
                        <td>
                            <div> Upload your photo </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="file" id="sign" accept=".jpg" class="" name="sign">
                        </td>
                        <td>
                            <div> Upload your signature </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="form-input">
                    <input type="checkbox" required> This information provided in this application form is true and correct.
                    I accept that IIT reserves the right to cancel my admission at any time if any item of information
                    given by me on this form is found to be materially false or incorrect.
                </div>

                <hr>
                <div class="form-inline">
                    <div class="pull-right">
                        <a href="{{ route('index') }}" class="btn btn-info" title="cancel">Cancel</a>
                        <button type="submit" class="btn btn-success ">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <script>
        var start = 1988;
        var end = new Date().getFullYear();
        var options = "";
        for(var year = start ; year <=end; year++){
            options += "<option value="+year+">"+ year +"</option>";
        }
        document.getElementById("ssc_year").innerHTML = options;
        document.getElementById("hsc_year").innerHTML = options;
        document.getElementById("honors_year").innerHTML = options;
    </script>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){

            $('#birthDate').datepicker({
                maxDate : 'today'
            });

            var valid = true;

            $("#form").on("submit", function(){
                //alert('fdfdf');
                if(($('#hsc_year').val() - $('#ssc_year').val()) < 2){
                    valid = false;
                    alert("HSC year can't be lower than SSC year");
                }
                else{
                    valid = true;
                }

                return valid;
            });

            var _URL = window.URL || window.webkitURL;
    		$("#photo").change(function (e) {
    		    var file, img;
    		    if ((file = this.files[0])) {
    		        img = new Image();
    		        img.onload = function () {
    		            if(this.width == 300 && this.height == 400){
    		            	valid = true;
    		            	var reader = new FileReader();
    		            	reader.onload = function (e) {
    		            	    $('#image').attr('src', e.target.result);
    		            	}
    		            	reader.readAsDataURL(file);
    		            }
    		            else{
                            valid = false;
    		            	$("#photo").val(null);
    		            	alert("The photo size must be 300px*400px)");
    		            }
    		        };
    		        img.src = _URL.createObjectURL(file);
    		    }
    		});

            $("#sign").change(function (e) {
    		    var file, img;
    		    if ((file = this.files[0])) {
    		        img = new Image();
    		        img.onload = function () {
    		            if(this.width == 140 && this.height == 60){
    		            	valid = true;
    		            	var reader = new FileReader();
    		            	reader.onload = function (e) {
    		            	    $('#image').attr('src', e.target.result);
    		            	}
    		            	reader.readAsDataURL(file);
    		            }
    		            else{
                            valid = false;
    		            	$("#sign").val(null);
    		            	alert("The signature size must be 140px*60px)");
    		            }
    		        };
    		        img.src = _URL.createObjectURL(file);
    		    }
    		});


        });
    </script>
@endsection
