<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Company Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
 
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>
</head>
<body>
     
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href=""></a>
    </div>
    <ul class="nav navbar-nav">
     <li class="active"><a href="<?php echo site_url('Home') ?>">Home</a></li>
      <li class="active"><a href="<?php echo site_url('PegawaiDat/index') ?>">Pegawai area</a></li>
      <li><a class="nav-link" href="<?php echo site_url('Post_berita/index')?>">News Update<span class="sr-only">(current)</span></a>
     
      
      
      
    </ul>
  </div>
</nav>
<h2>Data Akun</h2>
    <div id="jsGrid"></div>
</body>
</html>