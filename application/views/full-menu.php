<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content=’width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0′ name=’viewport’ />

    <!-- CSS File -->
    <link rel="stylesheet" href="/assets/css/fullmenu.css">
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
                        </ul>
                    </div>
                </div>
            </div>
         </div>

        <!-- Off Canvas End -->

        <!-- Full Menu Start -->

        <seciton class="full-menu">
            <div class="d-flex justify-content-start">
                <div class="container">
                    <div class="full-title mt-2 mb-5 pb-2">
                        <h2 class="fw-bold text-center">Cafe Menu</h2>
                        <div class="desc">
                            <div class="open mx-auto text-center">
                                <p>Open Everyday</p>
                                <p class="clock">16.00 - 02.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="menu d-flex justify-content-between">
                        <div class="left-side">
                            <div class="menu-title d-flex justify-content-around">
                                <div class="rect"></div>
                                <h4 class="mx-3">Coffee Based</h4>
                                <div class="rect"></div>
                            </div>
                            <div class="menu-body mt-3 d-flex flex-column">
                                <div class="coffee-based">
                                    <?php foreach($showC as $s):?>
                                    <div class="menu d-flex justify-content-between">
                                        <h6 class="fw-bold">
                                            <?php echo $s['nama']?>
                                            <p class="fw-light desc"><?php echo $s['pilihan']?></p>
                                        </h6>
                                        <div class="flex-column" style="height: 50px; width:85px;">
                                            <p>Rp. <?php echo number_format($s['harga'])?></p>
                                            <p style="font-size:12px; position:relative; top:-20px;"><?php echo $s['status']?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div class="menu-title d-flex justify-content-around">
                                <div class="rect"></div>
                                <h4 class="mx-3">Latte</h4>
                                <div class="rect"></div>
                            </div>
                            <div class="menu-body mt-3 d-flex flex-column">
                                <div class="latte">
                                    <?php foreach($showL as $s):?>
                                    <div class="menu d-flex justify-content-between">
                                        <h6 class="fw-bold">
                                            <?php echo $s['nama']?>
                                            <p class="fw-light desc"><?php echo $s['pilihan']?></p>
                                        </h6>
                                        <div class="flex-column" style="height: 50px; width:85px;">
                                            <p>Rp. <?php echo number_format($s['harga'])?></p>
                                            <p style="font-size:12px; position:relative; top:-20px;"><?php echo $s['status']?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div class="menu-title d-flex justify-content-around">
                                <div class="rect"></div>
                                <h4 class="mx-3">Tea Based</h4>
                                <div class="rect"></div>
                            </div>
                            <div class="menu-body mt-3 d-flex flex-column">
                                <div class="tea">
                                    <?php foreach($showT as $s):?>
                                    <div class="menu d-flex justify-content-between">
                                        <h6 class="fw-bold">
                                            <?php echo $s['nama']?>
                                            <p class="fw-light desc"><?php echo $s['pilihan']?></p>
                                        </h6>
                                        <div class="flex-column" style="height: 50px; width:85px;">
                                            <p>Rp. <?php echo number_format($s['harga'])?></p>
                                            <p style="font-size:12px; position:relative; top:-20px;"><?php echo $s['status']?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="manual-brew">
                                <div class="menu-title d-flex justify-content-around">
                                    <div class="rect"></div>
                                        <h4 class="mx-3">Manual Brew</h4>
                                    <div class="rect"></div>
                                </div>
                                <div class="menu-body mt-3 d-flex flex-column">
                                    <?php foreach ($showM as $s):?>
                                    <div class="menu d-flex justify-content-between">
                                        <h6 class="fw-bold">
                                            <?php echo $s['nama']?>
                                            <p class="fw-light desc"><?php echo $s['pilihan']?></p>
                                        </h6>
                                        <div class="flex-column" style="height: 50px; width:85px;">
                                            <p>Rp. <?php echo number_format($s['harga'])?></p>
                                            <p style="font-size:12px; position:relative; top:-20px;"><?php echo $s['status']?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div class="traditional-drink">
                                <div class="menu-title d-flex justify-content-around">
                                    <div class="rect"></div>
                                        <h5 class="mx-3">Traditional Drink</h4>
                                    <div class="rect"></div>
                                </div>
                                <div class="menu-body mt-3 d-flex flex-column">
                                    <?php foreach($showTr as $s):?>
                                    <div class="menu d-flex justify-content-between">
                                        <h6 class="fw-bold">
                                            <?php echo $s['nama']?>
                                            <p class="fw-light desc"><?php echo $s['pilihan']?></p>
                                        </h6>
                                        <div class="flex-column" style="height: 50px; width:85px;">
                                            <p>Rp. <?php echo number_format($s['harga'])?></p>
                                            <p style="font-size:12px; position:relative; top:-20px;"><?php echo $s['status']?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div class="food">
                                <div class="menu-title d-flex justify-content-around">
                                    <div class="rect"></div>
                                        <h4 class="mx-3">Food</h4>
                                    <div class="rect"></div>
                                </div>
                                <div class="menu-body mt-3 d-flex flex-column">
                                    <?php foreach($showF as $s):?>
                                    <div class="menu d-flex justify-content-between">
                                        <h6 class="fw-bold">
                                            <?php echo $s['nama']?>
                                            <p class="fw-light desc"><?php echo $s['pilihan']?></p>
                                        </h6>
                                        <div class="flex-column" style="height: 50px; width:85px;">
                                            <p>Rp. <?php echo number_format($s['harga'])?></p>
                                            <p style="font-size:12px; position:relative; top:-20px;"><?php echo $s['status']?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </seciton>

        <!-- Full Menu End -->
        
        <!-- Js File -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    </body>
</html>