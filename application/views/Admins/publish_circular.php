<style>
    .page_body {
        width: 350px;
        height: 350px;
        padding: 13px;
        margin: 0 auto;
        background-image: url("<?php echo base_url() . "assets/"; ?>dist/img/index.jpeg");
        background-repeat: no-repeat;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    .hide_div_admin, .hide_div {
        display: none;
    }
</style>

<h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Publish PGDIT Admission Circular</h2>

<div class="page_body" style="text-align: center">


    <div style="text-align: center; margin-top: 150px">
        <?php echo anchor(base_url("Admins/admin_dashboard"), 'Active PGDIT Admission', array('class' => 'btn btn-primary', 'title' => 'active_admission')); ?>
    </div>

</div>
