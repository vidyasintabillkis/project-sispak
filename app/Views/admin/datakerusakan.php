<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="<?= base_url ('assets/css/styleadmin.css') ?>">
	<title>AdminSite</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> XX</a>
		<ul class="side-menu">
			<li><a href="<?= base_url ('/admin') ?>" class="active"><i class='bx bxs-dashboard icon' ></i> Beranda</a></li>
			<!-- <li class="divider" data-text="main">Kelola</li> -->
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i> Kelola <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
                    <li><a href="<?= base_url ('/admin/gejala') ?>">Data Gejala</a></li>
					<li><a href="<?= base_url ('/admin/kerusakan') ?>">Data Kerusakan</a></li>
					<li><a href="<?= base_url ('/admin/solusi') ?>">Data Solusi</a></li>
				</ul>
				<a href="#"><i class='bx bxs-notepad icon' ></i> Kelola Akun </a>
				<a href="#"><i class='bx bxs-notepad icon' ></i> Artikel </a>
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
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>
</html>