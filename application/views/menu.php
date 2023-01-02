<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content=’width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0′ name=’viewport’ />
    <meta http-equiv="refresh" content="3; URL=<?php echo base_url('Menu/fullmenu')?>" />

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
                                <a class="nav-link text-dark active" href="<?php echo base_url();?>Menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Event">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Informasi">Informasi</a>
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
                    <div class="col-6 center-side">
                        <h5 class="ms-5 ps-5">Cafe Menu</h5>
                        <div class="title text-center">
                            <h1>Panggon Paseduluran</h1>
                            <div id="msg"></div>
                        </div>
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