<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="container-fluid">
    <div class="profile-foreground position-relative mx-n4 mt-n4">
      <div class="profile-wid-bg">
        <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
      </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
      <div class="row g-4">
        <div class="col-auto">
          <div class="avatar-lg">
            <img src="" id="pegawai-avatar" alt="user-img" class="img-thumbnail rounded-circle" />
          </div>
        </div>

        <div class="col">
          <div class="p-2">
            <h3 class="text-white mb-1"><?= $pegawai->NAMA_LENGKAP?></h3>
            <p class="text-white-75"><?= $pegawai->TAMPIL_JABATAN?></p>
            <div class="hstack text-white-50 gap-1">
              <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i><?= $pegawai->SATKER_3?></div>
              <div>
                <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i><?= $pegawai->SATKER_4?>
              </div>
              <div>
                <i class="ri-file-mark-line me-1 text-white-75 fs-16 align-middle"></i><?= $pegawai->PENDIDIKAN?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-auto order-last order-lg-0">
          <div class="row text text-white-50 text-center">
            <div class="col-lg-12 col-4">
              <div class="p-2">
                <h4 class="text-white mb-1"><?= $pegawai->STATUS_PEGAWAI?></h4>
                <p class="fs-14 mb-0">Jenis Pegawai</p>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!--end row-->
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div>
          <div class="d-flex">
            <!-- Nav tabs -->
            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                  <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Data SIMPEG</span>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                  <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Data SAPK</span>
                </a> -->
              </li>
            </ul>
            <div class="flex-shrink-0">
              <!-- <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a> -->
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content pt-4 text-muted">
            <div class="tab-pane active" id="overview-tab" role="tabpanel">
              <div class="row">
                <div class="col-xxl-3">
                  <div data-simplebar style="max-height: 365px;">
                  <div class="list-group list-group-fill-success">
                      <a href="<?= site_url('pegawai/profil/'.encrypt($pegawai->NIP).'/biodata')?>" class="list-group-item list-group-item-action active"><i class="ri-download-2-fill align-middle me-2"></i>Biodata</a>
                      <a href="<?= site_url('pegawai/profil/'.encrypt($pegawai->NIP).'/alamat')?>" class="list-group-item list-group-item-action"><i class="ri-shield-check-line align-middle me-2"></i>Alamat</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-database-2-line align-middle me-2"></i>Keterangan Diri</a>
                      <a href="<?= site_url('pegawai/profil/'.encrypt($pegawai->NIP).'/pendidikan')?>" class="list-group-item list-group-item-action"><i class="ri-notification-3-line align-middle me-2"></i>Pendidikan</a>
                      <a href="<?= site_url('pegawai/profil/'.encrypt($pegawai->NIP).'/pekerjaan')?>" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Pekerjaan</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Tanda Jasa</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Pengalaman</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Keluarga</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Organisasi</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Penelitian</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Indisiplin</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>KGB</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>SKP</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>CLTN</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Sertifikasi</a>
                      <a href="#" class="list-group-item list-group-item-action"><i class="ri-moon-fill align-middle me-2"></i>Lainnya</a>
                  </div>
                  </div>

                </div>

                <div class="col-xxl-9">
                  <?= $this->renderSection('dataprofil') ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
$(document).ready(function() {
  $.get('https://ropeg.kemenag.go.id/api/webview/avatar/index/<?= $pegawai->NIP?>', function(res){
    $('#pegawai-avatar').attr('src',res);
  });
});
</script>
<?= $this->endSection() ?>
