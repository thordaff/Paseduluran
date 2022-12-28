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
            <div class="filter d-flex justify-content-end mt-3">
              <div class="dropdown">
                <button class="btn btn-sm dropdown-toggle" type="button" id="Kategori" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="Kategori">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
              <a href="<?php echo base_url();?>Admin/Dashboard/tambahevent" class="btn btn-sm me-4" type="button">
                Tambah Menu
              </a>
            </div>
            <div class="main-body ms-5">
              <?php foreach($show as $s) :?>
                <div class="card mt-3" style="width: 35rem;">
                  <div class="card-body">
                    <div class="row row-cols-2">
                      <div class="col-7">
                        <h5 class="card-title"><?php echo $s['judul']?></h5>
                        <img src="<?php echo base_url().'/assets/img-event/'.$s['gambar']?>" alt="">
                        <h6 class="card-subtitle mb-2"> 
                          <?php echo $s['tag']?>
                          <?php echo $s['tanggal']?>
                        </h6>
                        <h6><?php echo $s['isi']?></h6>
                      </div>
                      <div class="col-5">
                        <a href="<?php echo base_url('Admin/Dashboard/editEvent/'.$s['id'])?>" type="button">Edit Menu</a>
                        <a onclick="return confirm('Hapus Data ?')" href="<?php echo base_url('Admin/Dashboard/deleteEvent/'.$s['id']);?>">Hapus Menu</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="row">
              <div class="col">
                <?php echo $this->pagination->create_links();?>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Content End -->
      </div>