<section id="main-content">
          <section class="wrapper">

              <div class="row">
 -                  <div class="col-lg-9 main-chart">

<div class="container">
<div class="row mt-3" style="padding: 10px;" >
<div class="col-md-6" > 
<div class="card">
  <h5 class="card-header" style="padding: 20px;">Detail Data Barang</h5>
  <div class="card-body " style="margin-left: 20px;  >
    <h5 class="card-title"><?= $barang['nama_barang'];  ?></h5>
    <p class="card-text"><?= $barang['deskripsi']; ?></p>
    <p class="card-text">Rp. <?= $barang['harga']; ?></p>
    <a href="<?= base_url('Toko/index') ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>
</section>