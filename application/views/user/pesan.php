
<div class="container">

<!-- membuat list judul buku -->
    <div class="row mt-3">
        <div class="col-md-9"> 
          <h1>Data Barang</h1>

          <ul class="list-group">
            <!-- untuk meload judul dr model harus menggunakan foreach -->
            <?php
            foreach ($barang as $row ) { ?>
            <li class="list-group-item"> <?= $row['nama_barang'] ?> 
            <a href="<?= base_url('User/detail/').$row['id_barang'] ?>" class="badge badge-success float-right ml-2">Detail</a>
            <a href="<?= base_url('User/beli/').$row['id_barang'] ?>" class="badge badge-success float-right ml-2">Beli</a>
            </li>
            
            <?php }
            ?>  
          </ul>

        </div>
    </div>

</div>


