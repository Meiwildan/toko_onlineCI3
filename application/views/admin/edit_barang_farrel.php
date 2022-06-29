<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach($barang as $brgfarrels) :?>
       <form method="post" action="<?php echo base_url(). 'admin_farrel/data_barang_farrel/update' ?>">
       <div class="for-group">
            <label> Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" 
            value="<?php echo $brgfarrels->nama_brg?>">
       </div>

       <div class="for-group">
            <label> keterangan</label>
            <input type="hidden" name="id_brg" class="form-control" 
            value="<?php echo $brgfarrels->id_brg?>">
            <input type="text" name="keterangan" class="form-control" 
            value="<?php echo $brgfarrels->keterangan?>">
       </div>
       <div class="for-group">
            <label> kategori</label>
            <input type="text" name="kategori" class="form-control" 
            value="<?php echo $brgfarrels->kategori?>">
       </div>
       <div class="for-group">
            <label> harga</label>
            <input type="text" name="harga" class="form-control" 
            value="<?php echo $brgfarrels->harga?>">
       </div>
       <div class="for-group">
            <label> Stock</label>
            <input type="text" name="stock" class="form-control" 
            value="<?php echo $brgfarrels->stock?>">
       </div>
       <br>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
       </form>


        <?php endforeach; ?>
</div>
