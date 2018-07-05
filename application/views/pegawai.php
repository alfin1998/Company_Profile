<?php 
        $this->load->view('header');
     ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<nav class="navbar navbar-expand-md navbar-dark bg-warning">
      <a class="navbar-brand" href="<?php echo site_url() ?>/UserGrid/Dinamis">Back</a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> -->
        <!-- <span class="navbar-toggler-icon"></span> -->
      <!-- </button> -->
     <!--  <div class="collapse navbar-collapse" id="navbarCollapse">
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
      </div> -->
    </nav>

    <!-- <main role="main" class="container"> -->

      <h2 class="text-center">Data Pegawai</h2>
      <div class="container">
      <a href="<?php echo base_url('index.php/PegawaiDat/create') ?>" class="btn btn-primary my-3">Tambah</a>
      <table class="table example">
        <br>
        <br>
        <thead>
          <th>ID</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Foto</th>
          <th>Aksi</th>

        </thead>
        <tbody>
          <?php foreach ($pegawai_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['nama'] ?></td>
              <td><?php echo $value['tanggalLahir'] ?></td>
              <td><?php echo $value['alamat'] ?></td>
              <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $value['foto']?>" alt="" width="10" height="10"></td>
              <td>
                <a href="<?php echo base_url("index.php/PegawaiDat/update/".$value['id']) ?>" class="btn btn-sm btn-success">Edit</a>
                <a href="<?php echo base_url("index.php/PegawaiDat/deleteData/".$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                <a href="<?php echo base_url("index.php/PendidikanDat/ByID/".$value['id']) ?>" class="btn btn-sm btn-primary">Pendidikan</a>
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.example').DataTable();
} );
</script>
    
    <?php 
        $this->load->view('footer');
     ?>
  