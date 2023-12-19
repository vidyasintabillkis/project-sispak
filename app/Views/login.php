<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/style.css")?>">
    <title>Boostrap Login</title>
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
                     <h2>Masuk</h2>
                     <p>Jangan lupa masuk dulu yaa</p>
                </div>
                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <input class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="Email" type="email" name="login">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password" name="password">
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-between">
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Ingat saya</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Lupa Password?</a></small>
                        </div> -->
                    </div>
                    <div class="input-group mb-4">
                        <button type="submit" class="btn btn-lg w-100 fs-6 custom-btn">Masuk</button>
                    </div>
                    <div class="row">
                        <small>Belum Punya Akun? <a href="<?=base_url("/sign_up")?>">Sign Up</a></small>
                    </div>
                </form>
          </div>
       </div> 

      </div>
    </div>

</body>
</html>