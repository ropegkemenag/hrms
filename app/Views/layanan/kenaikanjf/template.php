<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-layout-style="default" data-layout-mode="light" data-layout-width="fluid" data-layout-position="fixed">
<head>

    <meta charset="utf-8" />
    <title>HRMS | Kementerian Agama RI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Kepegawaian Kementerian Agama RI" name="description" />
    <meta content="Danunih" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/images/favicon.ico">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <!-- Layout config Js -->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>assets/css/custom.horizontal.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <style media="screen">
  	#loverlay{
  	position: fixed;
  	top: 0;
  	z-index: 100000;
  	width: 100%;
  	height:100%;
  	display: none;
  	background: rgba(0,0,0,0.6);
  	}
  	.cv-spinner {
  	height: 100%;
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	}
  	.spinner {
  	width: 40px;
  	height: 40px;
  	border: 4px #ddd solid;
  	border-top: 4px #2e93e6 solid;
  	border-radius: 50%;
  	animation: sp-anime 0.8s infinite linear;
  	}
  	@keyframes sp-anime {
  	100% {
  		transform: rotate(360deg);
  	}
  	}
  	.is-hide{
  	display:none;
  	}
    .progressx {
      width: 100px;
    	height: 40px;
      margin-top: 25px;
      padding-left: 10px;
      color: #fff;
  	}
  	</style>
    <?= $this->renderSection('style') ?>
</head>

