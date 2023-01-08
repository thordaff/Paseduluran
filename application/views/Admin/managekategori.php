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
                  <a type="button" class="nav-link active-side" href="<?php echo base_url();?>Admin/Dashboard/kategori"><i class="fa-solid fa-list" style="margin-right: 10px;"></i>Kategori</a>
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
              <a href="<?php echo base_url('Admin/Profile')?>"><i class="fa-solid fa-gear" style="margin-left: 120px;"></i></a>
            </div>
          </div>
        </div>
        <!-- SideBar Navigation End -->

        <!-- Main Content Start -->

        <div class="main-content">
          <div class="container">
            <div class="main-title mt-4">
              <h2 class="ms-5">Manage Kategori</h2>
            </div>
            <div class="filter d-flex justify-content-end mt-3">
              <button class="btn btn-sm me-4" type="button" data-bs-toggle="modal" data-bs-target="#Addkategori">
                <i class="fa-solid fa-plus"></i>
                Tambah Kategori
              </button>
            </div>
            <div class="main-body">
            <div class="d-flex flex-wrap mt-3">
                <?php foreach($show as $s) :?>
                    <div class="card mt-3 me-5" style="width: 25rem;">
                      <div class="card-body">
                        <div class="row row-cols-2">
                          <div class="col-7">
                            <h5><?php echo $s['nama']?></h5>
                          </div>
                          <div class="col-5">
                            <div class="control ms-auto">
                              <a type="button" data-bs-toggle="modal" data-bs-target="#EditKat<?php echo $s['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a onclick="return confirm('Hapus Data ?')" href="<?php echo base_url('Admin/Dashboard/deleteKat/'.$s['id']);?>"><i class="fa-solid fa-trash trash"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
          </div>
        </div>

        <!-- Main Content End -->
      </div>

        <!-- Modal Add kategori Start -->

        <div class="modal fade" id="Addkategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?php echo base_url('Admin/Dashboard/addKat')?>" method="post">
                <div class="modal-body">
                  <div class="name">
                    <label for="nama">Nama Kategori</label><br>
                    <input type="text" name="nama" id="nama">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-sm">Reset</button>
                  <button class="btn btn-sm">Tambah Kategori</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Modal Add kategori End -->

        <!-- Modal Edit Menu Start -->
        
        <?php foreach($show as $s) :?>
        <div class="modal fade" id="EditKat<?php echo $s['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?php echo base_url('Admin/Dashboard/updateKat/'.$s['id'])?>" method="post">
                <div class="modal-body">
                  <div class="id">
                    <input type="hidden" name="id" id="id" value="<?php echo $s['id'];?>">
                  </div>
                  <div class="name">
                    <label for="nama">Nama Menu</label><br>
                    <input type="text" name="nama" id="nama" value="<?php echo $s['nama']?>">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button class="btn btn-primary">Edit Menu</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Edit Menu End -->