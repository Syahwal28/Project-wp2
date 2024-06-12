<div class="container-fluid">
    <h4>Invoice Pemesanan Menu</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pengiriman</th>
            <th>No hp</th>
            <th>Tanggal Pemesanan</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv):?>
        <tr>
            <td><?php echo $inv->id?></td>
            <td><?php echo $inv->nama?></td>
            <td><?php echo $inv->alamat?></td>
            <td><?php echo $inv->no_telp?></td>
            <td><?php echo $inv->tgl_pesan?></td>
            <td><?php echo anchor('admin/Invoice/detail/'. $inv->id,'<div class="btn btn-sm btn-success">Detail</div>')?></td>
        </tr>
    
        <?php endforeach ;?>
    </table>
</div>