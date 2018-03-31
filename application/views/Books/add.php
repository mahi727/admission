
<?php echo form_open("Books/add" , ['class' => 'form-horizontal']); ?>
<div class="box-body">
    <?php form_input(['name' => 'id', 'id'=>'id', 'class' =>'form-control'],
        set_value('name', (isset($row->id) ? $row->id : ""))) ?>
    <div class="form-group">
        <label class="col-sm-2 control-label">Book Name</label>
        <div class="col-sm-10">
            <?php echo form_input(['name' => 'book_name', 'id'=>'bookName', 'class' =>'form-control', 'required' => 'required'],
                set_value('name', (isset($row->book_name) ? $row->book_name : ""))) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Author Name</label>
        <div class="col-sm-10">
            <?php echo form_input(['name' => 'auth_name', 'id'=>'authName', 'class' =>'form-control', 'required' => 'required'],
                set_value('name', (isset($row->auth_name) ? $row->auth_name : ""))) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Publish Date</label>
        <div class="col-sm-10">
            <?php echo form_input(['name' => 'publish_date', 'id'=>'publish_date', 'class' =>'form-control', 'type'=>'date', 'required' => 'required'],
                set_value('name', (isset($row->publish_date) ? $row->publish_date : ""))) ?>
        </div>
    </div>

</div>
<!-- /.box-body -->
<div class="box-footer">
    <?php echo form_submit(array('id' => 'submit', 'type' => 'submit', 'class' => 'btn btn-info pull-right'), 'Save'); ?>
</div>
<!-- /.box-footer -->
</form>