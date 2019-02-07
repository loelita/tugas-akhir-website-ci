<section id="main-content">
          <section class="wrapper">

              <div class="row">
 -                  <div class="col-lg-9 main-chart">
<div class="container" style="padding: 10px; height: 100px;">
<div class="row" >
  <div class="col-md-7" >

  <div class="card mt-3" style="height: 500px;">
  <h4><div class="card-header" style="padding: 20px; ">Form Update Data</div></h4>
    <div class="card-body">

       <form action="" method='post' style="margin-top: 10px; margin-left: 20px; margin-right: 20px;" >
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text"class="form-control" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang'] ?>" >
            <small class="form-text text-danger"><?= form_error('nama_barang') ?></small>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text"class="form-control" name="deskripsi" id="deskripsi"value="<?= $barang['deskripsi']?>" >
            <small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text"class="form-control" name="harga" id="harga" value="<?= $barang['harga']?>">
            <small class="form-text text-danger"><?= form_error('harga') ?></small>
          </div>

          <!-- <div class="form-group">
            <label for="id_genre">Genre</label>
            <select name="id_genre" id="id_genre" class="form-control">
            <?php
              foreach ($genre as $g ) { ?>
                <option <?php if($buku['id_genre'] == $g['id_genre']) { echo "selected"; } ?> value="<?= $g['id_genre'] ?>"><?= $g['genre'] ?></option>
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