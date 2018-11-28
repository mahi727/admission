<style>
    .card-container.card {
        max-width: 350px;
        margin-bottom: 50px;
        margin-top: 50px;
    }

    .card {
        background-color: #F7F7F7;
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93;
        margin-bottom: 20px;
    }

    .form-group {
        margin-left: 20px;
    }

    .hide_div_admin, .hide_div {
        display: none;
    }
</style>


<div class="container">
    <div class="card card-container">

        <?php echo form_open( base_url("Admins/publish_circular" )); ?>
          <h3 style="text-align: center">Admin Login</h3>
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
                <input  name="submit" value="Login" class=".btn-default pull-right" type="submit">
            </div>

        <?php echo form_close(); ?>
    </div>
</div>





