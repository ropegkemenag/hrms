<?= $this->extend('anjababk/anjab/detail') ?>

<?= $this->section('detail') ?>
<div class="card">
  <div class="card-header align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">
      Kualifikasi Jabatan
    </h4>
  </div>
  <div class="card-body">
    <div class="alert alert-info alert-border-left alert-dismissible fade show" role="alert">
      <i class="ri-airplay-line me-3 align-middle fs-16"></i>
      Kualifikasi yang berkesesuian dengan tugas dan fungsi jabatan memuat minimal.
    </div>
    <form class="row g-3" action="" method="post">
      <div class="col-md-12">
        <label for="fullnameInput" class="form-label"><i class="mdi mdi-circle align-middle text-success me-2"></i> Pendidikan Formal</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Isi Pendidikan Formasi">
            <button class="btn btn-primary" type="button" id="button-addon2">Simpan</button>
        </div>
      </div>
    </form>
    <br>
    <form class="row g-3" action="" method="post">
      <div class="col-md-12">
        <label for="fullnameInput" class="form-label"><i class="mdi mdi-circle align-middle text-warning me-2"></i> Pendidikan dan pelatihan</label>
        <table class="table align-middle table-bordered table-centered table-nowrap mb-0">
          <tbody>
            <tr>
              <td>
                /themesbrand/skote-25867 <a href="javascript:void(0);"><i class="mdi mdi-trash-can-outline align-middle text-danger me-2"></i></a>
              </td>
            </tr><!-- end -->
            <tr>
              <td>
                /dashonic/chat-24518 <a href="javascript:void(0);"><i class="mdi mdi-trash-can-outline align-middle text-danger me-2"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tambah Pendidikan dan pelatihan">
            <button class="btn btn-primary" type="button" id="button-addon2">Tambah</button>
        </div>
      </div>
      <div class="col-md-12">
        <label for="fullnameInput" class="form-label"><i class="mdi mdi-circle align-middle text-danger me-2"></i> Pengalaman kerja</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Isi Pengalaman kerja">
            <button class="btn btn-primary" type="button" id="button-addon2">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
