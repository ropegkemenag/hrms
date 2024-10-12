<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="<?= base_url()?>assets/img/avatars/1.png" id="pegawai-avatar" width="100px" alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-lg-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4 class="mb-2 mt-lg-6"><?= $pegawai->NAMA_LENGKAP?></h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 my-2">
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-palette ti-lg'></i><span class="fw-medium"><?= $pegawai->TAMPIL_JABATAN?></span>
                </li>
                <li class="list-inline-item d-flex gap-2 align-items-center">
                  <i class='ti ti-map-pin ti-lg'></i><span class="fw-medium"><?= $pegawai->SATKER_3?></span>
                </li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary mb-1">
              <i class='ti ti-user-check ti-xs me-2'></i>Print DRH
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card">
      <table class="table">
        <tr>
          <td>Nama</td>
          <th><?= $pegawai->NAMA_LENGKAP?></th>
        </tr>
        <tr>
          <td>NIP Lama</td>
          <th><?= $pegawai->NIP?></th>
        </tr>
        <tr>
          <td>NIP</td>
          <th><?= $pegawai->NIP_BARU?></th>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td><?= $pegawai->TEMPAT_LAHIR?>, <?= id_date($pegawai->TANGGAL_LAHIR)?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <th><?= ($pegawai->JENIS_KELAMIN == 0)?'Perempuan':'Laki-Laki'?></th>
        </tr>
        <tr>
          <td>Agama</td>
          <th><?= $pegawai->AGAMA?></th>
        </tr>
        <tr>
          <td>Jenis Pegawai</td>
          <th><?= $pegawai->STATUS_PEGAWAI?></th>
        </tr>
        <tr>
          <td>Jenis Pegawai</td>
          <th><?= $pegawai->STATUS_PEGAWAI?></th>
        </tr>
      </table>
    </div>
    <hr>
    <ul class="list-group list-group-flush border-dashed mb-0">
      <li class="list-group-item d-flex align-items-center">
        <div class="flex-shrink-0">
          <i class="mdi mdi-calendar-multiple-check text-primary fs-5"></i>
        </div>
        <div class="flex-grow-1 ms-3">
          <h6 class="fs-14 mb-1">TMT CPNS</h6>
        </div>
        <div class="flex-shrink-0 text-end">
          <h6 class="fs-14 mb-1">5 Thn 6 Bln</h6>
        </div>
      </li>
      <li class="list-group-item d-flex align-items-center">
        <div class="flex-shrink-0">
          <i class="mdi mdi-calendar-multiple-check text-primary fs-5"></i>
        </div>
        <div class="flex-grow-1 ms-3">
          <h6 class="fs-14 mb-1">TMT PNS</h6>
        </div>
        <div class="flex-shrink-0 text-end">
          <h6 class="fs-14 mb-1">5 Thn 6 Bln</h6>
        </div>
      </li>
      <li class="list-group-item d-flex align-items-center">
        <div class="flex-shrink-0">
          <i class="mdi mdi-calendar-multiple-check text-primary fs-5"></i>
        </div>
        <div class="flex-grow-1 ms-3">
          <h6 class="fs-14 mb-1">Masa Kerja</h6>
        </div>
        <div class="flex-shrink-0 text-end">
          <h6 class="fs-14 mb-1">5 Thn 6 Bln</h6>
        </div>
      </li>
      <li class="list-group-item d-flex align-items-center">
        <div class="flex-shrink-0">
          <i class="mdi mdi-calendar-multiple-check text-primary fs-5"></i>
        </div>
        <div class="flex-grow-1 ms-3">
          <h6 class="fs-14 mb-1">KP Selanjutnya</h6>
        </div>
        <div class="flex-shrink-0 text-end">
          <h6 class="fs-14 mb-1">01/10/2025</h6>
        </div>
      </li>
      <li class="list-group-item d-flex align-items-center">
        <div class="flex-shrink-0">
          <i class="mdi mdi-calendar-multiple-check text-primary fs-5"></i>
        </div>
        <div class="flex-grow-1 ms-3">
          <h6 class="fs-14 mb-1">KGB Selanjutnya</h6>
        </div>
        <div class="flex-shrink-0 text-end">
          <h6 class="fs-14 mb-1">01/03/2025</h6>
        </div>
      </li>
      <li class="list-group-item d-flex align-items-center">
        <div class="flex-shrink-0">
          <i class="mdi mdi-calendar-multiple-check text-primary fs-5"></i>
        </div>
        <div class="flex-grow-1 ms-3">
          <h6 class="fs-14 mb-1">Tanggal Pensiun</h6>
        </div>
        <div class="flex-shrink-0 text-end">
          <h6 class="fs-14 mb-1">01/08/2045</h6>
        </div>
      </li>
    </ul>
  </div>
  <div class="col-md-8">
    <div class="nav-align-top">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profil" aria-controls="navs-profil" aria-selected="true"><i class='ti-sm ti ti-user-check me-1_5'></i> Profil</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pendidikan" aria-controls="navs-pendidikan" aria-selected="false"><i class='ti-sm ti ti-users me-1_5'></i> Pendidikan</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pekerjaan" aria-controls="navs-pekerjaan" aria-selected="false"><i class='ti-sm ti ti-layout-grid me-1_5'></i> Pekerjaan</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-keluarga" aria-controls="navs-keluarga" aria-selected="false"><i class='ti-sm ti ti-link me-1_5'></i> Keluarga</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-lainnya" aria-controls="navs-lainnya" aria-selected="false"><i class='ti-sm ti ti-link me-1_5'></i> Lainnya</button>
        </li>
      </ul>
    </div>

    <div class="tab-content p-0 pt-5">
        <div class="tab-pane fade show active" id="navs-profil" role="tabpanel">
          ss
        </div>
        <div class="tab-pane fade" id="navs-pendidikan" role="tabpanel">
          <div class="card card-body">
            <?= $this->include('manajemen/pegawai/profil/pendidikan2')?>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pekerjaan" role="tabpanel">
          <div class="card card-body">
            <?= $this->include('manajemen/pegawai/profil/pekerjaan2')?>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-keluarga" role="tabpanel">
          <div class="card card-body">
            <?= $this->include('manajemen/pegawai/profil/keluarga')?>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-lainnya" role="tabpanel">
          <div class="card card-body">
            <?= $this->include('manajemen/pegawai/profil/lainnya')?>
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
