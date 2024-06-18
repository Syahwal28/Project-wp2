<div class="cotainer-fluid">
    <h4>Detail Pesanan <div class="btn btn-ssm btn-success">No. Invoice: <?php echo $invoice->id?></div></h4>

    <table class="table tabel-bordered table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Nama Menu</th>
            <th>Jumlah Pesan</th>
            <th>Harga Satuan</th>
            <th>Total</th>
        </tr>

        <?php $total=0;
        foreach ($pesanan as $psn):
            $subtotal= $psn->jumlah*$psn->harga;
            $total += $subtotal
        ?>

        <tr>
            <td><?php echo $psn->id_menu?></td>
            <td><?php echo $psn->nm_menu?></td>
            <td><?php echo $psn->jumlah?></td>
            <td>Rp. <?php echo number_format($psn->harga,0,',','.')?></td>
            <td>Rp. <?php echo number_format($subtotal,0,',','.')?></td>
        </tr>

        <?php endforeach;?>

        <tr>
            <td colspan="4" align="right">Total yang harus di bayar</td>
            <td align="rigth">Rp. <?php echo number_format($total,0,',','.') ?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index')?>"> <div class="btn btn-sm btn-warning">Kembali</div></a>

</div>
