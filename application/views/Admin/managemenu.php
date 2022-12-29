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
                    <a type="button" class="nav-link active" href="<?php echo base_url();?>Admin/Dashboard/menu" class="nav-link"><i class="fa-solid fa-clipboard" style="margin-right: 10px;"></i>Manage Menu</a>
                  </li>
                  <li class="nav-item">
                    <a type="button" class="nav-link" href="<?php echo base_url();?>Admin/Dashboard/event"><i class="fa-regular fa-calendar-minus" style="margin-right: 10px;"></i>Manage Event</a>
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
              <h2 class="ms-5">Manage Menu</h2>
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
              <button class="btn btn-sm me-4" type="button" data-bs-toggle="modal" data-bs-target="#AddMenu">
                Tambah Menu
              </button>
            </div>
            <div class="main-body ms-5">
              <div class="d-flex flex-wrap">
                <?php foreach($show as $s) :?>
                    <div class="card mt-3 me-5" style="width: 25rem;">
                      <div class="card-body">
                        <div class="row row-cols-2">
                          <div class="col-7">
                            <h5 class="card-title"><?php echo $s['nama']?></h5>
                            <h6 class="card-subtitle mb-2">Rp. 
                              <?php echo $s['harga']?>
                            </h6>
                            <h6><?php echo $s['status']?></h6>
                          </div>
                          <div class="col-5">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#EditMenu<?php echo $s['id'];?>">Edit Menu</button>
                            <a onclick="return confirm('Hapus Data ?')" href="<?php echo base_url('Admin/Dashboard/deleteMenu/'.$s['id']);?>">Hapus Menu</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
              <div class="col">
                <?php echo $this->pagination->create_links();?>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Content End -->

        <!-- Modal Edit Menu Start -->
        
        <?php foreach($show as $s) :?>
        <div class="modal fade" id="EditMenu<?php echo $s['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?php echo base_url('Admin/Dashboard/update/'.$s['id'])?>" method="post">
                <div class="modal-body">
                  <div class="id">
                    <input type="hidden" name="id" id="id" value="<?php echo $s['id'];?>">
                  </div>
                  <div class="name">
                    <label for="nama">Nama Menu</label><br>
                    <input type="text" name="nama" id="nama" value="<?php echo $s['nama']?>">
                  </div>
                  <div class="choose">
                    <label for="pilihan">Hot // Ice ?</label>
                    <input type="checkbox" name="pilihan" id="pilihan" value="Hot // Ice">
                  </div>
                  <div class="category mt-3">
                    <label for="kategori">Kategori</label><br>
                    <select name="kategori" id="kategori">
                      <option selected> <?php echo $s['kategori']?></option>
                      <option value="Manual Brew">Manual Brew</option>
						          <option value="Coffee">Coffee</option>
						          <option value="Latte">Latte</option>
						          <option value="Tea Based">Tea Based</option>
						          <option value="Traditional Drink">Traditional Drink</option>
						          <option value="Food">Food</option>
                    </select>
                  </div>
                  <div class="price mt-3">
                    <label for="harga">Harga Menu</label><br>
                    <input type="number" name="harga" id="harga" value="<?php echo $s['harga'];?>">
                  </div>
                  <div class="status mt-3">
                    <label for="status">Status Menu</label><br>
                    <select name="status" id="status" value="Tersedia">
                      <option selected>-- Pilih Status Menu --</option>
                      <option value="Tersedia">Tersedia</option>
                      <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button class="btn btn-primary">Tambah Menu</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Edit Menu End -->

        <!-- Modal Add Menu Start -->

        <div class="modal fade" id="AddMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tambah Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?php echo base_url('Admin/Dashboard/addmenu')?>" method="post">
                <div class="modal-body">
                  <div class="name">
                    <label for="nama">Nama Menu</label><br>
                    <input type="text" name="nama" id="nama">
                  </div>
                  <div class="category mt-3">
                    <label for="kategori">Kategori</label><br>
                    <select name="kategori" id="kategori">
                      <option selected> -- Pilih Kategori Menu --</option>
                      <option value="Manual Brew">Manual Brew</option>
						          <option value="Coffee">Coffee</option>
						          <option value="Latte">Latte</option>
						          <option value="Tea Based">Tea Based</option>
						          <option value="Traditional Drink">Traditional Drink</option>
						          <option value="Food">Food</option>
                    </select>
                  </div>
                  <div class="price mt-3">
                    <label for="harga">Harga Menu</label><br>
                    <input type="number" name="harga" id="harga">
                  </div>
                  <div class="status mt-3">
                    <label for="status">Status Menu</label><br>
                    <select name="status" id="status">
                      <option selected>-- Pilih Status Menu --</option>
                      <option value="Tersedia">Tersedia</option>
                      <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button class="btn btn-primary">Tambah Menu</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Modal Add Menu End -->
      </div>