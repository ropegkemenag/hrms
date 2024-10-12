<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>HRMS | Kementerian Agama RI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Kepegawaian Kementerian Agama RI" name="description" />
    <meta content="Danunih" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/images/favicon.ico">

    <!--Swiper slider css-->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <style media="screen">
    .nft-hero {
      padding: 100px 0 100px 0;
    }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <!-- start hero section -->
        <section class="section nft-hero" id="hero">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                          <img src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/images/logo-hrms.png" height="70">
                            <h1 class="display-6 fw-medium mb-4 lh-base text-white">Sistem Informasi Kepegawaian <br><span class="text-success">Kementerian Agama RI</span></h1>
                        </div>
                    </div><!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hero section -->
        <section class="section bg-light" id="categories">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="text-center mb-5">
                                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Layanan <span class="text-primary">Biro Kepegawaian</span></h1>
                                <p class="text-bold">#terintegrasi</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                      <div class="col-lg-3 col-md-6">
                          <div class="card shadow-none text-center py-3">
                              <div class="card-body py-4">
                                  <div class="avatar-sm position-relative mb-4 mx-auto">
                                      <div class="job-icon-effect"></div>
                                      <div class="avatar-title bg-transparent text-success rounded-circle">
                                          <i class="ri-focus-2-line fs-1"></i>
                                      </div>
                                  </div>
                                  <a href="dashboard" class="stretched-link">
                                      <h5 class="fs-17 pt-1">HRMS</h5>
                                  </a>
                                  <p class="text-muted mb-0 ff-secondary">Management</p>
                              </div>
                          </div>
                      </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-2-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="layanan" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Usul Layanan</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Layanan Digital</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-airplay-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="presensi" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Presensi</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Pengelolaan Presensi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm mb-4 mx-auto position-relative">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-bank-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="<?= site_url('rekongaji')?>" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Interkonesi Data Belanja Gaji</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Rekonsiliasi Gaji Pegawai pada SIMPEG dan Web Gaji Kemenkeu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-focus-2-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Kenaikan Gaji Berkala</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Pengelolaan KGB Pegawai</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Kenaikan Pangkat</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Usul Kenaikan Pangkat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-line-chart-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Jabatan Fungsional</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Pengelolaan Jabatan Fungsional</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-none text-center py-3">
                                <div class="card-body py-4">
                                    <div class="avatar-sm position-relative mb-4 mx-auto">
                                        <div class="job-icon-effect"></div>
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-briefcase-2-line fs-1"></i>
                                        </div>
                                    </div>
                                    <a href="#!" class="stretched-link">
                                        <h5 class="fs-17 pt-1">Helpdesk</h5>
                                    </a>
                                    <p class="text-muted mb-0 ff-secondary">Konsultasi/Pengaduan/Pengetahuan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>



        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Biro Kepegawaian Kementerian Agama RI</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://ropeg.kemenag.go.id" class="btn bg-gradient btn-danger">Portal Biro Kepegawaian</a>
                            <a href="https://simpeg5.kemenag.go.id" class="btn bg-gradient btn-info">Portal Pegawai</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/node-waves/waves.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/feather-icons/feather.min.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/pages/nft-landing.init.js"></script>
</body>

</html>
