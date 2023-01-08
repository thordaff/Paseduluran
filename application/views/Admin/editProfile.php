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
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard"><i class="fa-solid fa-gauge" style="margin-right: 10px;"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/kategori"><i class="fa-solid fa-list" style="margin-right: 10px;"></i>Kategori</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/menu" class="nav-link"><i class="fa-solid fa-clipboard" style="margin-right: 10px;"></i>Manage Menu</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/event"><i class="fa-regular fa-calendar-minus" style="margin-right: 10px;"></i>Manage Event</a>
                </li>
              </ul>
            </div>
            <div class="side-footer mt-3 pt-4">
              <hr style="color: white;">
              <a href="<?php echo base_url('Auth/Logout')?>">Log Out</a>
              <a href="<?php echo base_url('Admin/Profile')?>"><i class="fa-solid fa-gear" style="margin-left: 120px;"></i></a>
            </div>
          </div>
        </div>
        <!-- SideBar Navigation End -->
        <!-- Main Content Start -->
        <div class="main-content">
            <div class="container">
                <div class="main-title mt-4">
                    <h2 class="ms-5">Edit Profile</h2>
                </div>
                <div class="main-body">
                    <div class="container">
                        <div class="username-section mt-5 ms-5">
                            <h4 class="fw-bold">Username Admin</h4>
                            <p class="mt-3"><?php echo $show['username']?></p>
                        </div>
                        <div class="email-section mt-5 ms-5">
                            <h4 class="fw-bold">Email Admin</h4>
                            <p class="mt-3"><?php echo $show['email']?></p>
                        </div>
                        <div class="password-section mt-5 ms-5">
                            <h4 class="fw-bold">Password Admin</h4>
                            <p class="mt-3 text-muted">Password Terlindungi</p>
                        </div>
                        <div class="controller-button ms-auto" style="width: 37%; margin-top: 125px;">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#UsernameEdit<?php echo $show['id']?>" class="btn btn-sm">Edit Username</a>
                            <a href="" class="btn btn-sm">Edit Email</a>
                            <a href="" class="btn btn-sm">Edit Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content End -->
      </div>


    <!-- Modal Username Start -->
    <div class="modal fade" id="UsernameEdit<?php echo $show['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Username</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?php echo base_url('Admin/Profile/editUsername'.$show['id']);?>" method="post">
            <div class="modal-body">
                <input type="text" name="username" id="username" value="<?php echo $show['username']?>">
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-sm">Reset</button>
                <button type="button" class="btn btn-sm">Edit Username</button>
            </div>
          </form>
          </div>
      </div>
    </div>
    <!-- Modal Username end -->