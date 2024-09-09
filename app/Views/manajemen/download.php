<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Download Data</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">HRMS</a></li>
              <li class="breadcrumb-item active">Download</li>
            </ol>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="card">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Data</h4>
          </div>
          <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
            <thead class="text-muted table-light">
              <tr>
                <th scope="col">Data</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Format</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><b>Data Kepegawaian</b></td>
                <td>Data Seluruh Pegawai pada Satuan Kerja. Data yang diunduh adalah data terbaru.</td>
                <td>.xlsx</td>
                <td><a href="<?= site_url('download/pegawai')?>" class="btn btn-sm btn-success"><i class="ri-download-cloud-2-line"></i> Download</a></td>
              </tr>
              <tr>
                <td><b>Data Unit Organisasi</b></td>
                <td>Data Referensi Unit Organisasi</td>
                <td>.xlsx</td>
                <td><a href="<?= site_url('download/unor')?>" class="btn btn-sm btn-success"><i class="ri-download-cloud-2-line"></i> Download</a></td>
              </tr>
            </tbody>
          </table>
        </div><!-- end card -->
      </div><!-- end col -->
    </div>

  </div>
  <?= $this->endSection() ?>
