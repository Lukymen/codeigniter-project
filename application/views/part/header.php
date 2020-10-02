<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico') ?>">

    <title>Beranda Website</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/sticky-footer-navbar.css') ?>" rel="stylesheet">
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/jquery-3.2.1.slim.min.js') ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap.min.js') ?>"></script>
  </head>

  <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class = "container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Website CI</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href= "<?php echo base_url('index.php/page/index'); ?>">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/karyawan'); ?>">Karyawan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/page/tentangkami'); ?>">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    </header>