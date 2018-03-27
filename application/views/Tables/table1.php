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
                <?php echo anchor(base_url("Tables/view"), '<span class="glyphicon glyphicon-eye-open"></span>',
                    array('class' => 'btn', 'title' => 'view',)); ?>
                <?php echo anchor(base_url("Tables/edit"), '<span class="glyphicon glyphicon-edit"></span>',
                    array('class' => 'btn', 'title' => 'edit',)); ?>
                <?php echo anchor(base_url("Tables/delete"), '<span class="glyphicon glyphicon-trash"></span>',
                    array('class' => 'btn', 'title' => 'delete',)); ?>
            </td>
            <?php } ?>
        </tr>
        </tbody>
    </table>
</div>