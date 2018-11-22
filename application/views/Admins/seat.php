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
                <li class="active"><?php echo anchor(base_url("Admins/seat"), 'Seat Plan', array('class' => '', 'title' => 'seat_plan',)); ?></li>
                <li><?php echo anchor(base_url("Admins/attendance"), 'Attendance Sheet', array('class' => '', 'title' => 'attendance',)); ?></li>
                <li><?php echo anchor(base_url("Admins/result"), 'Result', array('class' => '', 'title' => 'result',)); ?></li>
            </ul>
        </div>


        <div class="col-sm-8 text-left">
            <h4>Generate Seat Plan</h4>
            </br>


            <div style="margin-top: 10px">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Room No</th>
                        <th>Capacity</th>
                        <th>Roll No</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>107</td>
                        <td>30</td>
                        <td>101283-1011310</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="pull-right">
                <?php echo anchor(base_url("Applications/payment"), 'Add New Room', array('class' => 'btn btn-success', 'title' => 'submit',)); ?>
            </div>

            <div class="form-group" style="margin-top: 95px">
                <label class="control-label col-sm-6">Click the button to pulblish seat plan:</label>
                <div class="col-sm-2" style="margin-top: -5px">
                    <?php echo anchor(base_url("Applications/payment"), 'Publish', array('class' => 'btn btn-primary', 'title' => 'submit', 'style' => 'margin-right:350px')); ?>
                </div>
            </div>

        </div>


    </div>
</div>
