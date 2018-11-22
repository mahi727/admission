<style>

    .hide_div_admin {
        display: none;
    }

    table, th, td {
        border-collapse: collapse;
        width: 70%;
        padding: 5px;
    }
</style>


<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><?php echo anchor(base_url("Admins/"), 'Admission Circular', array('class' => '', 'title' => 'circular',)); ?></li>
                <li><?php echo anchor(base_url("Admins/"), 'Applications', array('class' => '', 'title' => 'applications',)); ?></li>
                <li><?php echo anchor(base_url("Admins/"), 'Admit Card', array('class' => '', 'title' => 'admit',)); ?></li>
                <li><?php echo anchor(base_url("Admins/"), 'Seat Plan', array('class' => '', 'title' => 'seat_plan',)); ?></li>
                <li><?php echo anchor(base_url("Admins/"), 'Attendance Sheet', array('class' => '', 'title' => 'attendance',)); ?></li>
                <li><?php echo anchor(base_url("Admins/"), 'Result', array('class' => '', 'title' => 'result',)); ?></li>
            </ul>
        </div>


        <div class="col-sm-8 text-left">
            <h4>Publish Admission Circular</h4>

            </br>

            <div class="form-group">
                <label class="control-label col-sm-6">Upload PGDIT circular as pdf format to publish it:</label>
                <div class="col-sm-2" style="margin-top: -5px">
                    <input type="file" id="files" accept=".pdf" class="hidden"/>
                    <h4><label class="badge" for="files">Upload Circular</label></h4>
                </div>
            </div>
        </div>

        <div class="pull-right">
            <?php echo anchor(base_url("Applications/payment"), 'Submit', array('class' => 'btn btn-success', 'title' => 'submit', 'style' => 'margin-right:350px')); ?>
        </div>

    </div>
</div>
