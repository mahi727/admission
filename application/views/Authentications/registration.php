<style>
    .card-container.card {
        max-width: 700px;
        margin-bottom: 100px;
    }

    .card {
        background-color: #F7F7F7;
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93;
        margin-bottom: 20px;
    }

    .hide_div, .hide_div_admin {
        display: none;
    }
</style>
<h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Registration</h2>

<div class="container">
    <div class="card card-container">

        <?php echo form_open( base_url("Authentications" ), array('class' => 'form-horizontal')); ?>

            <div class="form-group">
                <label class="control-label col-sm-3">Email ID:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">First Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="fisrtName" placeholder="" name="firstName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Last Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastName" placeholder="" name="lastName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">User Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="userName" placeholder="" name="userName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Gender:</label>
                <div class="col-sm-8" style="text-align: left">
                    <label class="radio-inline">
                        <input type="radio" name="optradio" checked>Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Female
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Mobile No:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="mobile" placeholder="+088" name="mobile">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Password:</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>

            <div class="form-group">
                <div class="pull-right">
                    <?php echo anchor(base_url("Authentications/index"), 'Cancel', array('class' => 'btn btn-info', 'title' => 'cancel',)); ?>
                    <button type="submit" class="btn btn-success ">Submit</button>
                </div>
            </div>

        <?php echo form_close(); ?>
    </div>
</div>
