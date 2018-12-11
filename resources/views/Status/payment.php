<style>
    table, th, td {
        border-collapse: collapse;
        width: 70%;
        padding: 5px;
    }

    .hide_div_admin {
        display: none;
    }
</style>


<div class="container-fluid text-center">
    <div class="row content" style="margin-top: 5px">
        <div class="col-sm-2 sidenav">
            <ul class="nav nav-pills nav-stacked">
                <li><?php echo anchor(base_url("Status/status"), 'Application Form Status', array('class' => '', 'title' => 'form status',)); ?></li>
                <li class="active"><?php echo anchor(base_url("Status/payment"), 'Payment Status', array('class' => '', 'title' => 'payment',)); ?></li>
                <li><?php echo anchor(base_url("Status/admit"), 'Admit Card', array('class' => '', 'title' => 'admit',)); ?></li>
                <li><?php echo anchor(base_url("Status/seat"), 'Seat Plan', array('class' => '', 'title' => 'seat_plan',)); ?></li>
                <li><?php echo anchor(base_url("Status/result"), 'Result', array('class' => '', 'title' => 'result',)); ?></li>
            </ul>
        </div>

        <div id="payment" class="container-fluid col-sm-8" style="text-align: center">
            <h2>Payment Status</h2>
            <p>Pending!</p>
        </div>
    </div>
</div>
