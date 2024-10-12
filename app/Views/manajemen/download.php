<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">

    <div class="row">
      <div class="col-12">
        <div class="d-flex mb-4 gap-4">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ti ti-download ti-30px"></i>
            </div>
          </div>
          <div>
            <h5 class="mb-0">
              <span class="align-middle">Download Data</span>
            </h5>
            <span>-</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xxl-12">
        <div class="card">
          <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
            <thead class="table-dark">
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
                <td><a href="<?= site_url('manajemen/download/pegawai')?>" class="btn btn-sm btn-primary"><i class="ri-download-cloud-2-line"></i> Download</a></td>
              </tr>
              <tr>
                <td><b>Data Unit Organisasi</b></td>
                <td>Data Referensi Unit Organisasi</td>
                <td>.xlsx</td>
                <td><a href="<?= site_url('manajemen/download/unor')?>" class="btn btn-sm btn-primary"><i class="ri-download-cloud-2-line"></i> Download</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
