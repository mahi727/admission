
<?php echo form_open("Users/" .$action , ['class' => 'form-horizontal']); ?>
<div class="col-sm-6" style="margin-left: 20%">
    <div class="box-body">
        <div class="form-group">
            <label class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-8">
                <?php echo form_input(['name' => 'first_name', 'id'=>'firstName', 'class' =>'form-control', 'required' => 'required'],
                    set_value('first_name', (isset($row->first_name) ? $row->first_name : ""))) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-8">
                <?php echo form_input(['name' => 'last_name', 'id'=>'lastName', 'class' =>'form-control', 'required' => 'required'],
                    set_value('last_name', (isset($row->last_name) ? $row->last_name : ""))) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
                <?php echo form_input(['name' => 'email', 'id'=>'email', 'class' =>'form-control', 'required' => 'required'],
                    set_value('email', (isset($row->email) ? $row->email : ""))) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Gender</label>
            <div class="col-sm-8">
                <?php echo form_dropdown('gender', ['0' => 'Male', '1' => 'Female'], isset($row['gender']) ? $row['gender'] : '',
                    ['class' => 'input_textbox form-control', 'required' => 'required', 'id' => 'gender']); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
                <?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'input_textbox form-control', 'required' => 'required'], ''); ?>
            </div>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <?php echo form_submit(array('id' => 'submit', 'type' => 'submit', 'class' => 'btn btn-info pull-right'), 'Save'); ?>
    </div>
    <!-- /.box-footer -->
</div>

<?php echo form_close(); ?>