<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleDark" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleDark" data-slide-to="1" ></li>
    <li data-target="#carouselExampleDark" data-slide-to="2" ></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/SI-FOOD.png')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider2sifood.png')?>" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider3sifood.png')?>" class="d-block w-100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators"role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"  href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
    <div class="row text-center mt-5 mt-4">

    <?php foreach ($pelengkap as $mn): ?>
        <div class="card ml-4 mb-3" style="width: 17rem;">
            <img src="<?php echo base_url(). '/gambar/'.$mn->gambar?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mn->nm_menu?></h5>
                    <span class="badge badge-pill badge-primary mb-3">Rp. <?php echo number_format ($mn->harga, 0,',','.') ?>
                    </span><br>
                    <?php echo anchor('Dashboard/masukan_keranjang/'. $mn->id_menu, '<div class="btn btn-sm btn-danger">Masukan Keranjang</div>') ?>
                    <?php echo anchor('Dashboard/detail_menu/'. $mn->id_menu, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                 </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>