<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id?></div></h4>

    <table class=" table table-bordered table-hover table-striped">

    <tr>
        <th>Id Barang</th>
        <th>Nama Produk</th>
        <th>Jumlah Pesanan</th>
        <th>Harga Satuan</th>
        <th>Sub-Total</th>
    </tr>

    <?php
    $total = 0;
    if (is_array($pesanan) || is_object($pesanan))
    
        foreach ($pesanan as $psn):
        {
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal;
        }
    
    
    ?>

    <tr>
        <td><?php echo $psn->id_barang?></td>
        <td><?php echo $psn->nama_brg?></td>
        <td><?php echo $psn->jumlah?></td>
        <td><?php echo number_format($psn->harga,0,',','.')?></td>
        <td><?php echo number_format($subtotal,0,',','.')?></td>
    </tr>
    
<?php endforeach;?>
    </table>

</div>