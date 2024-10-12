<!DOCTYPE html>
<html lang="en">
<head>
  <title>Layanan SIMPEG | Kementerian Agama RI</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ok."/>
  <meta name="author" content="phoenixcoded" />

  <link rel="icon" href="<?= base_url()?>assets/images/favicon.svg" type="image/x-icon" />

<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<link href="<?= base_url()?>assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="<?= base_url()?>assets/fonts/tabler-icons.min.css" >
<link rel="stylesheet" href="<?= base_url()?>assets/fonts/feather.css" >
<link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome.css" >
<link rel="stylesheet" href="<?= base_url()?>assets/fonts/material.css" >

<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="<?= base_url()?>assets/css/style-preset.css" >
<link rel="stylesheet" href="<?= base_url()?>assets/css/custom.css" >

</head>
<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light" data-pc-direction="ltr">
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>

<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <?= $this->include('components/header_logo') ?>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="<?= base_url()?>widget/w_statistics.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Navigasi</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>
        <li class="pc-item">
          <a href="<?= site_url('tubel')?>" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Usulan</span>
          </a>
        </li>
      </ul>
      <div class="card nav-action-card bg-brand-color-4">
        <div class="card-body" style="background-image: url('../assets/images/layout/nav-card-bg.svg')">
          <h5 class="text-dark">Help Center</h5>
          <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Panduan</a>
        </div>
      </div>
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="<?= session('photo')?>" alt="user-image" class="user-avtar wid-30 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0"><?= session('nama')?></h6>
                    <small><?= session('jabatan')?></small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-user"></i>
                      <span>My Account</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-gear"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-lock-key"></i>
                      <span>Lock Screen</span>
                    </a>
                    </li>
                  <li>
                    <a href="<?= site_url('auth/logout')?>" class="pc-user-links">
                      <i class="ph-duotone ph-power"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<header class="pc-header">
  <div class="header-wrapper">
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">

    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>

  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <?= $this->include('components/header_right') ?>
</div> </div>
</header>

  <div class="pc-container">
    <?= $this->renderSection('content') ?>
  </div>

  <?= $this->include('components/footer') ?>
 <!-- Required Js -->
<script src="<?= base_url()?>assets/js/plugins/popper.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins/simplebar.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/fonts/custom-font.js"></script>
<script src="<?= base_url()?>assets/js/pcoded.js"></script>
<script src="<?= base_url()?>assets/js/plugins/feather.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins/wow.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins/dataTables.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
var wow = new WOW({
    animateClass: 'animate__animated'
  });
  wow.init();

  $('.datatable').DataTable();
</script>

<?= $this->renderSection('script') ?>
</body>
</html>
