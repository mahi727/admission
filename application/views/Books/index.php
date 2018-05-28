<?php echo form_open('Books/index', ['method' => 'post']); ?>
<div class="col-sm-2">
        <?php echo form_input('book_name', set_value('book_name', isset($book_name) ? $book_name : ""), ['class' => 'form-control', 'placeholder' => 'Book Name']); ?>
</div>

<button type="submit" id="submit" class="btn btn-search" style="background-color: forestgreen">
    <?php echo 'Search'; ?>
</button>

<?php form_close(); ?>

<div class="box-body">
    <?php echo anchor(base_url("Books/add"), 'add new', array('class' => 'btn btn-info pull-left', 'title' => 'add_new',)); ?>
</div>

<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publish Date</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $i = 0;
        foreach ($books_details as $book) {
            $i++;
            ?>
        <tr>
            <td> <?php echo $i; ?> </td>
            <td> <?php echo $book['book_name']; ?> </td>
            <td> <?php echo $book['auth_name']; ?> </td>
            <td> <?php echo $book['publish_date']; ?> </td>
            <td>
                <?php echo anchor(base_url("Books/view/".$book['id']), '<span class="glyphicon glyphicon-eye-open"></span>',
                    array('class' => 'btn', 'title' => 'view',)); ?>
                <?php echo anchor(base_url("Books/edit/".$book['id']), '<span class="glyphicon glyphicon-edit"></span>',
                    array('class' => 'btn', 'title' => 'edit',)); ?>
                <?php echo anchor(base_url("Books/delete/".$book['id']), '<span class="glyphicon glyphicon-trash"></span>',
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