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
                                <a class="nav-link text-dark active" href="<?php echo base_url();?>Beranda">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo base_url();?>Event">Event</a>
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

        <!-- Heroes Content Start -->

        <section class="d-flex heroes-content">
            <div class="container">
                <div class="row row-cols-lg-2">
                    <div class="col-6 left-side">
                        <h2>Panggon Paseduluran</h2>
                        <p class="mt-5">Cafe yang berdiri di kalasan ini memberikan pengalaman baru bagi penikmat kopi di Daerah Istimewa Yogyakarta. Cafe ini mengangkat tema tradisional klasik jawa sehingga penikmat akan merasakan pengalaman yang berbeda ketika berada di cafe ini.</p>
                        <a class="btn btn-sm" href="#">Lokasi<i class="fa-solid fa-location-arrow" style="margin-left: 10px;"></i></a>
                    </div>
                    <div class="col-6 right-side">
                        <div class="group-box d-flex justify-content-end mb-2">
                            <div class="rect-2 me-4"></div>
                            <div class="rect-1"></div>
                        </div>
                        <div class="photo ms-auto"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex heroes-content-2">
            <div class="container">
                <div class="row row-cols-lg-2">
                    <div class="col-7 left-side">
                        <div class="photo"></div>
                    </div>
                    <div class="col-5 right-side">
                        <h2>Kepuasan kalian adalah rasa senang kami</h2>
                        <p class="mt-5">Kopi yang disediakan di Cafe Panggon Paseduluran memiliki kualitas biji kopi yang tinggi. Berasal dari biji kopi pilihan terbaik dari indonesia menciptakan rasa nikmat saat kopi mulai di nikmati. Yuk kepoin Menu dari kami :D</p>
                        <a class="btn btn-sm" href="">Menu<i class="fa-regular fa-file-lines" style="margin-left: 10px;"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="best-menu">
            <div class="container">
                <div class="menu-header px-5 mx-auto mb-5">
                    <p>Menu Andalan</p>
                    <h2>Panggon Paseduluran</h2>
                </div>
                <div class="menu-body d-flex justify-content-between">
                    <div class="card mx-auto">
                        <div class="photo-1"></div>
                            <div class="d-flex justify-content-end">
                                <p class="mt-2 fw-bold menu-title">Vietnam Drip</p>
                            <div class="logo">
                                <h1 class="mx-3 my-3">P<span>P</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-auto">
                        <div class="photo-2"></div>
                            <div class="d-flex justify-content-end">
                                <p class="mt-2 fw-bold menu-title">Matcha Latte</p>
                            <div class="logo">
                                <h1 class="mx-3 my-3">P<span>P</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-auto">
                        <div class="photo-3"></div>
                            <div class="d-flex justify-content-end">
                                <p class="mt-2 fw-bold menu-title">Wedhang Uwuh</p>
                            <div class="logo">
                                <h1 class="mx-3 my-3">P<span>P</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Heroes Content End -->