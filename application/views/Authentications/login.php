<style>
    .login-page {
        width: 350px;
        padding: 13px;
        margin: 0 auto;
        background: #fcfcfc;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93;
        margin-top: 70px;
        margin-bottom: 70px;
    }

    .form-group {
        margin-left: 20px;
    }

    .hide_div {
        display: none;
    }

</style>
<?php echo form_open( base_url("Notices" ), ['class' => 'login-page']); ?>
<!--<form action="#" class="login-page" method="post" accept-charset="utf-8">
-->    <h3 style="text-align: center">Login to your account</h3>
</br>

<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="text" class="form-control" name="username" placeholder="User Name">
</div>
</br>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
</div>
</br>
<div class="form-inline">
    <label class="checkbox"><input name="remember" value="1" id="remember" type="checkbox"> Stay Signed in</label>
    <input  name="submit" value="Login" class=".btn-default pull-right" type="submit">
</div>

<div class="form-inline" style="margin-top: 3px;">Do not have account?
    <?php echo anchor(base_url("Authentications/registration"), ' Register Now', array('class' => 'text-center', 'title' => 'registration',)); ?>

</div>

<hr>
<!--</form>
--><?php echo form_close(); ?>


