<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Tabel Lokasi</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
              </li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped" id="table">
              <thead>
                <tr>
                  <th>KODE</th>
                  <th>LOKASI</th>
                </tr>
              </thead>
              <tbody>
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
  $('#table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '<?= site_url('master/umum/lokasi/data'); ?>'
  });
});
</script>
<?= $this->endSection() ?>
