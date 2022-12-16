<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content=’width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0′ name=’viewport’ />

    <!-- CSS File -->
    <link rel="stylesheet" href="/assets/css/auth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $judul ?></title>
  </head>
    <body>
        
        <!-- Navbar Start -->

        <nav class="navbar navbar-light mt-3">
            <div class="container">
                <span class="navbar-brand mb-0 h1 fs-4">Panggon Paseduluran</span>
            </div>
        </nav>

        <!-- Navbar End -->

        <!-- Card Auth Start -->

        <section class="card-auth">
            <div class="container">
                <div class="alert-text text-center mb-5" style="height: 70px;">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="card mx-auto mt-5" style="width: 25rem;">
                    <div class="card-title ms-3 mt-3">
                        <div class="row">
                            <div class="col">
                                <h3 class="fw-bold">Login</h3>
                            </div>
                            <div class="col reg">
                                <a href="#">Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body mx-auto">
                        <form action="<?php echo base_url('Auth/Login')?>" method="post">
                            <div class="email">
                                <label for="email">Email</label><br>
                                <input type="text" name="email" id="email">
                            </div>
                            <div class="password mt-3">
                                <label for="password">Password</label><br>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="login-btn mt-5 text-center">
                                <button>Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card Auth End -->

        <!-- Js File -->
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    </body>
</html>