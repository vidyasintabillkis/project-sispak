<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/styleadmin.css') ?>">
	<title>Artikel</title>
</head>

<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> XX</a>
		<ul class="side-menu">
			<li><a href="<?= base_url('/admin') ?>"><i class='bx bxs-dashboard icon'></i> Beranda</a></li>
			<!-- <li class="divider" data-text="main">Kelola</li> -->
			<li>
				<a href="#"><i class='bx bxs-inbox icon'></i> Kelola <i class='bx bx-chevron-right icon-right'></i></a>
				<ul class="side-dropdown">
					<li><a href="<?= base_url('/gejala') ?>">Data Gejala</a></li>
					<li><a href="<?= base_url('/kerusakan') ?>">Data Kerusakan</a></li>
					<li><a href="<?= base_url('/solusi') ?>">Data Solusi</a></li>
				</ul>
				<a href="<?= base_url('/akun') ?>"><i class='bx bxs-notepad icon'></i> Kelola Akun </a>
				<a href="<?= base_url('/artikel') ?>" class="active"><i class='bx bxs-notepad icon'></i> Artikel </a>
				<a href="<?= base_url('logout') ?>"><i class='bx bxs-notepad icon'></i> Keluar </a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar'></i>
			<form action="#">
			</form>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<?php for ($i = 1; $i <= count($artikel); $i++) : ?>
				<?php if ($i % 3 == 1) : ?>
					<?php endif; ?>
					<div class="card mr-2" style="width: 20rem;">
						<center><img src="<?= base_url('assets/img/mesincuci.jpg')?>" class="card-img-top" alt="..." style="width: 18rem;"></center>
						<div class="card-body">
							<h5 class="card-title"><?= $artikel[$i - 1]['judul'] ?></h5>
							<a href="<?= base_url('lihat_artikel/'.$artikel[$i-1]['id'])?>" class="btn btn-primary btn-sm">Selengkapnya</a>
						</div>
					</div><br>
					<?php if ($i % 3 == 0) : ?>
			<?php endif;
				endfor; ?>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
</body>

</html>