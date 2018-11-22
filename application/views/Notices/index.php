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

    .hide_div_admin {
        display: none;
    }
</style>

<h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Notice</h2>

<div class="page_body" style="text-align: center">

    <h4>PGDIT Admission</h4>

    <a href="<?php echo base_url() . "assets/"; ?>dist/img/6c8b1b13-4d4a-4904-8fbf-33757abdb150__notice_30-Oct-2018_2.pdf" download>
            <button class="btn btn-primary" style="margin-top: 45px">Download Circular </button>
    </a>

<div style="height: 30px"></div>

    <div style="text-align: center">
        <?php echo anchor(base_url("Applications/"), 'Apply Now', array('class' => 'btn btn-primary', 'title' => 'apply',)); ?>
    </div>

</div>

