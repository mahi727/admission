<style>
    .card-container.card {
        max-width: 350px;
        background-image: url("<?php echo base_url() . "assets/"; ?>dist/img/index.jpeg");
        background-repeat: no-repeat;
        margin-bottom: 100px;
        margin-top: 100px;
    }

    .card {
        background-color: #F7F7F7;
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93;
        margin-bottom: 20px;
    }

    .hide_div_admin {
        display: none;
    }
</style>

<div class="container">
    <div class="card card-container" style="text-align: center">

        <div style="margin-top: 45px">
            <a href="<?php echo base_url() . "assets/"; ?>dist/img/6c8b1b13-4d4a-4904-8fbf-33757abdb150__notice_30-Oct-2018_2.pdf" download>
                <button class="btn btn-primary ">Download Circular </button>
            </a>
        </div>
        </br>
        </br>

        <div style="text-align: center; margin-bottom: 45px">
            <?php echo anchor(base_url("Status/status"), 'View Admission Details', array('class' => 'btn btn-primary ', 'title' => 'apply',)); ?>
        </div>

    </div>
</div>



