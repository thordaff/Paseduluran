<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content=’width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0′ name=’viewport’ />

    <!-- CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Panggon Paseduluran</title>
  </head>
    <body>

    <!-- Off Canvas Start -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="Navigation" aria-labelledby="offcanvasExampleLabel">
            <div class="container">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="NavigationLabel">Panggon Paseduluran</h5>
                    <i class="fa-solid fa-xmark text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></i>
                </div>
                <div class="offcanvas-body">
                    <div class="nav">
                        <ul class="navbar-nav" id="Nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Beranda">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark active" href="<?php echo base_url();?>Event">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Informasi">Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Auth/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>

        <!-- Off Canvas End -->

        <!-- Heroes Header Start -->

        <section class="d-flex heroes-header">
            <div class="container">
                <div class="row row-cols-lg-3">
                    <div class="col-3 left-side">
                        <i class="fa-solid fa-bars-staggered fa-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#Navigation"></i>
                        <div class="rect-1"></div>
                    </div>
                    <div class="col-6 text-center center-side">
                        <h1>Panggon Paseduluran</h1>
                        <p>Hidup itu cuma mampir minum sisanya bersenda gurau</p>
                    </div>
                    <div class="col-3 right-side ms-auto">
                        <div class="rect-1 ms-auto">
                            <div class="content container">
                                <img src="assets/image/coffee-cup.png" alt="" class="pt-4"> 
                                <h2>Panggon Paseduluran</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Heroes Header End -->

        <!-- Section Event Start -->

        <section class="mt-5 py-5">
            <div class="d-flex event-content">
                <div class="container">
                    <?php foreach($show as $s):?>
                    <div class="card mt-3 pt-2">
                        <div class="row row-cols-2">
                            <div class="col-3">
                                <div class="card-img">
                                    <img src="<?php echo base_url() . '/assets/img-event/' .  $s['gambar']?>" width="230px">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5><?php echo $s['judul']?></h5>
                                    <p><?php echo $s['tanggal']?></p>
                                   <p><?php echo substr($s['isi'],0, 150);?></p>
                                   <a type="button" data-bs-toggle="modal" data-bs-target="#moreIsi<?php echo $s['id'];?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>

        

        <!-- Section Event End -->

        <!-- Modal Read More Start -->

        <!-- Modal Edit Event Start -->

        <?php foreach($show as $s) :?>
         <div class="modal fade" id="moreIsi<?php echo $s['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><?php echo $s['judul']?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                    <img src="<?php echo base_url() . '/assets/img-event/' .  $s['gambar']?>" width="150">
                    <p><?php echo $s['isi']?></p>
                    <p><?php echo $s['tanggal']?></p>
                </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Read More End -->