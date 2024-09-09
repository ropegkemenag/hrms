<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
  <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Layanan <span class="text-danger">Biro Kepegawaian</span></h3>
                            <p class="text-muted mb-4 ff-secondary">Layanan terintegrasi Biro Kepegawaian.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="https://hrms.kemenag.go.id/oss" class="text-body">Usul Layanan</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Pusat Layanan Kepegawaian</p>
                            </div>
                        </div>
                    </div>
                  <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="https://hrms.kemenag.go.id/presensi" class="text-body">Presensi</a></h5>
                                <p class="text-muted mb-0 ff-secondary">Pengelola Presensi</p>
                            </div>
                        </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="<?= site_url('rekongaji')?>" class="text-body" target="_blank">Interkoneksi Data Web Gaji</a></h5>
                                <p class="text-danger mb-0 ff-secondary">Rekonsiliasi Gaji Pegawai pada SIMPEG dan Web Gaji Kemenkeu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="#" class="text-body">Kenaikan Gaji Berkala</a></h5>
                                <p class="text-danger mb-0 ff-secondary">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="#" class="text-body">SK PNS</a></h5>
                                <p class="text-danger mb-0 ff-secondary">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="#" class="text-body">Jabatan Fungsional</a></h5>
                                <p class="text-danger mb-0 ff-secondary">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="#" class="text-body">Kenaikan Pangkat</a></h5>
                                <p class="text-danger mb-0 ff-secondary">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                                <h5 class="mb-1"><a href="#" class="text-body">Helpdesk</a></h5>
                                <p class="text-danger mb-0 ff-secondary">Coming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section bg-light py-5" id="features">
                  <div class="row">
                    <div class="col-xl-4">
                      <h5 class="mb-1">Informasi SIMPEG</h5>
                      <p class="text-muted">Don't miss scheduled events</p>
                      <div class="card overflow-hidden">
                        <div class="card-content">
                          <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                              <?php foreach ($informasi as $row) {?>
                                <li class="p-2 border-bottom zoom">
                                  <div class="media d-flex w-100">
                                    <div class="media-body align-self-center pl-2">
                                      <span class="mb-0 font-w-600"><?= $row->tgl_berita;?></span><br>
                                      <p class="mb-0 font-w-500 tx-s-12"><a href=""><?= $row->judul_berita;?></a></p>
                                    </div>
                                  </div>
                                </li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-xl-4">
                    <h5 class="mb-1">Pensiun Tahun Ini</h5>
                          <p class="text-muted">Don't miss it</p>
                          <div class="pe-2 me-n1 mb-3">
                              <div class="card card-body" id="pensiun">
                              <p class="card-text placeholder-glow">
                                  <span class="placeholder col-7"></span>
                                  <span class="placeholder col-4"></span>
                                  <span class="placeholder col-4"></span>
                                  <span class="placeholder col-6"></span>
                              </p>
                              </div>
                          </div>
                    </div>
                    <div class="col-xl-4">
                    <h5 class="mb-1">Ulang Tahun Bulan Ini</h5>
                    <p class="text-muted">Don't miss it</p>
                    <div class="card">
                        <div class="card-body bg-soft-info" id="birthday" style="height: 300px;overflow: auto;">
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                        </p>
                        </div>
                    </div>
                    </div>
                  </div>
              </section>


  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  axios.get('<?= site_url('ajax/pensiun')?>')
    .then(function (response) {
      $('#pensiun').html(response.data);
    });

  axios.get('<?= site_url('ajax/birthday')?>')
    .then(function (response) {
      $('#birthday').html(response.data);
    });
</script>
<?= $this->endSection() ?>
