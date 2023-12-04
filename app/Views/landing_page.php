<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>GoDocs documentation theme</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="godocs" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- plugins -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/themify-icons/themify-icons.css') ?>">
  <!-- Main Stylesheet -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
  <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">

</head>

<body>

<header class="sticky-top navigation">
  <div class=container>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class=navbar-brand href="#"><img class="img-fluid" src="<?= base_url ('assets/images/logo.png') ?>" alt="godocs"></a>
      <div class="collapse navbar-collapse text-center" id=navigation>
        <ul class="navbar-nav mx-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
          <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
        </ul>
        <a href="<?= base_url('sign_in')?>" class="btn btn-sm btn-primary ml-lg-4">Mulai</a>
      </div>
    </nav>
  </div>
</header>

<!-- banner -->
<section class="section pb-0">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 text-center text-lg-left">
        <h1 class="mb-4">Documentation Theme By Themefisher Team</h1>
        <p class="mb-4">Lorem ipsum dolor amet, consetetur sadiffspscing elitr, diam nonumy invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua At.</p>
        <!-- <form class="search-wrapper" action="#">
          <input id="search-by" name="s" type="search" class="form-control form-control-lg"
            placeholder="Search Here...">
          <button type="submit" class="btn btn-primary">Search</button>
        </form> -->
      </div>
      <div class="col-lg-4 d-lg-block d-none">
        <img src="<?= base_url ('assets/img/banner.png') ?>" alt="illustration" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<!-- /banner -->

<!-- topics -->
<section class="section pb-0">
  <div class="container">
    <!-- <h2 class="section-title">Artikel</h2> -->
    <div class="row">
      <!-- topic -->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
            <!-- <i class="card-icon ti-panel mb-4"></i> -->
            <h3 class="card-title h4">Artikel 1</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <!-- topic -->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
            <!-- <i class="card-icon ti-credit-card mb-4"></i> -->
            <h3 class="card-title h4">Artikel 1</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <!-- topic -->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
            <!-- <i class="card-icon ti-package mb-4"></i> -->
            <h3 class="card-title h4">Artikel 1</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <!-- topic -->
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
            <!-- <i class="card-icon ti-settings mb-4"></i> -->
            <h3 class="card-title h4">Artikel 1</h3>
            <p class="card-text">Cras at dolor eget urna varius faucibus tempus in elit dolor sit amet.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /topics -->

<!-- faq -->
<section class="section pb-0">
  <div class="container">
    <h2 class="section-title">Pertanyaan Sering Diajukan</h2>
    <div class="row masonry-wrapper">
      <!-- faq item -->
      <div class="col-md-6 mb-4">
        <div class="card card-lg">
          <div class="card-body">
            <h3 class="card-title h5">Apakah website ini gratis?</h3>
            <p class="card-text content">Lorem, <a href="https://examplesite.com">link</a> <em>ipsum</em> dolor sit amet consectetur adipisicing elit. Cumque praesentium nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae maxime perspiciatis iste placeat architecto, mollitia delectus ut ab quibusdam. Magnam cumque numquam tempore reprehenderit illo, unde cum omnis vel sed temporibus. mollitia delectus ut ab quibusdam. Magnam cumque numquam tempore reprehenderit illo, unde cum
              omnis vel sed temporibus. mollitia delectus ut ab quibusdam. Magnam cumque numquam tempore reprehenderit
              illo, unde cum omnis vel sed temporibus.</p>
          </div>
        </div>
      </div>
      <!-- faq item -->
      <div class="col-md-6 mb-4">
        <div class="card card-lg">
          <div class="card-body">
            <h3 class="card-title h5">Fitur apa saja yang ditawarkan?</h3>
            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
              nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
              maxime perspiciatis iste placeat architecto.</p>
          </div>
        </div>
      </div>
      <!-- faq item -->
      <div class="col-md-6 mb-4">
        <div class="card card-lg">
          <div class="card-body">
            <h3 class="card-title h5">Apa keunggulan website ini dibandingkan dengan website lainnya?</h3>
            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
              nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
              maxime perspiciatis iste placeat architecto, mollitia delectus <a href="https://examplesite.com">link</a>
              ut ab quibusdam. Magnam cumque numquam tempore reprehenderit illo, unde cum omnis vel sed temporibus,
              repudiandae impedit nam ad enim porro, qui labore fugiat quod suscipit fuga necessitatibus. Perferendis,
              ipsum?</p>
          </div>
        </div>
      </div>
      <!-- faq item -->
      <div class="col-md-6 mb-4">
        <div class="card card-lg">
          <div class="card-body">
            <h3 class="card-title h5">Apakah website ini hanya bisa mendiagnosa kerusakan mesin cuci?</h3>
            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
              nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
              maxime perspiciatis iste placeat architecto, mollitia delectus <a href="https://examplesite.com">link</a>
              ut ab quibusdam.</p>
          </div>
        </div>
      </div>
      <!-- faq item -->
      <div class="col-md-6 mb-4">
        <div class="card card-lg">
          <div class="card-body">
            <h3 class="card-title h5">Adakah fitur premium dari website ini?</h3>
            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
              nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt reprehenderit recusandae
              maxime perspiciatis iste placeat architecto.</p>
          </div>
        </div>
      </div>
      <!-- faq item -->
      <div class="col-md-6 mb-4">
        <div class="card card-lg">
          <div class="card-body">
            <h3 class="card-title h5">Seberapa akurat website ini dalam mendiagnosa kerusakan mesin cuci?</h3>
            <p class="card-text content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium
              nisi officiis maiores quia sapiente totam omnis vel sequi corporis ipsa incidunt</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /faq -->

<footer>
  <div class="container">
    <div class="py-4 text-center">
      <small class="text-light">Copyright © 2020 a hugo theme by <a href="https://themefisher.com">themefisher</a></small>
    </div>
  </div>
</footer>

<!-- plugins -->
<script src="<?= base_url('assets/plugins/jQuery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/masonry/masonry.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/clipboard/clipboard.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/match-height/jquery.matchHeight-min.js') ?>"></script>

<!-- Main Script -->
<script src="<?= base_url('assets/js/script.js') ?>"></script>

</body>
</html>
