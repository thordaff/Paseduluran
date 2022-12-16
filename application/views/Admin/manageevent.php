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
          <div class="container">
            <div class="side-title mt-4 ms-3">
                <h4>Panggon Paseduluran</h4>
              </div>
              <div class="side-body mt-5 ms-3 pt-5">
                <ul class="navbar-nav py-4" id="SideNav">
                  <li class="nav-item">
                    <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard"><i class="fa-solid fa-gauge" style="margin-right: 10px;"></i>dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/menu" class="nav-link"><i class="fa-solid fa-clipboard" style="margin-right: 10px;"></i>Manage Menu</a>
                  </li>
                  <li class="nav-item">
                    <a type="button" class="nav-link active" href="<?php echo base_url();?>Admin/Dashboard/event"><i class="fa-regular fa-calendar-minus" style="margin-right: 10px;"></i>Manage Event</a>
                  </li>
                </ul>
              </div>
              <div class="side-footer ms-3">
                <a href="<?php echo base_url('Auth/Logout')?>">Log Out</a>
              </div>
          </div>
        </div>
        <!-- SideBar Navigation End -->
        <!-- Main Content Start -->

        <div class="main-content">
          <div class="container">
            <div class="main-title mt-4">
              <h2 class="ms-5">Manage Event</h2>
            </div>
            <div class="main-body">

            </div>
          </div>
        </div>

        <!-- Main Content End -->
      </div>