<form class="form-horizontal" method="post" action="<?php echo base_url("Tables/adddata");?>">
    <div class="box-body">
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input name="first_name" class="form-control" id="firstName" placeholder="Enter Your First Name" type="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input name="last_name" class="form-control" id="lastName" placeholder="Enter Your Last Name" type="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input name="email" class="form-control" id="email" placeholder="Enter Your Email Adress" type="email">
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
</form>