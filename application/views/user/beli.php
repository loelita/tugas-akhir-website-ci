<div class="container">

<div class="row-mt-3">

<div class="col-md-6">

<form  method="post" action="<?php echo base_url(). 'User/beli'; ?>" style="width:700px; margin-left:300px; background:white;height:700px; padding: 20px">
      <h2> O R D E R </h2>
      <br>
      <div class="form-group">
            <label for="nama_barang">Nama Pemesan</label>
            <input type="text"class="form-control" name="nama_pemesan" id="nama_pemesan" placeholder=" Masukan Nama Pemesan">
          </div>
  <br>
  <div class="form-group">
    <label for="email">Alamat Email</label>
    <input type="text" class="form-control" id="email" name="email"  placeholder=" Masukan Email">
  </div>
  <br>
  <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text"class="form-control" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang'] ?>" >
          </div>
  <br>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" class="form-control" id="jumlah" name="jumlah"  placeholder=" Masukan jumlah barang">
  </div>
  <br>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat"  placeholder=" Masukan alamat">
  </div>
  <br>
  <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>

</div>

</div>