<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Multilevel login</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-default">
  <a class="navbar-brand" href="#">Coneyko Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>

</nav>

<main role="main" class="container">
  <div class="jumbotron"
  <h1>Login</h1>
    </div>
  </main>

  <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/cekLogin') ?>">
    <div class="container">

      <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
      <?php echo validation_errors(); ?>
      <label for="username" class="sr-only">
      Username</label>
      <input type="text" name="username" id="username" class="form-control"
      placeholder="Username" autofocus>
       <label for="password" class="sr-only">Password</label>
        <button class="btn btn-lg btn-success" type="submit">Login</button>

      <a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-lg btn-warning">Register</a>
    </div>
  </form>
</body>
</html>