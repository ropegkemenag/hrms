<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Cari Pegawai</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
              <li class="breadcrumb-item active">Pengaturan User</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <form class="" action="<?= site_url('setting/user/search')?>" method="post">
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3">
                      <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">NIP</h6>
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
      <div class="card card-body">
        <?php
          if($user)
          {
        ?>
        <form class="" action="<?= site_url('setting/user/changepassword')?>" method="post">
          <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">NIP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="id" value="<?= $user->NIP?>" readonly>
                    <input type="hidden" id="nip" name="nip" value="<?= encrypt($user->NIP)?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">NAMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="nameInput" value="<?= $user->NAMA?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="nameInput" class="form-label">PASSWORD BARU</label>
                </div>
                <div class="col-lg-6">
                    <input type="password" class="form-control" id="nameInput" name="password">
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
        <?php
          }
        ?>
      </div>
    </div>
  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
