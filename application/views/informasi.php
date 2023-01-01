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
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Event">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark active" href="<?php echo base_url();?>Informasi">Informasi</a>
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

        <!-- Heroes Content Start -->

                
        <section class="d-flex heroes-content-inform mt-5">
            <div class="container informs-1">
                <div class="row row-cols-lg-2">
                    <div class="col left-side">
                        <div class="photo-1"></div>
                    </div>
                    <div class="col right-side">
                        <p><span class="fw-bold">Panggon Paseduluran </span>- Sebuah cafe yang berada di pinggir Daerah Istimewa Yogyakarta ini memiliki ciri khasnya sendiri diantara cafe - cafe yang berdiri di kota yogyakarta. Berawal dari sang pemilik yang mencari pemasukan baru, terbesutlah ide tuk mendirikan sebuah cafe di daerah Kalasan, Sleman. Menyungsung tema Tradisional Jawa, membuat cafe ini memiliki rasa tersendiri di hati para pelanggannya. Dengan masih mempertahankan menu tradisional di menu nya, cafe ini bisa dibilang salah satu cafe yang ingin mengenalkan minuman khas dari kota yogyakarta, seperti Wedhang Uwuh, Wedhang Bergas dan segala macam lainnya.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex heroes-content-inform mt-5 pt-5">
            <div class="container informs-2">
                <div class="row row-cols-lg-2">
                    <div class="col left-side">
                        <p><span class="fw-bold">Panggon Paseduluran </span>- Lokasi panggon paseduluran yang berada di daerah Kalasan menambah rasa tradisional  yang di usung oleh cafe tersebut menjadi sangat kental. Rimbun nya pepohonan di sekitar cafe dan berada di dekat pendesaan dengan sawah - sawah menghiasai jalanan menuju lokasi.</p>
                        <a href="#" class="btn btn-sm">Lokasi</a>
                    </div>
                    <div class="col right-side">
                        <div class="photo-1 ms-auto"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Heroes Content End -->