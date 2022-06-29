<div class="container-fluid">

<div class="card">
  <div class="card-header">Detail Produk</div>
  <div class="card-body">
   
    <?php foreach($barang as $brgfarrel):?>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url().'/uploads/'.$brgfarrel->gambar?>" class="card-img-top">
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>Nama Produk</td>
                    <td><strong><?php echo $brgfarrel->nama_brg?></strong></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><strong><?php echo $brgfarrel->keterangan?></strong></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><strong><?php echo $brgfarrel->kategori?></strong></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><strong><?php echo $brgfarrel->stock?></strong></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brgfarrel->harga,0,',','.')?></div></strong></td>
                </tr>
            </table>
            <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brgfarrel->id_brg, '<div class=" btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
            <?php echo anchor('dashboard/index/' , '<div class=" btn btn-sm btn-danger">Kembali</div>')?>
        </div>

    </div>
    <?php endforeach;?>
  </div>
</div>
</div>