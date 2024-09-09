<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Data User</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>

        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Data Pengguna SIMPEG</h5>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th width="20%">Username</th>
                <td><?= $user->USERNAME?></td>
              </tr>
              <tr>
                <th>NIP</th>
                <td><?= $user->NIP?></td>
              </tr>
              <tr>
                <th>Nama</th>
                <td><?= $user->NAMA?></td>
              </tr>
              <tr>
                <th>Jabatan</th>
                <td><?= $user->KETERANGAN?></td>
              </tr>
              <tr>
                <th>Satuan Kerja</th>
                <td>-</td>
              </tr>
              <tr>
                <th>Kunci Login</th>
                <td><?= $user->LOCKED?></td>
              </tr>
              <tr>
                <th>Satker Kelola</th>
                <td><?= $user->SATKER_KELOLA?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Role Akses</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Group <span class="badge bg-secondary"><?= $user->KODE_GRUP?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Hak Update <span class="badge bg-secondary"><?= $user->HAK_UPDATE?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Roles <span class="badge bg-secondary"><?= $user->ROLES?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Tipe User <span class="badge bg-secondary"><?= $user->TIPE_USER?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Status User <span class="badge bg-secondary"><?= $user->STATUS_USER?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Akses Indisipliner <span class="badge bg-secondary"><?= $user->AKSES_INDISIPLIN?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Tambah Pegawai <span class="badge bg-secondary"><?= $user->TAMBAH_PEGAWAI?></span>
            </li>
          </ul>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Log</h5>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  Dibuat <span class="badge bg-primary"><?= $user->TIME_ADD?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  Diubah <span class="badge bg-primary"><?= $user->TIME_UPDATE?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  Tanggal Login <span class="badge bg-primary"><?= $user->LAST_LOGIN?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  Tgl Ubah Password <span class="badge bg-primary"><?= $user->PWD_LAST_CHANGE?></span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
