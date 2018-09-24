<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signin To Continue</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style type="text/css">
    .panel-heading {
      padding: 5px 15px;
    }
    .panel-footer {
      padding: 1px 15px;
      color: #A0A0A0;
    }
    .profile-img {
      width: 96px;
      height: 96px;
      margin: 0 auto 10px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <?php
  $success_msg= $this->session->flashdata('success_msg');
  $error_msg= $this->session->flashdata('error_msg');
  if($success_msg){
    ?>
    <div class="alert alert-primary" role="alert">
      <?php echo $success_msg; ?>
      </div>
      <?php
    }
    if($error_msg){
      ?>
      <div class="alert alert-danger">
        <?php echo $error_msg; ?>
        </div>
        <?php
      }
      ?>
  <div class="container" style="margin-top: 40px">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel-heading">
          <strong>Signin To Continue</strong>
        </div>
        <div class="panel-body">
          <form role="form" action="<?php echo base_url(); ?>index.php/beranda/aksi_login" method="POST" class="form-signin">
            <fieldset>
              <div class="row">
                <div class="center-block">
                  <img src="http://code.google.com/images/developers.png" class="profile-img">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </span>
                      <input type="text" name="username" placeholder="Username" class="form-control" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                      </span>
                      <input type="password" name="password" placeholder="Password" class="form-control" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="login" name="login">
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="panel-footer">
          Don't have an account ! <a href="<?php echo base_url(); ?>index.php/beranda/goregister"> SignUp Here</a>
        </div>
      </div>
    </div>  
  </div>
</body>
</html>
