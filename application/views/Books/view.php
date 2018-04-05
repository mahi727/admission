<?php echo anchor(base_url("Books"), 'Back', array('class' => 'btn btn-info pull-right', 'title' => 'back',)); ?>

<div class="container" ">
<table class="table">
    <tr class="col-md-6">
        <td>Book Name:</td>
        <td><?php echo $row->book_name; ?></td>
    </tr>
    <tr class="col-md-12">
        <td>Author Name:</td>
        <td><?php echo $row->auth_name; ?></td>
    </tr>
    <tr class="col-md-6">
        <td>Publish Date:</td>
        <td><?php echo $row->publish_date; ?></td>
    </tr>
</table>
</div>