<body>
  <div id="loverlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
    <span class="progressx">Loading...</span>
  </div>
  </div>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="<?= site_url() ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?= base_url()?>assets/images/hrms-logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url()?>assets/images/hrms-logo.png" alt="" height="45">
                        </span>
                    </a>

                    <a href="<?= site_url() ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?= base_url()?>assets/images/hrms-logo-light.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?= base_url()?>assets/images/hrms-logo-light.png" alt="" height="45">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->

            </div>

            <div class="d-flex align-items-center">

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="<?= session('photo')?>" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?= session('nama')?></span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"><?= session('jabatan')?></span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">Welcome <?= session('nama')?>!</h6>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="<?= site_url('auth/logout') ?>"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?= site_url() ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url()?>assets/images/logo-hrms.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url()?>assets/images/logo-hrms.png" alt="" height="45">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="<?= site_url() ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url()?>assets/images/logo-hrms-light.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url()?>assets/images/logo-hrms-light.png" alt="" height="45">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#dashboard" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dashboard">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-layouts">Dashboard</span>
                            </a>
                            <div class="collapse menu-dropdown" id="dashboard">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/dashboard')?>" class="nav-link" data-key="t-horizontal">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/dashboard/pegawai')?>" class="nav-link" data-key="t-horizontal">Kepegawaian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/dashboard/kinerja')?>" class="nav-link" data-key="t-detached">Kinerja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/dashboard/map')?>" class="nav-link" data-key="t-detached">Peta</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php if(session('role') == 1){ ?>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarMaster" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaster">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-layouts">Master</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaster">
                                <ul class="nav nav-sm flex-column">
                                  <li class="nav-item">
                                      <a href="#sidebarMasterUmum" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMasterUmum" data-key="t-profile"> Umum</a>
                                      <div class="collapse menu-dropdown" id="sidebarMasterUmum">
                                          <ul class="nav nav-sm flex-column">
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/agama')?>" class="nav-link" data-key="t-simple-page">Agama</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/unor')?>" class="nav-link" data-key="t-settings"> Satuan Kerja </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/lokasi')?>" class="nav-link" data-key="t-settings"> Lokasi </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/statusperkawinan')?>" class="nav-link" data-key="t-settings"> Status Perkawinan </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/statusanak')?>" class="nav-link" data-key="t-settings"> Status Anak </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a href="#sidebarMasterKepegawaian" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMasterKepegawaian" data-key="t-profile"> Kepegawaian</a>
                                      <div class="collapse menu-dropdown" id="sidebarMasterKepegawaian">
                                          <ul class="nav nav-sm flex-column">
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/kepangkatan')?>" class="nav-link" data-key="t-simple-page">Kepangkatan</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/jenispegawai')?>" class="nav-link" data-key="t-settings"> Jenis Kepegawaian </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/statuspegawai')?>" class="nav-link" data-key="t-settings"> Status Kepegawaian </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/tipejabatan')?>" class="nav-link" data-key="t-settings"> Tipe Jabatan </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/leveljabatan')?>" class="nav-link" data-key="t-settings"> Level Jabatan </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/jabatan')?>" class="nav-link" data-key="t-settings"> Jabatan </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/jenismutasi')?>" class="nav-link" data-key="t-settings"> Jenis Mutasi </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/jenishukdis')?>" class="nav-link" data-key="t-settings"> Jenis Hukuman Indisipliner </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/tingkathukdis')?>" class="nav-link" data-key="t-settings"> Tingkat Hukuman Indisipliner </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/kepegawaian/gajipokok')?>" class="nav-link" data-key="t-settings"> Gaji Pokok </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a href="#sidebarMasterPendidikan" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMasterPendidikan" data-key="t-profile"> Pendidikan</a>
                                      <div class="collapse menu-dropdown" id="sidebarMasterPendidikan">
                                          <ul class="nav nav-sm flex-column">
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/agama')?>" class="nav-link" data-key="t-simple-page">Jenjang Pendidikan</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/satker')?>" class="nav-link" data-key="t-settings"> Fakultas Pendidikan </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/lokasi')?>" class="nav-link" data-key="t-settings"> Jenis Bidang Studi </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/statusperkawinan')?>" class="nav-link" data-key="t-settings"> Tipe Diklat </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/statusanak')?>" class="nav-link" data-key="t-settings"> Diklat </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a href="#sidebarMasterAdministrasi" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMasterAdministrasi" data-key="t-profile"> Administrasi</a>
                                      <div class="collapse menu-dropdown" id="sidebarMasterAdministrasi">
                                          <ul class="nav nav-sm flex-column">
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/administrasi/user')?>" class="nav-link" data-key="t-simple-page">Tabel User</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/satker')?>" class="nav-link" data-key="t-settings"> Tabel Referensi </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/lokasi')?>" class="nav-link" data-key="t-settings"> Tabel Grup Referensi </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="<?= site_url('manajemen/master/umum/statusperkawinan')?>" class="nav-link" data-key="t-settings"> Tabel Berita </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/master/access')?>" class="nav-link" data-key="t-horizontal">Akses User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#pegawai" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pegawai">
                            <i class="ri-account-circle-fill"></i> <span data-key="t-layouts">Pegawai</span>
                        </a>
                        <div class="collapse menu-dropdown" id="pegawai">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/pegawai/data')?>" class="nav-link" data-key="t-horizontal">Data Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/pegawai')?>" class="nav-link" data-key="t-horizontal">Cari Pegawai</a>
                                </li>
                            </ul>
                        </div>
                        </li>
                        <?php } ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#dashboard" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-account-circle-fill"></i> <span data-key="t-layouts">Pemutakhiran</span>
                            </a>
                            <div class="collapse menu-dropdown" id="dashboard">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/pemutakhiran/tambah')?>" class="nav-link" data-key="t-horizontal">Tambah Pegawai</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/pemutakhiran/transfer')?>" class="nav-link" data-key="t-horizontal">Transfer Pegawai</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/pemutakhiran/pensiun')?>" class="nav-link" data-key="t-horizontal">Pensiun Tapera</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= site_url('manajemen/pemutakhiran/unor')?>" class="nav-link" data-key="t-horizontal">Penambahan Unor BKN</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#laporan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="laporan">
                            <i class="ri-profile-line"></i> <span data-key="t-layouts">Laporan</span>
                        </a>
                        <div class="collapse menu-dropdown" id="laporan">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/laporan/jumlah')?>" class="nav-link" data-key="t-horizontal">Rekapitulasi Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/laporan/duk')?>" class="nav-link" data-key="t-horizontal">Daftar Urut Kepangkatan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/laporan/pejabat')?>" class="nav-link" data-key="t-detached">Data Pejabat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/laporan/pensiun')?>" class="nav-link" data-key="t-detached">Data Pensiun</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('manajemen/laporan/pivot')?>" class="nav-link" data-key="t-two-column">Pivot Table</a>
                                </li>
                            </ul>
                        </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= site_url('manajemen/pegawai')?>">
                <i class=" ri-team-line"></i> <span data-key="t-apps">Pegawai</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= site_url('manajemen/download')?>">
                <i class="ri-download-cloud-2-line"></i> <span data-key="t-apps">Download</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-link collapsed" href="#setting" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="setting">
                    <i class="ri-settings-2-line"></i> <span data-key="t-layouts">Pengaturan</span>
                </a>
                <div class="collapse menu-dropdown" id="setting">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="<?= site_url('manajemen/access')?>" class="nav-link" data-key="t-horizontal">Akses Pengguna</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= site_url('manajemen/satker/lokasi/pegawai')?>" class="nav-link" data-key="t-horizontal">Lokasi Pegawai</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?= site_url('manajemen/setting/user')?>" class="nav-link" data-key="t-horizontal">Reset Password</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= site_url('manajemen/informasi')?>">
                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Informasi</span>
              </a>
            </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <?= $this->renderSection('content') ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © HRMS.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                by Biro Kepegawaian
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Theme Settings -->

    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!-- JAVASCRIPT -->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/node-waves/waves.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/feather-icons/feather.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/plugins.js"></script>

    <!-- App js -->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $.get('https://ropeg.kemenag.go.id/api/webview/avatar/index/<?= session('niplama')?>', function(res){
        $('.user-avatar').attr('src',res);
      });
    });

    $('.datatable').dataTable();

    function alert($text) {
        Toastify({
        text: $text,
        duration: 5000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
        onClick: function(){} // Callback after click
        }).showToast();
    }

    <?php
    if(session()->getFlashdata('message')){
        ?>
        alert("<?= session()->getFlashdata('message')?>");
        <?php
    }
    ?>

    function loader() {
      $("#loverlay").fadeIn(300);
    }
    </script>
    <?= $this->renderSection('script') ?>
</body>

</html>
