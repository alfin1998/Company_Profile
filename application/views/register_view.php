<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coneyko Company</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">


    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">


  </head>


  
  <body>
   
    <!-- nav class="navbar navbar-expand-md navbar-dark bg-warning">
      <a class="navbar-brand" href="#">Coneyko</a> -->
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

       <!-- <body class="text-center"> -->
    
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">

      
          <!-- </li>
        </ul>
        
      </div>
    </nav> -->
<!-- 
 <main role="main" class="container">
      <div class="jumbotron">
        <h1>Daftar</h1> -->
        
          
 <!--      </div>
    </main>

   -->


    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
      <!-- <div class="container"> -->
      <span class="login100-form-title">Coneyko Company</span>
      <?php echo validation_errors(); ?>
       <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100"></span>
          </div>
      <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>
          <br>
      <select name="level" id="level" class="form-control" style="height: 45px;">
        <!-- <option value="admin">Admin</option> -->
        <option value="user">User</option>

      </select>
    
      <br>
      <button class="btn btn-lg btn-warning" type="submit">Sign up</button>

    <a href="<?php echo base_url('index.php/Login') ?>" class="btn btn-lg btn-danger">Kembali Login</a>

  <br>
  <br>
    </form>
  </body>
</html>
