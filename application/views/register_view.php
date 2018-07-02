<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coneyko Alfin Company</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  </head>


  
  <body>
   
    <nav class="navbar navbar-expand-md navbar-dark bg-warning">
      <a class="navbar-brand" href="#">Coneyko</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
          </li>
        </ul>
        
      </div>
    </nav>

 <main role="main" class="container">
      <div class="jumbotron">
        <h1>Daftar</h1>
        
          
      </div>
    </main>

  


    <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
      <div class="container">
      <h1 class="h3 mb-3 font-weight-normal">Silahkan Mendaftar</h1>
      <?php echo validation_errors(); ?>
      <label for="username" class="sr-only">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Username" autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
      <select name="level" id="level" class="form-control" style="height: 45px;">
        <option value="admin">Admin</option>
        <option value="user">User</option>

      </select>
      <button class="btn btn-lg btn-warning" type="submit">Sign up</button>

    <a href="<?php echo base_url('index.php/Login') ?>" class="btn btn-lg btn-danger">Kembali Login</a>
    </form>
  </body>
</html>
