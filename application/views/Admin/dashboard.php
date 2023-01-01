<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content=’width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0′ name=’viewport’ />

    <!-- CSS File -->
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $judul ?></title>
  </head>
    <body>
      <div class="d-flex justify-content-start">
        <!-- SideBar Navigation Start -->
        <div class="sidebar">
          <div class="container position-fixed">
            <div class="side-title mt-4 ms-3">
              <h4>Panggon Paseduluran</h4>
            </div>
            <div class="side-body mt-5 ms-3 pt-5">
              <ul class="navbar-nav py-4" id="SideNav">
                <li class="nav-item">
                  <a type="button" class="nav-link active-side" href="<?php echo base_url();?>Admin/Dashboard"><i class="fa-solid fa-gauge" style="margin-right: 10px;"></i>dashboard</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard"><i class="fa-solid fa-list" style="margin-right: 10px;"></i>Kategori</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/menu" class="nav-link"><i class="fa-solid fa-clipboard" style="margin-right: 10px;"></i>Manage Menu</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/event"><i class="fa-regular fa-calendar-minus" style="margin-right: 10px;"></i>Manage Event</a>
                </li>
              </ul>
            </div>
            <div class="side-footer mt-5 pt-4">
              <a href="<?php echo base_url('Auth/Logout')?>">Log Out</a>
            </div>
          </div>
        </div>
        <!-- SideBar Navigation End -->
        <!-- Main Content Start -->

        <div class="main-content">
          <div class="container">
            <div class="main-title mt-4">
              <h2 class="ms-5">Dashboard</h2>
            </div>
            <div class="main-body">
              <div class="container">
                <div class="d-flex justify-content-evenly mt-5">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Menu Cafe</h5>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Event Cafe</h5>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <hr>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Content End -->
      </div>