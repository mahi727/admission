<?php echo form_open(base_url('Users/index'), ['method' => 'post']); ?>
<div class="col-sm-2">
    <?php echo form_input('first_name', set_value('first_name', isset($first_name) ? $first_name: ""), ['class' => 'form-control', 'placeholder' => 'Name']); ?>
</div>

<button type="submit" id="submit" class="btn btn-search" style="background-color: #35b47e">
    <?php echo 'Search'; ?>
</button>

<?php form_close(); ?>

<div class="box-body">
    <?php echo anchor(base_url("Users/add"), 'Add New', array('class' => 'btn btn-info pull-left', 'title' => 'add_new',)); ?>
</div>

<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $i = 0;
        foreach ($users as $user) {
        $i++;
        ?>
        <tr>
            <td> <?php echo $i; ?> </td>
            <td> <?php echo $user['first_name']; ?> </td>
            <td> <?php echo $user['last_name']; ?> </td>
            <td> <?php echo $user['email']; ?> </td>
            <td> <?php echo $user['gender']; ?> </td>
            <td>
                <?php echo anchor(base_url("Users/view/".$user['id']), '<span class="glyphicon glyphicon-eye-open"></span>',
                    array('class' => 'btn', 'title' => 'view',)); ?>
                <?php echo anchor(base_url("Users/edit/".$user['id']), '<span class="glyphicon glyphicon-edit"></span>',
                    array('class' => 'btn', 'title' => 'edit',)); ?>
                <?php echo anchor(base_url("Users/delete/".$user['id']), '<span class="glyphicon glyphicon-trash"></span>',
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
