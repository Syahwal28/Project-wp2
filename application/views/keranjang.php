<div class="container-fluid">
    <h1>Keranjang</h1>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>

        <?php $no=1; foreach($this->cart->contents() as $items): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name']?></td>
                <td><?php echo $items['qty']?></td>
                <td>Rp. <?php echo number_format($items['price'], 0,',','.')?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0,',','.')?></td>
            </tr>

            
        <?php endforeach;?>
            <tr>
                <td colspan='4'></td>
                <td>Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></td>
            </tr>   
    </table>

    <div>
        <a href="<?php echo base_url('Dashboard/hapus_keranjang')?>"> <div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('welcome')?>"> <div class="btn btn-sm" style="background-color:orange; color:white;">Lanjut Pilih Menu</div></a>
        <a href="<?php echo base_url('Dashboard/pembayaran')?>"><div align="right"><div class="btn btn-sm" style="background-color:green; color:white;">Bayar Sekarang</div></a></div>
    </div>
</div>