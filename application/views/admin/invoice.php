<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($invoice as $invfarrel):?>
            <tr>
                <td><?php echo $invfarrel->id?></td>
                <td><?php echo $invfarrel->nama?></td>
                <td><?php echo $invfarrel->alamat?></td>
                <td><?php echo $invfarrel->tanggal_pesan?></td>
                <td><?php echo $invfarrel->batas_bayar?></td>
                <td><?php echo anchor('admin_farrel/invoice_farrel/detail/'.$invfarrel->id, '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
            </tr>
            <?php endforeach;?>
    </table>
</div>