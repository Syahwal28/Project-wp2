<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Menu
        </div>
        <div class="card-body">

            <?php foreach ($menu as $mn): ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url(). '/gambar/'.$mn->gambar?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Menu</td>
                                <td><strong><?php echo $mn->nm_menu?></strong></td>
                            </tr>
                            <tr>
                                <td>Detail</td>
                                <td><strong><?php echo $mn->detail?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $mn->kategori?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $mn->stok?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong><div class="btn btn-sm"  style="color:white;background-color:black;" >Rp. <?php echo number_format($mn->harga,0,',','.')?></div></strong></td>
                            </tr>
                        </table>
                        <?php echo anchor('Dashboard/masukan_keranjang/'. $mn->id_menu, '<div class="btn btn-sm" style="color:white;background-color:green;">Masukan Keranjang</div>') ?>
                        <?php echo anchor('welcome', '<div class="btn btn-sm" style="color:white;background-color:red";>Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>