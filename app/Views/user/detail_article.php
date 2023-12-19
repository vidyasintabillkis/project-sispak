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
            <!-- Beranda mau buat tampilin artikel -->
            <li><a href="<?= base_url('/user') ?>"><i class='bx bxs-dashboard icon'></i> Beranda</a></li>
            <!-- <li class="divider" data-text="main">Kelola</li> -->
            <li>
                <a href="<?= base_url('/konsultasi') ?>"><i class='bx bxs-inbox icon'></i> Konsultasi</a>
                <a href="<?= base_url('/riwayathasil') ?>"><i class='bx bxs-notepad icon'></i> Riwayat Hasil Konsutasi </a>
                <a href="<?= base_url('/article') ?>" class="active"><i class='bx bxs-notepad icon'></i> Artikel </a>
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
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold"><?= $artikel['judul']; ?></h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/img/mesincuci.jpg') ?>" alt="...">
                    </div>
                    <p><?= $artikel['deskripsi']; ?></p>
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