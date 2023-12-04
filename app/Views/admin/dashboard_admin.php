<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/styleadmin.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/tabeluser.css') ?>">
	<title>AdminSite</title>
</head>

<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> XX</a>
		<ul class="side-menu">
			<li><a href="<?= base_url('/admin') ?>" class="active"><i class='bx bxs-dashboard icon'></i> Beranda</a></li>
			<!-- <li class="divider" data-text="main">Kelola</li> -->
			<li>
				<a href="#"><i class='bx bxs-inbox icon'></i> Kelola <i class='bx bx-chevron-right icon-right'></i></a>
				<ul class="side-dropdown">
					<li><a href="<?= base_url('/gejala') ?>">Data Gejala</a></li>
					<li><a href="<?= base_url('/kerusakan') ?>">Data Kerusakan</a></li>
					<li><a href="<?= base_url('/solusi') ?>">Data Solusi</a></li>
				</ul>
				<a href="<?= base_url('/akun') ?>"><i class='bx bxs-notepad icon'></i> Kelola Akun </a>
				<a href="<?= base_url('/artikel') ?>"><i class='bx bxs-notepad icon'></i> Artikel </a>
				<a href="#"><i class='bx bxs-notepad icon'></i> Keluar </a>
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
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-log-out-circle'></i> Keluar</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>1500</h2>
							<p>Data Gejala</p>
						</div>
						<!-- <i class='bx bx-trending-up icon' ></i> -->
					</div>
					<!-- <span class="progress" data-value="40%"></span>
					<span class="label">40%</span> -->
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>234</h2>
							<p>Data Kerusakan</p>
						</div>
						<!-- <i class='bx bx-trending-down icon down' ></i> -->
					</div>
					<!-- <span class="progress" data-value="60%"></span>
					<span class="label">60%</span> -->
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>465</h2>
							<p>Data Solusi</p>
						</div>
						<!-- <i class='bx bx-trending-up icon' ></i> -->
					</div>
					<!-- <span class="progress" data-value="30%"></span>
					<span class="label">30%</span> -->
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>235</h2>
							<p>Pengunjung</p>
						</div>
						<!-- <i class='bx bx-trending-up icon' ></i> -->
					</div>
					<!-- <span class="progress" data-value="80%"></span>
					<span class="label">80%</span> -->
				</div>
			</div>
			<div class="data">
				<div class="content-data">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6">
								<div class="mb-3">
									<h5 class="card-title">Data Gejala</h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

									<div>
										<a href="<?= base_url('/solusi') ?>" class="btn btn-primary btn-sm">Detail</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="">
									<div class="table-responsive">
										<table class="table project-list-table table-nowrap align-middle table-borderless">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Kode Gejala</th>
													<th scope="col">Nama Gejala</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>G001</td>
													<td>Sariawan</td>
												</tr>
												<tr>
													<td>2</td>
													<td>G002</td>
													<td>Sariawan</td>
												</tr>
												<tr>
													<td>3</td>
													<td>G003</td>
													<td>Sariawan</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-data">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-6">
								<div class="mb-3">
									<h5 class="card-title">Data Pengguna</h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

									<div>
										<a href="<?= base_url('/akun') ?>" class="btn btn-primary btn-sm">Detail</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="">
									<div class="table-responsive">
										<table class="table project-list-table table-nowrap align-middle table-borderless">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Email</th>
													<th scope="col">Nama</th>
													<th scope="col">Jenis Kelamin</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>vidyasinta@gmail.com</td>
													<td>Vidya</td>
													<td>Perempuan</td>
												</tr>
												<tr>
													<td>2</td>
													<td>vidyasinta@gmail.com</td>
													<td>Vidya</td>
													<td>Perempuan</td>
												</tr>
												<tr>
													<td>3</td>
													<td>vidyasinta@gmail.com</td>
													<td>Vidya</td>
													<td>Perempuan</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-data">
					<span>INI BUAT ARTIKEL TAPI BINGUNG t_t</span>
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