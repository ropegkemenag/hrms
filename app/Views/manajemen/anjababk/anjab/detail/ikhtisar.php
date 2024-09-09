<?= $this->extend('anjababk/anjab/detail') ?>

<?= $this->section('detail') ?>
<div class="card">
  <div class="card-header align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">
      Ikhtisar Jabatan
    </h4>
  </div>
  <div class="card-body">
    <form class="row g-3" action="<?= site_url('anjababk/anjab/ikhtisar/save') ?>" method="post">
      <div class="col-md-12">
        <div class="alert alert-info alert-border-left alert-dismissible fade show" role="alert">
            <i class="ri-airplay-line me-3 align-middle fs-16"></i><strong>Iktisar Jabatan</strong>
            Merupakan keseluruhan tugas jabatan yang ada dan disusun dalam 1 (satu) kalimat. Iktisar jabatan dirumuskan dari tugas yang paling inti atau paling esensi dalam jabatan yang bersangkutan.
        </div>
        <textarea name="ikhtisar" class="form-control" rows="4" placeholder="Isikan Ikhtisar Jabatan dengan lengkap"><?= $jabatan->ikhtisar_jabatan ?></textarea>
        <input type="hidden" name="id" value="<?= $jabatan->id ?>">
      </div>
      <div class="text-end">
          <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
