<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Transfer Pegawai Antar Satuan Kerja</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
              <li class="breadcrumb-item active">Pengaturan User</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="alert alert-danger mb-xl-0" role="alert">
        <strong> Harap dibaca! </strong><br>
        <ul>
          <li>Pastikan SK yang dilampirkan sesuai</li>
          <li>Klik Terima untuk menyetujui</li>
          <li>Klik Tolak untuk menolak</li>
          <li>Jika pegawai diterima, maka otomatis akan menambahkan riwayat pekerjaan pada pegawai</li>
          <li>Silahkan Admin melakukan penyempurnaan data pada aplikasi SIMPEG</li>
        </ul>
      </div>

      <div class="card card-body">
        <form class="" action="" method="post">
          <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">NIP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nip" value="<?= $usul->nip?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">NAMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama" value="<?= $usul->nama?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">SK MUTASI</label>
                </div>
                <div class="col-lg-6">
                  <a href="https://ropeg.kemenag.go.id:9000/hrms/usul/transfer/<?= $usul->lampiran?>" class="btn btn-success" target="_blank">Lihat SK</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label"></label>
                </div>
                <div class="col-lg-6">
                  <a href="<?= site_url('pemutakhiran/transfer/approve/'.encrypt($usul->id))?>" class="btn btn-primary" onclick="return confirm('Usulan Diterima?')">Terima</a> <a href="#" class="btn btn-danger">Tolak</a>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
