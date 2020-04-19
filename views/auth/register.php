<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/adminlte.css" >
    <link rel="stylesheet" href="<?= BASEURL; ?>/public/plugins/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href=""><b>Register</b></a>
      </div>  
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Create New membership</p>
          <?php 
                if(isset($_SESSION['flash'])){
                  echo '<div class="alert alert-' .$_SESSION['flash']['tipe']. ' alert-dismissible fade show" role="alert">'.$_SESSION['flash']['pesan'].'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                unset($_SESSION['flash']);
              }
              ?>
          <form action="<?= BASEURL?>/Auth/_register" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="name" placeholder="Name" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password2" placeholder="Confirmation Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
              <a href="<?= BASEURL ?>/Auth/login" class="text-center">Back to login</a>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <script src="<?= BASEURL; ?>/public/plugins/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/public/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= BASEURL; ?>/public/js/adminlte.js"></script>
  </body>
</html>