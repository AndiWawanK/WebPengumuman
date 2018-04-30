<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet">
    <link rel="icon" type="image/icon" href="<?php echo base_url() ?>assets/img/logo-smk.png">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12 block">
          <div class="col-sm-4 col-sm-offset-4 well">
            <h3 class="text-center">Login</h3><hr>
            <!-- <form class="form" action="" method="post"> -->
            <?php echo validation_errors(); ?>
            <?php echo form_open('login/login_procces'); ?>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-login" name="login">Login</button>
              </div>
            </form>
              <?php if(isset($_POST['login'])){ ?>
                <?php if($notif != ''){ ?>
                  <div class="alert alert-danger">
                    <?php echo $notif ?>
                  </div>
                <?php } ?>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <!-- =================== -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
