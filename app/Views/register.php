<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/style.css")?>">
    <title>Boostrap Register | Ludiflex</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #CC0036;">
           <div class="featured-image mb-3">
            <img src="<?=base_url("assets/img/login1.png")?>" class="img-fluid" style="width: 400px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Washer Expert</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Atasi Kerusakan Mesin Cucimu bersama Washer Expert.</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Daftar</h2>
                     <p>Jangan lupa DAFTAR dulu yaa</p>
                </div>
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
                            <option selected>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password">
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="password" name="pass_confirm" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Confirm Password">
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg w-100 fs-6 custom-btn">Daftar</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Daftar dengan Google</small></button>
                    </div>
                </form>
          </div>
       </div> 

      </div>
    </div>

</body>
</html>