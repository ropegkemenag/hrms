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
        Fitur ini untuk melakukan pemindahan satuan kerja pada SIMPEG.
        <ul>
          <li>Pastikan Pegawai telah menerima SK Mutasi</li>
          <li>Pegawai yang dipindahkan melalui fitur ini, tidak langsung berpindah ke Satuan Kerja tujuan </li>
          <li>Pegawai akan berpindah setelah Admin pada Satuan Kerja tujuan menerima melalui aplikasi yang sama </li>
          <li>Harap berhati-hati menggunakan fitur ini </li>
          <li>Pastikan pegawai yang diinputkan sama dengan data yang ada di SK</li>
        </ul>
      </div>

      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <form class="" action="<?= site_url('pemutakhiran/transfer/search')?>" method="post">
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3">
                      <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">Cari Pegawai</h6>
                        <input type="text" class="form-control" placeholder="Masukan NIP" name="nip" value="<?= old('nip')?>">
                      </div>
                      <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">&nbsp;</h6>
                        <input type="submit" name="submit" class="btn btn-primary" value="Cari">
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if($user)
    {
      ?>
      <div class="card card-body">
        <form class="" action="<?= site_url('pemutakhiran/transfer/save')?>" method="post" enctype="multipart/form-data">
          <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">NIP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nip" value="<?= $user->NIP_BARU?>" readonly>
                    <input type="hidden" id="satkerawal" name="satkerawal" value="<?= $user->KODE_SATKER_4?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">NAMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama" value="<?= $user->NAMA?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">SATUAN KERJA BARU</label>
                </div>
                <div class="col-lg-6">
                  <select class="form-select" name="satkertujuan">
                    <?php foreach ($satker as $row) {?>
                      <option value="<?= $row->KODE_SATUAN_KERJA ?>"><?= $row->SATUAN_KERJA ?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">SK MUTASI</label>
                </div>
                <div class="col-lg-6">
                  <input type="file" class="form-control" name="lampiran">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label"></label>
                </div>
                <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Simpan">
                </div>
            </div>
        </form>
      </div>
      <?php
    }
    ?>
    </div>
  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
