<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content=’width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0′ name=’viewport’ />

    <!-- CSS File -->
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JS File -->
    <script src="/assets/vendor/ckeditor/ckeditor.js"></script>

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
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/kategori"><i class="fa-solid fa-list" style="margin-right: 10px;"></i>Kategori</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/menu" class="nav-link"><i class="fa-solid fa-clipboard" style="margin-right: 10px;"></i>Manage Menu</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="nav-link active-side" href="<?php echo base_url();?>Admin/Dashboard/event"><i class="fa-regular fa-calendar-minus" style="margin-right: 10px;"></i>Manage Event</a>
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
              <h2 class="ms-5">Manage Event</h2>
            </div>
            <div class="filter d-flex justify-content-end mt-3">
              <button class="btn btn-sm me-4" type="button" data-bs-toggle="modal" data-bs-target="#AddEvent">
                <i class="fa-solid fa-plus"></i>
                Tambah Event
              </button>
            </div>
            <div class="main-body ms-5">
              <?php foreach($show as $s) :?>
                <div class="card mt-3" style="width: 35rem;">
                  <div class="card-body">
                    <div class="row row-cols-2">
                      <div class="col-7">
                        <h5 class="card-title"><?php echo $s['judul']?></h5>
                        <img src="<?php echo base_url().'/assets/img-event/'.$s['gambar']?>" alt="">
                        <h6 class="card-subtitle mb-2 mt-5"> 
                          <?php echo $s['tanggal']?>
                        </h6>
                        <h6><?php echo $s['isi']?></h6>
                      </div>
                      <div class="col-5">
                        <div class="control ms-auto">
                          <a type="button" data-bs-toggle="modal" data-bs-target="#editEvent<?php echo $s['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a onclick="return confirm('Hapus Data ?')" href="<?php echo base_url('Admin/Dashboard/deleteEvent/'.$s['id']);?>"><i class="fa-solid fa-trash trash"></i></a>
                        </div>
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

        <!-- Modal Add Event Start -->

        <div class="modal fade" id="AddEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tambah event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <?php echo form_open_multipart('Admin/Dashboard/addevent');?>
                <div class="modal-body">
                  <div class="name">
                    <label for="judul">Judul Event</label><br>
                    <input type="text" name="judul" id="judul">
                  </div>
                  <div class="img mt-3">
                    <label for="gambar">Gambar Event</label><br>
                    <input type="file" name="gambar" id="gambar">
                  </div>
                  <div class="tanggal mt-3">
                    <label for="tanggal">Tanggal Event</label><br>
                    <input type="date" name="tanggal" id="tanggal" placeholder="dd-mm-yyyy">
                  </div>
                  <div class="isi mt-3">
                    <label for="isi">Isi Event</label><br>
                    <textarea name="isi" id="isi" ></textarea>
                    <script>
                        CKEDITOR.replace( 'isi' );
                    </script>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-sm">Reset</button>
                  <button class="btn btn-sm">Tambah Event</button>
                </div>
              <?php echo form_close()?>
            </div>
          </div>
        </div>

        <!-- Modal Add Event End -->

         <!-- Modal Edit Event Start -->

         <?php foreach($show as $s) :?>
         <div class="modal fade" id="editEvent<?php echo $s['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <?php echo form_open_multipart('Admin/Dashboard/updateEvent/'.$s['id']);?>
                <div class="modal-body">
                <div class="id">
                    <input type="hidden" name="id" id="id" value="<?php echo $s['id']?>">
                  </div>
                  <div class="name">
                    <label for="judul">Judul Event</label><br>
                    <input type="text" name="judul" id="judul" value="<?php echo $s['judul']?>">
                  </div>
                  <div class="img mt-3">
                    <label for="gambar">Gambar Event</label><br>
                    <input type="file" name="gambar" id="gambar">
                  </div>
                  <div class="tanggal mt-3">
                    <label for="tanggal">Tanggal Event</label><br>
                    <input type="date" name="tanggal" id="tanggal" value="<?php echo $s['tanggal']?>">
                  </div>
                  <div class="isi mt-3">
                    <label for="isi">Isi Event</label><br>
                    <textarea name="isi" id="isi_event"></textarea>
                    <script>
                        CKEDITOR.replace( 'isi_event' );
                    </script>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button class="btn btn-primary">Edit Event</button>
                </div>
              <?php echo form_close()?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Edit Event End -->
      </div>