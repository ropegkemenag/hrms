<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <div class="d-flex mb-4 gap-4">
            <div class="avatar avatar-md">
              <div class="avatar-initial bg-label-primary rounded">
                <i class="ti ti-lock ti-30px"></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">
                <span class="align-middle">Reset Password Pengguna</span>
              </h5>
              <span>-</span>
            </div>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                  <form class="" action="<?= site_url('manajemen/setting/user/search')?>" method="post">
                    <div class="input-group">
                      <input type="number" class="form-control" name="nip" value="<?= old('nip')?>" placeholder="NIP" aria-label="NIP" aria-describedby="button-addon2">
                      <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
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
      <div class="card card-body mt-5">
        <form class="" action="<?= site_url('manajemen/setting/user/changepassword')?>" method="post">
            <div class="row mb-6">
              <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">NIP</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="id" value="<?= $user->NIP?>" readonly>
                <input type="hidden" id="nip" name="nip" value="<?= encrypt($user->NIP)?>">
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-3 col-form-label text-sm-end" for="alignment-email">Nama</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="nameInput" value="<?= $user->NAMA?>" readonly>
              </div>
            </div>
            <div class="row mb-6 form-password-toggle">
              <label class="col-sm-3 col-form-label text-sm-end" for="alignment-password">Password Baru</label>
              <div class="col-sm-6">
                <div class="input-group input-group-merge">
                  <input type="password" id="alignment-password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="alignment-password2" />
                  <span class="input-group-text cursor-pointer" id="alignment-password2"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
            </div>
            <div class="pt-6">
          <div class="row justify-content-end">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary me-4">Simpan</button>
            </div>
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
