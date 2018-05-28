<?php echo anchor(base_url("Users"), 'Back', array('class' => 'btn btn-info pull-right', 'title' => 'back',)); ?>

<div class="container" ">
<table class="table">
    <tr class="col-md-6">
        <td>First Name:</td>
        <td><?php echo $row->first_name; ?></td>
    </tr>
    <tr class="col-md-12">
        <td>Last Name:</td>
        <td><?php echo $row->last_name; ?></td>
    </tr>
    <tr class="col-md-6">
        <td>Email:</td>
        <td><?php echo $row->email; ?></td>
    </tr>
    <tr class="col-md-12">
        <td>Gender:</td>
        <td><?php echo $row->gender; ?></td>
    </tr>
</table>


