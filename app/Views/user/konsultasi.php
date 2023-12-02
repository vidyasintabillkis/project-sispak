<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url ('assets/css/styleadmin.css') ?>">
	<title>AdminSite</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> XX</a>
		<ul class="side-menu">
            <!-- Beranda mau buat tampilin artikel -->
			<li><a href="<?= base_url ('/user') ?>" ><i class='bx bxs-dashboard icon' ></i> Beranda</a></li>
			<!-- <li class="divider" data-text="main">Kelola</li> -->
			<li>
				<a href="<?= base_url ('/konsultasi') ?>" class="active"><i class='bx bxs-inbox icon' ></i> Konsultasi</a>
				<a href="<?= base_url ('/riwayathasil') ?>"><i class='bx bxs-notepad icon' ></i> Hasil Konsutasi </a>
				<a href="#"><i class='bx bxs-notepad icon' ></i> Keluar </a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
			</form>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <div class="container bootstrap snippets bootdey">
    <hr>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well profile">
                <img class="user img-circle pull-left clearfix" height="54" src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                <h3 class="name pull-left clearfix">Michelle</h3>
                <div class="clearfix"></div>
                <ul class="nav nav-tabs">
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab2">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="basic">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="inputfullname" class="col-lg-2 control-label">Nama</label>
                                                <div class="col-lg-10">
                                                    <input type="email" class="form-control" id="inputfullname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="gejalautama" class="col-lg-2 control-label">Gejala Utama</label>
                                                <div class="col-lg-10">
                                                    <label for="gejalautama" id="gejalautama"></label>        
                                                    <select class="form-control" name="gejalautama" value="">
                                                        <option selected disabled>Pilih Gejala Utama</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="gejalautama" class="col-lg-2 control-label">Gejala Utama</label>
                                                <div class="col-lg-10">
                                                    <label for="gejalautama" id="gejalautama"></label>        
                                                    <select class="form-control" name="gejalautama" value="">
                                                        <option selected disabled>Pilih Gejala Utama</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="gejalautama" class="col-lg-2 control-label">Gejala Utama</label>
                                                <div class="col-lg-10">
                                                    <label for="gejalautama" id="gejalautama"></label>        
                                                    <select class="form-control" name="gejalautama" value="">
                                                        <option selected disabled>Pilih Gejala Utama</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <a class="btn btn-primary" href="<?=base_url('/hasil')?>" role="button">Simpan</a>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>
</html>