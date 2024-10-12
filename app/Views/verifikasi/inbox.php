<?= $this->extend('verifikasi/template') ?>

<?= $this->section('style') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="pc-content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex mb-4 gap-4">
              <div class="avatar avatar-md">
                <div class="avatar-initial bg-label-primary rounded">
                  <i class="ti ti-users ti-30px"></i>
                </div>
              </div>
              <div>
                <h5 class="mb-0">
                  <span class="align-middle">Inbox Usul Peremajaan</span>
                </h5>
              </div>
            </div>
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
        <hr>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive text-nowrap">
              <table id="datatables" class="table table-bordered">
                <thead>
                  <tr role="row">
                    <th rowspan="2" class="" colspan="1" style="width: 371px;">Nama Lengkap</th>
                    <th colspan="16" scope="colgroup" class="text-center" rowspan="1">Perubahan data</th>
                    <th rowspan="2" class="" colspan="1" style="width: 34px;">Aksi</th>
                    <th rowspan="2" class="" colspan="1" style="width: 0px; display: none;">Satuan Kerja</th>
                    <th rowspan="2" class="" colspan="1" style="width: 0px; display: none;">Jabatan</th>
                    <th rowspan="2" class="" colspan="1" style="width: 0px; display: none;">Nip</th>
                  </tr>
                  <tr role="row">
                    <th class="" rowspan="1" colspan="1" style="width: 23px;">TK</th>
                    <th class="" rowspan="1" colspan="1" style="width: 26px;">AN</th>
                    <th class="" rowspan="1" colspan="1" style="width: 24px;">PD</th>
                    <th class="" rowspan="1" colspan="1" style="width: 25px;">DK</th>
                    <th class="" rowspan="1" colspan="1" style="width: 23px;">PK</th>
                    <th class="" rowspan="1" colspan="1" style="width: 23px;">JB</th>
                    <th class="" rowspan="1" colspan="1" style="width: 24px;">PA</th>
                    <th class="" rowspan="1" colspan="1" style="width: 22px;">TJ</th>
                    <th class="" rowspan="1" colspan="1" style="width: 25px;">PG</th>
                    <th class="" rowspan="1" colspan="1" style="width: 26px;">OR</th>
                    <th class="" rowspan="1" colspan="1" style="width: 23px;">KT</th>
                    <th class="" rowspan="1" colspan="1" style="width: 25px;">KG</th>
                    <th class="" rowspan="1" colspan="1" style="width: 19px;">KI</th>
                    <th class="" rowspan="1" colspan="1" style="width: 23px;">PP</th>
                    <th class="" rowspan="1" colspan="1" style="width: 24px;">PN</th>
                    <th class="" rowspan="1" colspan="1" style="width: 23px;">SR</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><!--end col-->
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  var table = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: '<?= site_url('verifikasi/getlist')?>',
            data: function (d) {
                d.jabatan = $('#jabatan').val(),
                d.unit = $('#unit').val();
            }
        },
        columns: [
            {data: 'NAMA_LENGKAP'},
            {data: 'TK'},
            {data: 'AN'},
            {data: 'PD'},
            {data: 'DK'},
            {data: 'PK'},
            {data: 'JB'},
            {data: 'PA'},
            {data: 'TJ'},
            {data: 'PG'},
            {data: 'OR'},
            {data: 'KT'},
            {data: 'KG'},
            {data: 'KI'},
            {data: 'PP'},
            {data: 'PN'},
            {data: 'SR'},
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
