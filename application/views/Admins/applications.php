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
                <li class="active"><?php echo anchor(base_url("Admins/applications"), 'Applications', array('class' => '', 'title' => 'applications',)); ?></li>
                <li><?php echo anchor(base_url("Admins/admit"), 'Admit Card', array('class' => '', 'title' => 'admit',)); ?></li>
                <li><?php echo anchor(base_url("Admins/seat"), 'Seat Plan', array('class' => '', 'title' => 'seat_plan',)); ?></li>
                <li><?php echo anchor(base_url("Admins/attendance"), 'Attendance Sheet', array('class' => '', 'title' => 'attendance',)); ?></li>
                <li><?php echo anchor(base_url("Admins/result"), 'Result', array('class' => '', 'title' => 'result',)); ?></li>
            </ul>
        </div>


        <div class="col-sm-8 text-left">
            <h4>Applications</h4>
            </br>

            <?php echo form_open('Admin/', ['method' => 'post']); ?>
            <div class="col-sm-3">
                <?php echo form_input('search applicant', set_value('search_applicant'), ['class' => 'form-control', 'placeholder' => 'search applicant']); ?>
            </div>

            <div class="col-sm-2">
                <button type="submit" id="submit" class="btn btn-search" style="background-color: #74bfac;">
                    <?php echo 'Search'; ?>
                </button>
            </div>

            </br>

            <?php form_close(); ?>

            <div style="margin-top: 40px">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Application ID</th>
                        <th>Name</th>
                        <th>Mobile No</th>
                        <th>Payment Status</th>
                        <th>Approve Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>101284</td>
                        <td>Afrina Sharmin</td>
                        <td>+8801623466193</td>
                        <td>Complete</td>
                        <td>Eligible</td>
                        <td>
                            <?php echo anchor(base_url("Applications/"), '<span class="glyphicon glyphicon-eye-open"></span>', array('class' => 'btn', 'title' => 'view', )); ?>
                            <?php echo anchor(base_url("Applications/"), '<span class="glyphicon glyphicon-eye-edit"></span>', array('class' => 'btn', 'title' => 'edit', )); ?>
                        </td>
                    </tr>


                    <tr>
                        <td>101285</td>
                        <td>Sabbir Ahmed</td>
                        <td>+8801623487293</td>
                        <td>Complete</td>
                        <td>Not Eligibale</td>
                        <td>
                            <?php echo anchor(base_url("Applications/"), '<span class="glyphicon glyphicon-eye-open"></span>', array('class' => 'btn', 'title' => 'view', )); ?>
                            <?php echo anchor(base_url("Applications/"), '<span class="glyphicon glyphicon-eye-edit"></span>', array('class' => 'btn', 'title' => 'edit', )); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>101286</td>
                        <td>Maliha Khan</td>
                        <td>+8801723487293</td>
                        <td>Complete</td>
                        <td>-</td>
                        <td>
                            <?php echo anchor(base_url("Applications/"), '<span class="glyphicon glyphicon-eye-open"></span>', array('class' => 'btn', 'title' => 'view', )); ?>
                            <?php echo anchor(base_url("Applications/"), '<span class="glyphicon glyphicon-eye-edit"></span>', array('class' => 'btn', 'title' => 'edit', )); ?>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
</div>
