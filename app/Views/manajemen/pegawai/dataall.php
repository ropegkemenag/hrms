<?= $this->extend('manajemen/template') ?>

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
          <h4 class="mb-sm-0">Data Pegawai Kementerian Agama RI</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pegawai</a></li>
              <li class="breadcrumb-item active">Daftar Pegawai</li>
            </ol>
          </div>

        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Data Pegawai</h5>
          </div>
          <div class="card-body">
            <form action="javascript:void(0);" class="row g-3">
                <div class="col-md-4">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <select id="jabatan" name="jabatan" class="form-select">
                      <option value="">Semua Jabatan</option>
                      <?php foreach ($jabatan as $row) {
                        echo '<option value="'.$row->LEVEL_JABATAN.'">'.$row->LEVEL_JABATAN.'</option>';
                      }  ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="jenis" class="form-label">Jenis Pegawai</label>
                    <select id="jenis" class="form-select">
                        <option value="">Semua</option>
                        <option value="CPNS">CPNS</option>
                        <option value="PNS">PNS</option>
                        <option value="PPPK">PPPK</option>
                        <option value="Non">NON ASN</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="unit" class="form-label">Unit Kerja</label>
                    <select id="unit" class="form-select">
                      <option value="">Semua Unit</option>
                      <?php foreach ($unit as $row) {
                        echo '<option value="'.$row->KODE_SATUAN_KERJA.'">'.$row->SATUAN_KERJA.'</option>';
                      }  ?>
                    </select>
                </div>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-body">

            <table id="datatables" class="display table table-bordered dt-responsive fonttab" style="width:100%">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>NIP BARU</th>
                  <th>NAMA</th>
                  <th>JABATAN</th>
                  <th>UNIT KERJA</th>
                  <th>UNIT KERJA ATASAN</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <th>NIP</th>
                  <th>NIP BARU</th>
                  <th>NAMA</th>
                  <th>JABATAN</th>
                  <th>UNIT KERJA</th>
                  <th>UNIT KERJA ATASAN</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div><!--end col-->
    </div>
  </div>
  <!-- container-fluid -->
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

  var table = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: '<?= site_url('manajemen/pegawai/getdataall')?>',
            data: function (d) {
                d.jabatan = $('#jabatan').val(),
                d.jenis = $('#jenis').val();
                d.unit = $('#unit').val();
            }
        },
        columns: [
            {data: 'NIP'},
            {data: 'NIP_BARU'},
            {data: 'NAMA_LENGKAP'},
            {data: 'TAMPIL_JABATAN'},
            {data: 'SATKER_2'},
            {data: 'SATKER_3'},
            {data: 'action', orderable: false}
        ]
    });

  $(".select2").select2()
  $('#satker1').on('change', function(event) {
    getsatker($('#satker1').val());
    $('#selectsatker2').css('display','');
  });

  $('#satker2').on('change', function(event) {
    getsatker($('#satker2').val());
    $('#selectsatker3').css('display','');
  });

  $('#jabatan').change(function(event) {
        table.ajax.reload();
    });

  $('#jenis').change(function(event) {
        table.ajax.reload();
    });

  $('#unit').change(function(event) {
        table.ajax.reload();
    });
});

function getsatker($id) {
  axios.get('/pegawai/getcountsatker/'+$id)
  .then(function (response) {
    $('#jumlahpegawai').html(response.data);
  });
}
</script>
<?= $this->endSection() ?>
