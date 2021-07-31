<?php
include('Controller/test/login.php'); // Includes Login Script


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="NiceAdmin/img/favicon.png">

  <title>Project</title>

  <!-- Bootstrap CSS -->
  <link href="NiceAdmin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="NiceAdmin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="NiceAdmin/css/style.css" rel="stylesheet">
  <link href="NiceAdmin/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="NiceAdmin/js/html5shiv.js"></script>
    <script src="NiceAdmin/js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" formaction="Controller/login.php">
        <br><br>
      </div>
    </form>
  </div>


</body>

</html>
