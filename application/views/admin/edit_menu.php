<div class="container-fluid">
    <h1><i class="fas fa-edit"></i>Edit Data Menu</h1>

    <?php foreach ($menu as $mn): ?>
        <form method="post" action="<?php echo base_url().'admin/Data_menu/update/'?>">
            <div class="for-group">
                <label>Nama Menu</label>
                <input type="text" name="nm_menu" class="form-control" value="<?php echo $mn->nm_menu ?>">
            </div>

            <div class="for-group">
                <label>Detail</label>
                <input type="hidden" name="id_menu" class="form-control" value="<?php echo $mn->id_menu ?>">
                <input type="text" name="detail" class="form-control" value="<?php echo $mn->detail ?>">
            </div>

            <div class="for-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $mn->kategori ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $mn->harga ?>">
            </div>

            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $mn->stok ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
        
        </form>
    
    <?php endforeach; ?>
</div>