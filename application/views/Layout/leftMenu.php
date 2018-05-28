<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() . "assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Afrina Sharmin</p>
                <!--<a href="<?php /*echo base_url() . "assets/"; */?>#"><i class="fa fa-circle text-success"></i>
                    Online</a>-->
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <?php echo anchor( base_url("Homes/"), ' Dashboard', array('class' => 'fa fa-circle-o', 'title' => 'Dashboard', )); ?>
            </li>
            <li>
                <?php echo anchor(base_url("Users/"), ' Users', array('class' => 'fa fa-circle-o', 'title' => 'Users') ); ?>
            </li>
            <li>
                <?php echo anchor(base_url("Tables/"), '  Table1', array('class' => 'fa fa-circle-o', 'title' => 'Table', )); ?>
            </li>
            <li>
                <?php echo anchor(base_url("Books/"), '  Books', array('class' => 'fa fa-circle-o', 'title' => 'books', )); ?>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
