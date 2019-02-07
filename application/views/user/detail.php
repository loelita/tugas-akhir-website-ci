
<div class="container">
<div class="row mt-3" style="padding: 50px;" >
<div class="col-md-6" > 
<div class="card">
  <h3 class="card-header" style="padding: 20px;">Detail Data Barang</h3>
  <div class="card-body " style="margin-left: 20px;  >
    <h5 class="card-title"><?= $barang['nama_barang'];  ?></h5>
    <p class="card-text"><?= $barang['deskripsi']; ?></p>
    <p class="card-text">Rp. <?= $barang['harga']; ?></p>
    <a href="<?= base_url('User/pesan') ?>" class="btn btn-primary">Kembali</a>
  </div>
</div>
</div>
</div>
</div>

