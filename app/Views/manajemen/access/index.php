<?= $this->extend('manajemen/template') ?>

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
<div class="page-content">
  <div class="row mb-5">
    <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <div class="d-flex mb-4 gap-4">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ti ti-download ti-30px"></i>
            </div>
          </div>
          <div>
            <h5 class="mb-0">
              <span class="align-middle">Akses Pengguna</span>
            </h5>
            <span>-</span>
          </div>
        </div>

        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAccess">
                Tambah Akses
            </button></li>
          </ol>
        </div>

      </div>
    </div>

  </div>
    <div class="row">
      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered datatable">
                <thead class="table-dark">
                  <tr>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>APP</th>
                    <th>ROLE</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($access as $row) {?>
                    <tr>
                      <td><?= $row->NIP?></td>
                      <td><?= $row->NAMA_LENGKAP?></td>
                      <td><?= $row->APP_NAME?></td>
                      <td><?= $row->REMARK?></td>
                      <td><a href="<?= site_url('manajemen/access/delete/'.$row->ID)?>" class="btn btn-danger btn-sm" onclick="return confirm('Akses akan dihapus?')">Delete</a></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div id="addAccess" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="myModalLabel">Tambah Akses Aplikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="" id="addadmin" method="post">
          <div class="mb-3">
            <label for="jumlah" class="form-label">NIP</label>
            <div class="input-group">
                <input type="text" class="form-control" name="nip" id="nip">
                <button class="btn btn-outline-success" type="button" id="button-addon2" onclick="checknip()">Cek</button>
            </div>
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">NAMA</label>
            <input type="text" class="form-control" name="nama" id="nama" readonly>
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">JABATAN</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" readonly>
          </div>
          <div class="mb-3">
            <label for="jumlah" class="form-label">NO HP</label>
            <input type="text" class="form-control" name="phone" id="phone" readonly>
          </div>
          <div class="mb-3">
            <label for="unorid" class="form-label">SATKER KELOLA</label>
            <select class="form-select" id="satker" name="satker">
              <option value="">--Pilih Satuan Kerja--</option>
              <?php foreach ($satker as $row) {
                echo '<option value="'.encrypt($row->KODE_SATUAN_KERJA).'">'.$row->SATUAN_KERJA.'</option>';
              } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="unorid" class="form-label">APLIKASI</label>
            <select class="form-select" id="app" name="app">
              <option value="">--Pilih Apps--</option>
              <?php foreach ($apps as $row) {
                echo '<option value="'.$row->ID.'">'.$row->APP_NAME.'</option>';
              } ?>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="$('#addadmin').submit()">Simpan</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script>
$(document).ready(function() {
  $('.datatable').DataTable();
});

  function checknip(){
    axios.get('<?= site_url('manajemen/ajax/pegawai')?>/'+$('#nip').val())
    .then(function (response) {
      var data = response.data[0];

      $('#nama').val(data.NAMA_LENGKAP);
      $('#jabatan').val(data.TAMPIL_JABATAN);
      $('#phone').val(data.NO_HP);
    });
  }
</script>
<?= $this->endSection() ?>
