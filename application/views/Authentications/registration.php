<style>
    .container{
        width: 50%;
        margin-left: 25%;
        padding-top: 25px;
        padding-bottom: 25px;
        background: #fcfcfc;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93
    }

    .hide_div, .hide_div_admin {
        display: none;
    }
</style>
<h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Registration</h2>

<div class="container">
    <form class="form-horizontal" action="/action_page.php">

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

        <div class="form-inline">
            <div class="pull-right">
                <?php echo anchor(base_url("Authentications/index"), 'Cancel', array('class' => 'btn btn-info', 'title' => 'cancel',)); ?>
                <button type="submit" class="btn btn-success ">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 19-Nov-18
 * Time: 11:31 PM
 */