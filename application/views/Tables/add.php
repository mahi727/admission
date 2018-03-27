<!--successfull msg-->
<?php
    if ($this->session->flashdata('success_msg')) {
?>
<div class="alert alert-success">
    <?php echo $this->session->flashdata('success_msg'); ?>
</div>
<?php
}
?>
<!--error msg-->
<?php
if ($this->session->flashdata('error_msg')) {
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
    <?php
}
?>

<section class="content-header">
    <h1>Add New Parson</h1>
</section>

<form class="form-horizontal" method="post" action="<?php echo base_url("Tables/submit"); ?>">
    <div class="box-body">
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="firstName" id="firstName" required="required"
                       placeholder="Enter Your First Name" type="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="lastName" id="lastName" required="required"
                       placeholder="Enter Your Last Name" type="firstName">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" name="email" id="email" required="required"
                       placeholder="Enter Your Email Adress" type="email">
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Submit</button>
    </div>
    <!-- /.box-footer -->
</form>