<div class="container-fluid">
    <button class="btn bn btn-sm btn-warning mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa"></i>Tambah Menu</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Detail</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Simpan</th>
        </tr>

        <?php
        $no=1;
        foreach($menu as $mn): ?>
        
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $mn->nm_menu?></td>
            <td><?php echo $mn->detail?></td>
            <td><?php echo $mn->kategori?></td>
            <td><?php echo $mn->harga?></td>
            <td><?php echo $mn->stok?></td>

            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>

            <td><?php echo anchor('admin/Data_menu/edit/'.$mn->id_menu, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>')?> </td>

            <td><?php echo anchor('admin/Data_menu/hapus/'. $mn->id_menu,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_menu" role="dialog"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
         <h1 class="modal-title" id="exampleModalLabel">Tambah Menu</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url('admin/Data_menu/tambah_menu')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nm_menu" class="form-control">
                </div>

                <div class="form-group">
                    <label>Detail</label>
                    <input type="text" name="detail" class="form-control">
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori">
                        <option>Bakso</option>
                        <option>Mie</option>
                        <option>Ayam</option>
                        <option>Minuman</option>
                        <option>Pelengkap</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control">
                </div>

                <div class="form-group">
                    <label>Gambar Menu</label><br>
                    <input type="file" name="gambar" class="form-control">
                </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>