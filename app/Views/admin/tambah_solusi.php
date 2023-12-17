<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/styleadmin.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/tambah.css') ?>">
    <title>AdminSite</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i> XX</a>
        <ul class="side-menu">
            <li><a href="<?= base_url('/admin') ?>"><i class='bx bxs-dashboard icon'></i> Beranda</a></li>
            <!-- <li class="divider" data-text="main">Kelola</li> -->
            <li>
                <a href="#" class="active"><i class='bx bxs-inbox icon'></i> Kelola <i class='bx bx-chevron-right icon-right'></i></a>
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

        <main>
        <div class="container mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <form id="regForm" action="<?=base_url('/solusi/tambah_solusi/store')?>" method="post" enctype="multipart/form-data">
                            <h1 id="register">Tambah Data Solusi</h1><br>
                            
                            <div class="tab">
                                <h6>Kode Solusi</h6>
                                <p>
                                    <input oninput="this.className = ''" class="form-control <?= ($validation->hasError('kodeSolusi')) ? 'is-invalid' : ''; ?>" placeholder="Kode Solusi" aria-label="Kode Solusi" aria-describedby="basic-addon1" name="kodeSolusi" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kodeSolusi') ?>
                                    </div>
                                </p>
                                <h6>Nama Solusi</h6>
                                <p>
                                    <input oninput="this.className = ''" class="form-control <?= ($validation->hasError('namaSolusi')) ? 'is-invalid' : ''; ?>" placeholder="Nama Solusi" aria-label="Nama Solusi" aria-describedby="basic-addon1" name="namaSolusi" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('namaSolusi') ?>
                                    </div>
                                </p>
                                <div style="overflow:auto;" id="nextprevious">
                                    <div style="float:right;">
                                        <button type="submit" class="btn btn-custom btn-sm" >Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </form> -->
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <!-- NAVBAR -->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="<?= base_url('assets/js/scriptadmin.js') ?>"></script>
    <script src="<?= base_url('assets/js/tambah.js') ?>"></script>
</body>

</html>