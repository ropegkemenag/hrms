<?= $this->extend('template') ?>

<?= $this->section('style') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Data User</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>

        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Data Pengguna SIMPEG</h5>
          </div>
          <div class="card-body">
            <table id="datatables" class="display table table-bordered dt-responsive" style="width:100%">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>KETERANGAN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>KETERANGAN</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?= site_url('master/administrasi/user/getdata')?>',
        columns: [
            {data: 'NIP'},
            {data: 'NAMA'},
            {data: 'KETERANGAN'},
            {data: 'action', orderable: false}
        ]
    });

  $(".select2").select2();
});

</script>
<?= $this->endSection() ?>
