<?= $this->extend('layanan/template') ?>

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
            <h2 class="mb-0">Daftar Pegawai</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <table id="pegawai" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>JABATAN</th>
                <th>OPSI</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
