<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title> Coneyko Company</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-default bg-default mb-4">
    <a class="navbar-brand" href="#">Coneyko Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        </li>
      </ul>
      
    </div>
  </nav>
	
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php echo form_open_multipart('PegawaiDat/create'); ?>
      <legend>Tambah Data Pegawai</legend>
      <?php echo validation_errors(); ?>

      <div class="form-group">
        	<label for="">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Input field">
            <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Input field">
            <label for="">Tgl Lahir</label>
        <input type="Date" class="form-control" name="tglLahir" placeholder="Date">
            <label for="">Foto</label>
        <input type="File" class="form-control" name="foto" placeholder="upload file">


      </div>
      <button type="submit" class="btn btn-success">Add</button>
      <?php echo form_close(); ?>
    </div>

  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
