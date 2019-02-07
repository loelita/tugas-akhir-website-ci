<section id="main-content">
          <section class="wrapper">

              <div class="row">
 -                  <div class="col-lg-9 main-chart">
<div class="container">
<div class="row">
  <div class="col-md-6">

  <div class="card mt-3" style="height: 4 00px;">
  <h4><div class="card-header" style="padding: 20px;">Form Tambah Data</div></h4>
    <div class="card-body" style="margin-left: 20px; margin-right: 20px">

       <form action="" method='post'>
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text"class="form-control" name="nama_barang" id="nama_barang" value="<?= $this->form_validation->set_value('nama_barang')?>" >
            <small class="form-text text-danger"><?= form_error('nama_barang') ?></small>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text"class="form-control" name="deskripsi" id="deskripsi"value="<?= $this->form_validation->set_value('deskripsi')?>" >
            <small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text"class="form-control" name="harga" id="harga" value="<?= $this->form_validation->set_value('harga')?>">
            <small class="form-text text-danger"><?= form_error('harga') ?></small>
          </div>
          <!-- <div class="form-group">
            <label for="id_genre">Genre</label>
            <select name="id_genre" id="id_genre" class="form-control">
            <?php
              foreach ($genre as $g ) { ?>
                <option value="<?= $g['id_genre'] ?>"><?= $g['genre'] ?></option>
            <?php  }
            ?>
            </select>
          </div> -->
          <button type="submit" class="btn btn-primary float-right"> Simpan </button>
       </form>
       
    </div>
  </div>

  </div>
</div>
</div>


</div>
</div>
</section>
</section>