<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Profil Pegawai</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);" class="btn btn-primary text-light">Cetak DRH</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
      <div class="row">
        <div class="col-xxl-3">
          <div class="card">
            <div class="card-body p-4">
              <div class="text-center">
                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                  <img src="<?= base_url()?>assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image" id="pegawai-avatar" alt="user-profile-image">
                  <!-- <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                      <span class="avatar-title rounded-circle bg-light text-body">
                        <i class="ri-camera-fill"></i>
                      </span>
                    </label>
                  </div> -->
                </div>
                <h5 class="fs-16 mb-1"><?= $pegawai->NAMA_LENGKAP?></h5>
                <h6 class="text-primary"><?= $pegawai->NIP_BARU?></h6>
                <p class="text-muted mb-0"><?= $pegawai->TAMPIL_JABATAN?></p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">

            </div>
          </div>

          <!--end card-->
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center mb-4">
                <div class="flex-grow-1">
                  <h5 class="card-title mb-0">Kontak</h5>
                </div>
              </div>
              <form action="">
                <div class="mb-3">
                    <label for="employeeName" class="form-label">Email</label>
                    <input type="text" class="form-control" value="" disabled>
                </div>
                <div class="mb-3">
                    <label for="employeeUrl" class="form-label">No. HP</label>
                    <input type="url" class="form-control" id="employeeUrl" disabled>
                </div>
                <div class="mb-3">
                    <label for="StartleaveDate" class="form-label">No. HP Lainnya</label>
                    <input type="date" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="EndleaveDate" class="form-label">Alamat</label>
                    <textarea name="name" class="form-control" rows="8" cols="80" disabled></textarea>
                </div>
            </form>
            </div>
          </div>
        </div>

        <div class="col-xxl-9">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title mb-0 flex-grow-1">Ikhtisar Jabatan</h4>
            </div>
            <table class="table table-striped-columns table-bordered">
              <tbody>
                <tr>
                  <td width="20%">Jabatan</td>
                  <td><?= $pegawai->KET_JABATAN?></td>
                </tr>
                <tr>
                  <td>Unit Kerja</td>
                  <td><?= $pegawai->SATKER_1?></td>
                </tr>
                <tr>
                  <td>Keterangan Unit Kerja</td>
                  <td><?= $pegawai->SATKER_4?></td>
                </tr>
                <tr>
                  <td>Pangkat - Gol/Ruang</td>
                  <td><?= $pegawai->PANGKAT.', '.$pegawai->GOL_RUANG?></td>
                </tr>
                <tr>
                  <td>Pendidikan Terakhir</td>
                  <td><?= $pegawai->JENJANG_PENDIDIKAN.', '.$pegawai->JURUSAN?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                    <i class="fas fa-home"></i> Info Pegawai
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#pendidikan" role="tab">
                    <i class="far fa-envelope"></i> Pendidikan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#pekerjaan" role="tab">
                    <i class="far fa-envelope"></i> Pekerjaan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#keluarga" role="tab">
                    <i class="far fa-envelope"></i> Keluarga
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#lainnya" role="tab">
                    <i class="far fa-envelope"></i> Lainnya
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                    <i class="far fa-user"></i> Akun Pegawai
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body p-2">
              <div class="tab-content">
                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                  <form action="">
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="nameInput" class="form-label">Nama</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="<?= $pegawai->NAMA_LENGKAP?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="websiteUrl" class="form-label">NIP Lama/NIP</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="url" class="form-control" value="<?= $pegawai->NIP?>" disabled>
                        </div>
                        <div class="col-lg-6">
                            <input type="url" class="form-control" value="<?= $pegawai->NIP_BARU?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="websiteUrl" class="form-label">Tempat, Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="url" class="form-control" value="<?= $pegawai->TEMPAT_LAHIR?>" disabled>
                        </div>
                        <div class="col-lg-3">
                            <input type="url" class="form-control" value="<?= id_date($pegawai->TANGGAL_LAHIR)?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="dateInput" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="<?= ($pegawai->JENIS_KELAMIN == 0)?'Perempuan':'Laki-Laki'?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="timeInput" class="form-label">Agama</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="<?= $pegawai->AGAMA?>" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="websiteUrl" class="form-label">Status/Jenis Pegawai</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="<?= $pegawai->STATUS_PEGAWAI?>" disabled>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" value="PNS Pusat" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label for="leaveemails" class="form-label">TMT</label>
                        </div>
                        <div class="col-lg-4">
                          <div class="input-group">
                              <span class="input-group-text" id="basic-addon1">CPNS</span>
                              <input type="text" class="form-control" value="01/03/2019" disabled>
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">PNS</span>
                            <input type="text" class="form-control" value="01/03/2020" disabled>
                          </div>
                        </div>
                    </div>
                </form>
                <hr>
                <ul class="list-group list-group-flush border-dashed mb-0">
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
                <!--end tab-pane-->
                <div class="tab-pane" id="pendidikan" role="tabpanel">
                  <?= $this->include('manajemen/pegawai/profil/pendidikan2')?>
                </div>
                <div class="tab-pane" id="pekerjaan" role="tabpanel">
                  <?= $this->include('manajemen/pegawai/profil/pekerjaan2')?>
                </div>
                <div class="tab-pane" id="keluarga" role="tabpanel">
                  <?= $this->include('manajemen/pegawai/profil/keluarga')?>
                </div>
                <div class="tab-pane" id="lainnya" role="tabpanel">
                  <?= $this->include('manajemen/pegawai/profil/lainnya')?>
                </div>

                <div class="tab-pane" id="changePassword" role="tabpanel">
                  <?= $this->include('manajemen/pegawai/profil/change_password')?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end col-->
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
