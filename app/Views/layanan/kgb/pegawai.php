<?= $this->extend('layanan/template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url()?>">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">KGB</a></li>
            <li class="breadcrumb-item" aria-current="page">Daftar Pegawai</li>
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
          <div class="table-responsive">
            <table id="pegawai" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>JABATAN</th>
                  <th>TMT</th>
                  <th>OPSI</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#pegawai').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: '<?= site_url('layanan/kgb/pegawai/getdata')?>',
        method: 'POST'
      },
      columns: [
        {data: 'NIP_BARU'},
        {data: 'NAMA'},
        {data: 'KETERANGAN'},
        {data: 'tmt'},
        {data: 'action', orderable: false},
      ]
    });
  });

</script>
<?= $this->endSection() ?>
