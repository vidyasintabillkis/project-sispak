<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="<?=base_url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css')?>" rel="stylesheet">
    <script src="<?=base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js')?>" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />


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
					<li><a href="<?= base_url('logout')?>"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
            <div class="content">
                <div class="container">
                <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">Hasil Konsultasi <span class="text-muted fw-normal ms-2"></span></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                        
                        <div>
                            <a href="<?=base_url('/konsultasi')?>" class="btn btn-primary"><i class="bx bx-plus me-1"></i>Tambah Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="search-result-box card-box">
                                
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="search-item">
                                                    <h4 class="mb-1"><a href="#">Gejala</a></h4>
                                                    <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                                </div>
                                                <div class="search-item">
                                                    <h4 class="mb-1"><a href="#">Jenis Kerusakan</a></h4>
                                                    <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                                </div>
                                                <div class="search-item">
                                                    <h4 class="mb-1"><a href="#">Solusi</a></h4>
                                                    <p class="mb-0 text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container -->
            </div>
            </main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>
</html>