<?php 
        $this->load->view('header');
     ?>

<nav class="navbar navbar-expand-md navbar-default bg-default mb-4">
      <a class="navbar-brand" href="#">M. Alfin Z</a>
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
  <div class="">
  <h3 class="display-14">Nama : <?php echo $pegawai[0]->nama ?></h3>
  <p class="lead">Alamat : <?php echo $pegawai[0]->alamat ?></p>
  
</div>
<br>

<h2 style="text-align: center">Daftar Pendidikan</h2>
<br>
<a href="<?php echo base_url("index.php/PendidikanDat/create/".$idPegawai) ?>" class="btn btn-primary">Add </a>
<table class="table table-hover">
  <br>
  <thead>
    <th>id</th>
    <th>Nama Sekolah</th>
    <th>Tahun Lulus</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php foreach ($pendidikan_list as $key => $value): ?>
      <tr>
        <td><?php echo $value['idPendidikan'] ?></td>
        <td><?php echo $value['namaSekolah'] ?></td>
        <td><?php echo $value['tahunLulus'] ?></td>
        <td>
          <a href="<?php echo base_url("index.php/PendidikanDat/update/".$idPegawai."/".$value['idPendidikan']) ?>" class="btn btn-sm btn-success">Edit</a>
          <a href="<?php echo base_url("index.php/PendidikanDat/deleteData/".$idPegawai."/".$value['idPendidikan']) ?>" class="btn btn-sm btn-danger">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
  </div>
  
    <?php 
        $this->load->view('footer');
     ?>
  