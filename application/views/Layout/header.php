<style>
    .main-header {
        text-align: center;
        position: relative;
        background: linear-gradient(to bottom, #3399ff 4%, #c0ffea 97%);
        color: white;
    }

    h1{
        text-shadow: 2px 2px rgba(64, 64, 64, 0.81);
    }
</style>

<header class="main-header" id="main__header">
    <div class="container-fluid" style="text-align: center">

        <div>
            <div class="logo col-sm-2" style="position: relative; margin-top: 12px">
                <img id="iitlogo-header" src="<?php echo base_url() . "assets/"; ?>dist/img/iit.png" alt="IIT Logo">
            </div>
            <div class="col-sm-8" style="text-align: center; margin-top: 10px;">
                <h1><b>PGDIT Admission System</b></h1>
            </div>
        </div>

        <div class="container-fluid">
            <div class="hide_div_admin col-sm-3 pull-right">
                <nav class="nav navbar-nav pull-right" >
                    <?php echo anchor(base_url("Admins/"), 'Admin Login',
                        array('class' => 'btn btn-light', 'title' => 'apply', 'style' => 'color:white; text-shadow: 2px 2px rgba(119, 119, 119, 0.81)')); ?>
                </nav>
            </div>

            <div class="hide_div col-sm-3 pull-right ">
                <nav class="navbar "">
                <ul class="nav navbar-nav">
                    <li><?php echo anchor(base_url("Authentications/change_password"), 'Change Password',
                            array('class' => 'btn btn-light', 'title' => 'change_password', 'data-toggle' => 'modal', 'data-target'=>'#myModal')); ?></li>
                    <li><?php echo anchor(base_url("Authentications/"), 'Logout', array('class' => 'btn btn-light', 'title' => 'logout',)); ?></li>
                </ul>
                </nav>
            </div>
        </div>

    </div>

</header>



