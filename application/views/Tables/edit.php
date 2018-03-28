

<form class="form-horizontal" method="post" action="<?php echo base_url("Tables/update"); ?>">
    <input type="hidden" name="hidden_txt" value="<?php echo  $parson->id; ?>">
    <div class="box-body">
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="firstName" id="firstName" value="<?php echo $parson->first_name; ?>" required="required"
                       placeholder="Enter Your First Name" type="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="lastName" id="lastName" value="<?php echo $parson->last_name; ?>" required="required"
                       placeholder="Enter Your Last Name" type="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" name="email" id="email" value="<?php echo $parson->email; ?>"  required="required"
                       placeholder="Enter Your Email Adress" type="email">
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Update</button>
    </div>
    <!-- /.box-footer -->
</form>