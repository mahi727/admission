<div class="box-body">
    <?php echo anchor(base_url("Tables/add"), 'add new', array('class' => 'btn btn-info pull-left', 'title' => 'add_new', )); ?>
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
        <tr>
            <td>01</td>
            <td>Muniba</td>
            <td>Muntaha</td>
            <td>muni@gmail.com</td>
            <td>
                <?php echo anchor(base_url("Tables/view"), '<span class="glyphicon glyphicon-eye-open"></span>',
                    array('class' => 'btn', 'title' => 'view', )); ?>
                <?php echo anchor(base_url("Tables/edit"), '<span class="glyphicon glyphicon-edit"></span>',
                    array('class' => 'btn', 'title' => 'edit', )); ?>
                <?php echo anchor(base_url("Tables/delete"), '<span class="glyphicon glyphicon-trash"></span>',
                    array('class' => 'btn', 'title' => 'delete', )); ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>