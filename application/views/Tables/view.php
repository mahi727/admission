
<?php echo anchor(base_url("Tables/index"), 'Back', array('class' => 'btn btn-info pull-right', 'title' => 'back',)); ?>

<div class="container" ">
<div type="hidden" name="hidden_txt" value="<?php echo $parson->id; ?>">
    <table class="table">
        <tr class="col-md-6">
            <td>First Name:</td>
            <td><?php echo $parson->first_name; ?></td>
        </tr>
        <tr class="col-md-12">
            <td>Last Name:</td>
            <td><?php echo $parson->last_name; ?></td>
        </tr>
        <tr class="col-md-6">
            <td>Email:</td>
            <td><?php echo $parson->email; ?></td>
        </tr>
    </table>
</div>
</div>

