<!--successfull msg-->
<?php
if ($this->session->flashdata('success_msg')) {
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
    <?php
}
?>
<!--error msg-->
<?php
if ($this->session->flashdata('error_msg')) {
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
    <?php
}
?>


<div class="box-body">
    <?php echo anchor(base_url("Tables/add"), 'add new', array('class' => 'btn btn-info pull-left', 'title' => 'add_new',)); ?>
</div>


<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($parsons as $parson) { ?>
        <tr>
            <td> <?php echo $parson->id; ?> </td>
            <td> <?php echo $parson->first_name; ?> </td>
            <td> <?php echo $parson->last_name; ?> </td>
            <td> <?php echo $parson->email; ?> </td>
            <td>
                <?php echo anchor(base_url("Tables/view/".$parson->id), '<span class="glyphicon glyphicon-eye-open"></span>',
                    array('class' => 'btn', 'title' => 'view',)); ?>
                <?php echo anchor(base_url("Tables/edit/".$parson->id), '<span class="glyphicon glyphicon-edit"></span>',
                    array('class' => 'btn', 'title' => 'edit',)); ?>
                <?php echo anchor(base_url("Tables/delete/".$parson->id), '<span class="glyphicon glyphicon-trash"></span>',
                    array('class' => 'btn', 'title' => 'delete', 'onclick' => 'myFunction()')); ?>
            </td>
            <?php } ?>
        </tr>
        </tbody>
    </table>
</div>


<script>
    function myFunction() {
        alert("Delete row!");
    }
</script>