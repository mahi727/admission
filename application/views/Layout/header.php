<style>
    .container {
        text-align: center;
        position: relative;
        margin-left: 25px;
        background-color: white;
    }
</style>

<header class="main-header" id="main__header">
    <div class="container-fluid" style="text-align: center">
        <div class="logo" style="position: absolute; margin-top: 12px">
            <img id="iitlogo-header" src="http://www.iit.du.ac.bd/assets/img/iitlogo-blue.png" style="width:8em; " alt="IIT Logo">
        </div>
        <h1>PGDIT Online Admission System</h1>

        <div class="hide_div_admin">
            <nav class="navbar pull-right" style="margin-bottom: -25px; margin-right: 25px;">
                <?php echo anchor(base_url("Admins/"), 'Admin Login', array('class' => '', 'title' => 'apply',)); ?>
            </nav>
        </div>

        <div class="hide_div">
            <nav class="navbar pull-right" style="margin-bottom: -25px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Change Password</a></li>
                    <li>
                        <?php echo anchor(base_url("Authentications/"), 'Logout', array('class' => '', 'title' => 'logout',)); ?>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <hr style="color: #c6c6c6b3;">


</header>
