<?= $this->extend('kenaikanpangkat/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
            <li class="breadcrumb-item" aria-current="page">Sample Page</li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="mb-0">Kenaikan Pangkat - SIASN</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Usulan</h4>
            <div class="flex-shrink-0">
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="datatable table table-bordered table-hover mb-0">
            <thead>
              <tr>
                <th>Nama/NIP</th>
                <th>Satuan Kerja</th>
                <th>Golongan Ruang Awal</th>
                <th>Status Usulan</th>
                <th>Nomor Pertek</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div> <!-- end col -->
  </div>
</div>
<?= $this->endSection() ?>
