<div class="container-fluid" >
     <div class="row" >
        <div class="col-md-2"></div>
        <div class="col-md-8" >
            <div class="btn btn-sm btn-success">
                <?php $total=0;
                if($keranjang =$this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $total= $total+$item['subtotal'];
                    }
                
                        echo "<h4>Total Harga: Rp. ".number_format($total,0,',','.');
                        ?>
                    </div><br><br>
                    <h3>Masukan Alamat Pengiriman</h3>

                    <form method="post" action="<?php echo base_url()?>Dashboard/proses_pesanan">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Masukan Nama Lengkap Anda" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Alamat Anda</label>
                            <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap Anda" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="no_telp" placeholder="Masukan Nomor Telpon Anda" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-sm mt-3" style="background-color:green; color:white;">Pesan</button>
                    </form>

                    <?php
                }else{
                    echo "<h4> Keranjang Belanja Kosong";
                }
                ?>
        </div>

        <div class="col-md-2"></div>
     </div>
</div>
</div>