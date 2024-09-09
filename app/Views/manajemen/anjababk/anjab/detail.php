<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">INFORMASI JABATAN <span class="text-warning"><?= strtoupper($jabatan->nama_jabatan) ?></span></h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Anjab ABK</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0);">Anjab</a></li>
              <li class="breadcrumb-item active"><?= $jabatan->nama_jabatan ?></li>
            </ol>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="list-group list-group-fill-success">
            <a href="<?= site_url('anjababk/anjab/detail/ikhtisar/'.encrypt($jabatan->id)) ?>" class="list-group-item list-group-item-action active"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Ikhtisar Jabatan</a>
            <a href="<?= site_url('anjababk/anjab/detail/kualifikasi/'.encrypt($jabatan->id)) ?>" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Kualifikasi Jabatan</a>
            <a href="<?= site_url('anjababk/anjab/detail/tugaspokok/'.encrypt($jabatan->id)) ?>" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Tugas Pokok</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Hasil Kerja</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Bahan Kerja</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Perangkat Kerja</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Tanggung Jawab</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Wewenang</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Korelasi Jabatan</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Kondisi Lingkungan Kerja</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Resiko Bahaya</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Syarat Jabatan</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Prestasi Kerja</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="ri-arrow-right-circle-fill align-middle me-2"></i>Kelas Jabatan</a>
          </div>
        </div>
        <div class="col-md-9">
          <?= $this->renderSection('detail') ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">

</script>
<?= $this->endSection() ?>
