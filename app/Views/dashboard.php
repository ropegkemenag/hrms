<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<section id="landingFeatures" class="section-py landing-features">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-8">
        <h4 class="text-center mb-1">
          <span class="position-relative fw-extrabold z-1">Pengelolaan Kepegawaian
            <img
            src="../../assets/img/front-pages/icons/section-title-icon.png"
            alt="laptop charging"
            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
          </span>
          Kementerian Agama
        </h4>
        <p class="text-center mb-12">
          Not just a set of tools, the package includes ready-to-deploy conceptual application.
        </p>
        <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4">
              <img src="../../assets/img/front-pages/icons/laptop.png" alt="laptop charging" />
            </div>
            <h5 class="mb-2"><a href="<?= site_url('manajemen') ?>">Manajemen Pegawai</a></h5>
            <p class="features-icon-description">
              Code structure that all developers will easily understand and fall in love with.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4">
              <img src="../../assets/img/front-pages/icons/rocket.png" alt="transition up" />
            </div>
            <h5 class="mb-2"><a href="<?= site_url('layanan') ?>">Layanan Kepegawaian</a></h5>
            <p class="features-icon-description">
              Free updates for the next 12 months, including new demos and features.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4">
              <img src="../../assets/img/front-pages/icons/paper.png" alt="edit" />
            </div>
            <h5 class="mb-2"><a href="<?= site_url('presensi') ?>">Presensi</a></h5>
            <p class="features-icon-description">
              Start your project quickly without having to remove unnecessary features.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4">
              <img src="../../assets/img/front-pages/icons/user.png" alt="lifebelt" />
            </div>
            <h5 class="mb-2"><a href="<?= site_url('kgb') ?>">KGB</a></h5>
            <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4">
              <img src="../../assets/img/front-pages/icons/check.png" alt="3d select solid" />
            </div>
            <h5 class="mb-2">Data Non ASN</h5>
            <p class="features-icon-description">
              Just change the endpoint and see your own data loaded within seconds.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4">
              <img src="../../assets/img/front-pages/icons/keyboard.png" alt="google docs" />
            </div>
            <h5 class="mb-2">Perencanaan Pegawai</h5>
            <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>
