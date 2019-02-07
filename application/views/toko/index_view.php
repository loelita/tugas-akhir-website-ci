<section id="main-content">
          <section class="wrapper">

              <div class="row">
 -                  <div class="col-lg-9 main-chart">

<!-- <div class="container">
  <div class="row"> 
    <div class="col-lg-2">
  
    </div> -->
    <div class="col-lg-12"> 
        <!-- membuat button tambah data -->

      <div class="row mt-12">
          <div class="col-md-6">
          <a href="<?= base_url('Toko/tambah') ?>" class="btn btn-primary">Tambah Data</a>
          </div>
      </div>
      <!-- membuat list judul buku -->
      <div class="row mt-9">
          <div class="col-md-12"> 
            <h1>Data Barang</h1>

              
          

            <?php 
            if($this->session->flashdata('sukses') == TRUE)
            { ?>

              <div class="alert alert-sucsess alert-dismissible fade show" role="alert">
                Data Barang <strong>berhasil</strong> <?=$this->session->flashdata('sukses');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <?php
            }
            ?>

            <ul class="list-group">
              <!-- untuk meload judul dr model harus menggunakan foreach -->
              <?php
              foreach ($barang as $row ) { ?>
              <li class="list-group-item"> <?= $row['nama_barang'] ?> 
              <a href="<?= base_url('Toko/hapus/').$row['id_barang'] ?>" class="badge badge-danger float-right ml-2 ">Hapus</a>
              <a href="<?= base_url('Toko/edit/').$row['id_barang'] ?>" class="badge badge-warning float-right ml-2">Edit</a>
              <a href="<?= base_url('Toko/detail/').$row['id_barang'] ?>" class="badge badge-success float-right ml-2">Detail</a>
              </li>
              
              <?php }
              ?>  
            </ul>

          </div>
      </div>


<div class="col-md-12">
<h1>DATA PELANGGAN PRE ORDER</h1>

<table class="table">

          <thead class="thead-dark">

            <tr>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Email</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($user as $row ) { ?>
            <tr>
              <td><?= $row['nama_pemesan'] ?></td>
              <td><?= $row['email'] ?> </td>
              <td><?= $row['nama_barang'] ?> </td>
              <td><?= $row['jumlah'] ?> </td>
              <td><?= $row['alamat'] ?> </td>
            </tr>

            <?php }
                      ?>
          </tbody>

        </table>
              

</div>
        

      <div class="row mt-3">
          <div class="col-md-6">
          <a href="<?= base_url('User/index') ?>" class="btn btn-primary">Website</a>
          </div>
      </div>

    </div>
  </div>
</div>

</div>
</div>
</section>
</section>