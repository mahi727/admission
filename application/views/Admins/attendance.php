<style>

    .hide_div_admin {
        display: none;
    }
</style>


<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <li><?php echo anchor(base_url("Admins/admin_dashboard"), 'Admission Circular', array('class' => '', 'title' => 'circular',)); ?></li>
                <li><?php echo anchor(base_url("Admins/applications"), 'Applications', array('class' => '', 'title' => 'applications',)); ?></li>
                <li><?php echo anchor(base_url("Admins/admit"), 'Admit Card', array('class' => '', 'title' => 'admit',)); ?></li>
                <li><?php echo anchor(base_url("Admins/seat"), 'Seat Plan', array('class' => '', 'title' => 'seat_plan',)); ?></li>
                <li class="active"><?php echo anchor(base_url("Admins/attendance"), 'Attendance Sheet', array('class' => '', 'title' => 'attendance',)); ?></li>
                <li><?php echo anchor(base_url("Admins/result"), 'Result', array('class' => '', 'title' => 'result',)); ?></li>
            </ul>
        </div>


        <div class="col-sm-8 text-left">
            <h4>Download Attendance Sheet</h4>

            </br>

            <div class="form-group">
                <label class="control-label col-sm-6">Click the button to download attendance sheet:</label>
                <div class="col-sm-2" style="margin-top: -5px">
                    <a href="<?php echo base_url() . "assets/"; ?>dist/img/6c8b1b13-4d4a-4904-8fbf-33757abdb150__notice_30-Oct-2018_2.pdf" download>
                        <button class="btn btn-primary" style="margin-right: 350px">Download</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
