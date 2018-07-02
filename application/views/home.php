
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Coneyko Profile</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> -->
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b></b> Coneyko Company</a>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      
          <a class="nav-link" href="<?php echo site_url()?>/pegawai">Pegawai</a>
           <a class="nav-link" href="<?php echo site_url() ?>/UserGrid/Dinamis">Admin</a>
            <a class="nav-link" href="<?php echo site_url()?>/Post_berita/lists">News</a>
          
        
          <a href="<?php echo base_url('index.php/Login/logout') ?>" ">Logout</a>
        
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/w3images/architect.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b></b></span> <span class="w3-hide-small w3-text-light-grey">Coneyko Company</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Game Developer</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rpg Mechanic</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Turn Based Control</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">2D HD Graphic</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rating 8.5</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>


  


  <!-- About Section -->


    <main role="main" class="container">
      <div class="">
        <h1>Home</h1>
        <p class="lead">
          <?php 
echo 'Selamat Datang,@'.$this->session->userdata('logged_in')['username']; ?>
        </p>
      </div>
    </main>

  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Perusahaan Ini dibuat oleh muhammad Alfin Zakariya dimana dia mengerjakan sebuah game yang bergenre 2D. Perusahaan ini berdiri tahun 2018. 
     
    </p>
  </div>


    <main role="main" class="container">
      <div class="">
        <h1>Home</h1>
        <p class="lead">
          <?php 
echo 'Selamat Datang,@'.$this->session->userdata('logged_in')['username']; ?>
        </p>
      </div>
    </main>


  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>Muh. Alfin Z</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Creator of Company and website management.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <h3>Hilda lauda Satria</h3>
      <p class="w3-opacity">Admin</p>
      <p>Website management.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
  
  
<!-- End page content -->
</div>

<!-- Google Map -->
<div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Add Google Maps -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
