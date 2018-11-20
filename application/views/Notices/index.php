<style>
    .page_body {
        width: 350px;
        height: 400px;
        padding: 13px;
        margin: 0 auto;
        background: #fcfcfc;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93;
        margin-top: 50px;
        margin-bottom: 20px;
    }
</style>

<h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Notice</h2>

<div class="page_body">
    <img src="<?php echo base_url() . "assets/"; ?>dist/img/photo1.png" class="img-circle"
         alt="User Image">
    <!-- <a href="<?php /*echo base_url() . "assets/"; */?>img/notice.PNG" download>
            <button>Notice </button>
        </a>-->

</div>

<div style="text-align: center">
    <?php echo anchor(base_url("Authentications/form"), 'Apply for PGDIT', array('class' => 'btn btn-success', 'title' => 'apply',)); ?>
</div>