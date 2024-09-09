<?= $this->extend('template') ?>

<?= $this->section('content') ?>

    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="text-center mb-5">
                <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Human Resource <span class="text-danger">Management System</span></h1>
                <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6">
            <div class="card text-center py-3 card-animate shadow-lg">
                <div class="card-body py-4">
                    <div class="avatar-sm position-relative mb-4 mx-auto">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-pencil-ruler-2-line fs-1"></i>
                        </div>
                    </div>
                    <a href="<?= site_url('manajemen')?>" class="stretched-link">
                        <h5 class="fs-17 pt-1">Manajemen</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg card-animate text-center py-3">
                <div class="card-body py-4">
                    <div class="avatar-sm position-relative mb-4 mx-auto">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-airplay-line fs-1"></i>
                        </div>
                    </div>
                    <a href="#!" class="stretched-link">
                        <h5 class="fs-17 pt-1">Presensi</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg card-animate text-center py-3">
                <div class="card-body py-4">
                    <div class="avatar-sm mb-4 mx-auto position-relative">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-bank-line fs-1"></i>
                        </div>
                    </div>
                    <a href="#!" class="stretched-link">
                        <h5 class="fs-17 pt-1">Interkoneksi Web Gaji</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg card-animate text-center py-3">
                <div class="card-body py-4">
                    <div class="avatar-sm position-relative mb-4 mx-auto">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-focus-2-line fs-1"></i>
                        </div>
                    </div>
                    <a href="#!" class="stretched-link">
                        <h5 class="fs-17 pt-1">Layanan Data Simpeg</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg card-animate text-center py-3">
                <div class="card-body py-4">
                    <div class="avatar-sm position-relative mb-4 mx-auto">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-pencil-ruler-line fs-1"></i>
                        </div>
                    </div>
                    <a href="#!" class="stretched-link">
                        <h5 class="fs-17 pt-1">Satyalancana</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg card-animate text-center py-3">
                <div class="card-body py-4">
                    <div class="avatar-sm position-relative mb-4 mx-auto">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-line-chart-line fs-1"></i>
                        </div>
                    </div>
                    <a href="#!" class="stretched-link">
                        <h5 class="fs-17 pt-1">Digital Marketing</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg card-animate text-center py-3">
                <div class="card-body py-4">
                    <div class="avatar-sm position-relative mb-4 mx-auto">
                        <div class="job-icon-effect"></div>
                        <div class="avatar-title bg-transparent text-success rounded-circle">
                            <i class="ri-briefcase-2-line fs-1"></i>
                        </div>
                    </div>
                    <a href="#!" class="stretched-link">
                        <h5 class="fs-17 pt-1">Catering &amp; Tourism</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="section bg-light" id="plans">
          <div class="bg-overlay bg-overlay-pattern"></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="text-center mb-5">
                          <h3 class="mb-3 fw-semibold">Choose the plan that's right for you</h3>
                          <p class="text-muted mb-4">Simple pricing. No hidden fees. Advanced features for you business.</p>

                          <div class="d-flex justify-content-center align-items-center">
                              <div>
                                  <h5 class="fs-14 mb-0">Month</h5>
                              </div>
                              <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                  <input class="form-check-input" type="checkbox" id="plan-switch">
                                  <label class="form-check-label" for="plan-switch"></label>
                              </div>
                              <div>
                                  <h5 class="fs-14 mb-0">Annual <span class="badge bg-success-subtle text-success">Save 20%</span></h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> -->

<?= $this->endSection() ?>
