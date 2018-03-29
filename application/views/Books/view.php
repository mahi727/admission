
<?php echo anchor(base_url("Books/index"), 'Back', array('class' => 'btn btn-info pull-right', 'title' => 'back',)); ?>

<div class="container" ">
<div type="hidden" name="hidden_txt" value="<?php echo $book->id; ?>">
    <table class="table">
        <tr class="col-md-6">
            <td>Book Name:</td>
            <td><?php echo $book->book_name; ?></td>
        </tr>
        <tr class="col-md-12">
            <td>Author Name:</td>
            <td><?php echo $book->auth_name; ?></td>
        </tr>
        <tr class="col-md-6">
            <td>Publish Date:</td>
            <td><?php echo $book->publish_date; ?></td>
        </tr>
    </table>
</div>
</div>

