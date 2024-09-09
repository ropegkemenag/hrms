<?= $this->extend('kgb/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url()?>">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">KGB</a></li>
            <li class="breadcrumb-item" aria-current="page">Proses</li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="mb-0">Proses KGB</h2>
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
                  <th>TANGGAL BUAT</th>
                  <th>STATUS</th>
                  <th>OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($proses as $row) {?>
                  <tr>
                    <td><?= $row->nip?></td>
                    <td><?= $row->nama?></td>
                    <td><?= $row->jabatan?></td>
                    <td><?= $row->tgl_buat?></td>
                    <td><?= $row->kgb_status?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-danger">Delete</button>
                        <button type="button" class="btn btn-sm btn-primary">Cetak</button>
                        <button type="button" class="btn btn-sm btn-success">TTD</button>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#pegawai').DataTable();
  });

</script>
<?= $this->endSection() ?>
