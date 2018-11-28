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
        <?php echo form_open( base_url("Applications/payment" ), array('class' => 'form-horizontal')); ?>

            <div class="form-group">
                <label class="control-label col-sm-3">Name of Applicant:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="applicantName" placeholder="" name="applicantName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Father's Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="fatherName" placeholder="" name="fatherName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Mother's Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="motherName" placeholder="" name="motherName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Mailing Address:</label>
                <div class="col-sm-8">
                    <input type="textBox" class="form-control" id="mailingAddress" placeholder="" name="mailingAddress">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Permanent Address:</label>
                <div class="col-sm-8">
                    <input type="textBox" class="form-control" id="permanentAddress" placeholder="" name="permanentAddress">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Date of Birth:</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="birthDate" placeholder="" name="birthDate">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Nationality:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="Bangladeshi" id="nationality" placeholder="" name="nationality">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Mobile No:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="mobile" placeholder="+088" name="mobile">
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
                        <input type="text" class="form-control" id="school_college_name" placeholder="" name="school_college_name">
                    </td>
                    <td>
                        <input type="hidden"  readonly="true" >
                        <select class="form-control" name="board">
                            <option value="0: null">Select Board</option>
                            <option  >Dhaka</option>
                            <option  >Rajshahi</option>
                            <option  >Chittagong</option>
                            <option  >Barisal</option>
                            <option  >Sylhet</option>
                            <option  >Comilla</option>
                            <option  >Dinajpur</option>
                            <option  >Jessore</option>
                            <option  >Mymensingh</option>
                            <option  >Madrasha</option>
                        </select>
                    </td>
                    <td>
                        <input type="hidden" readonly="true" >
                        <select class="form-control" name="group">
                            <option value="0: null">Select Group</option>
                            <option  >Science</option>
                            <option  >Business Studies</option>
                            <option  >Arts</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control"  id="year"></select>
                    </td>
                    <td>
                        <input type="hidden" readonly="true" >
                        <select class="form-control" name="division">
                            <option value="0: null">Select Division</option>
                            <option  >1st Division</option>
                            <option  >2nd Division</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="gpa" placeholder="" name="gpa">
                    </td>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                </tr>

                <tr>
                    <td>SSC </td>
                    <td>
                        <input type="text" class="form-control" id="school_college_name" placeholder="" name="school_college_name">
                    </td>
                    <td>
                        <input type="hidden"  readonly="true" >
                        <select class="form-control" name="board">
                            <option value="0: null">Select Board</option>
                            <option  >Dhaka</option>
                            <option  >Rajshahi</option>
                            <option  >Chittagong</option>
                            <option  >Barisal</option>
                            <option  >Sylhet</option>
                            <option  >Comilla</option>
                            <option  >Dinajpur</option>
                            <option  >Jessore</option>
                            <option  >Mymensingh</option>
                            <option  >Madrasha</option>
                        </select>
                    </td>
                    <td>
                        <input type="hidden" readonly="true" >
                        <select class="form-control" name="group">
                            <option value="0: null">Select Group</option>
                            <option  >Science</option>
                            <option  >Business Studies</option>
                            <option  >Arts</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-control"  id="year"></select>
                    </td>
                    <td>
                        <input type="hidden" readonly="true" >
                        <select class="form-control" name="division">
                            <option value="0: null">Select Division</option>
                            <option  >1st Division</option>
                            <option  >2nd Division</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="gpa" placeholder="" name="gpa">
                    </td>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
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
                        <input type="text" class="form-control" id="school_college_name" placeholder="" name="school_college_name">
                    </td>
                    <td>
                        <input type="text" class="form-control" id="depaartment" placeholder="" name="depaartment">
                    </td>
                    <td>
                        <select class="form-control"  id="year"></select>
                    </td>
                    <td>
                        <input type="hidden" readonly="true" >
                        <select class="form-control" name="class">
                            <option value="0: null">Select Class</option>
                            <option  >1st Division</option>
                            <option  >2nd Division</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="cgpa" placeholder="" name="cgpa">
                    </td>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="table" >
                <tbody>
                <tr>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                    <td>
                        <div> Upload your photo </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="file" id="files" accept=".pdf" class="hidden"/>
                        <h4><label class="badge" for="files">Upload</label></h4>
                    </td>
                    <td>
                        <div> Upload your signature </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="form-input">
                <input type="checkbox"> This information provided in this application form is true and correct.
                I accept that IIT reserves the right to cancel my admission at any time if any item of information
                given by me on this form is found to be materially false or incorrect.
            </div>

            <hr>


            <div class="form-inline">
                <div class="pull-right">
                    <?php echo anchor(base_url("Notices/index"), 'Cancel', array('class' => 'btn btn-info', 'title' => 'cancel',)); ?>
                    <?php echo anchor(base_url("Applications/payment"), 'Submit', array('class' => 'btn btn-success', 'title' => 'submit',)); ?>
                </div>
            </div>
        <?php echo form_close(); ?>

    </div>

</div>


<script>
    var start = 1988;
    var end = new Date().getFullYear();
    var options = "";
    for(var year = start ; year <=end; year++){
        options += "<option>"+ year +"</option>";
    }
    document.getElementById("year").innerHTML = options;
</script>

