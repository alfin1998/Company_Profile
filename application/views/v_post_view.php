<?php 
	$b=$data->row_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $b['berita_judul'];?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
 <nav class="navbar navbar-expand-md navbar-dark bg-warning mb-4">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <li><a class="nav-link" href="<?php echo site_url()?>/pegawai">Pegawai<span class="sr-only">(current)</span></a></li>
           <li><a class="nav-link" href="<?php echo site_url() ?>/UserGrid/Dinamis">Admin</a></li>
            <li><a class="nav-link" href="<?php echo site_url()?>/Post_berita/lists">News<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form">
          <a href="<?php echo base_url('index.php/Login/logout') ?>" ">Logout</a>
        </form>
      </div>
    </nav>
<body>


	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $b['berita_judul'];?></h2><hr/>
			<img src="<?php echo base_url().'assets/images/'.$b['berita_image'];?>">
			<?php echo $b['berita_isi'];?>
		</div>
		
	</div>

  

	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>