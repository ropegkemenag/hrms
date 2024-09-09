<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">PENGATURAN - LOKASI LOKASI PEGAWAI</h4>
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAccess">
                  Tambah Data
                </button>
              </li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="alert alert-danger mb-xl-0" role="alert">
          <strong> Harap dibaca! </strong> Fitur ini digunakan untuk mengakomodir Pegawai yang berlokasi di luar Unit
          Kerja Kementerian Agama atau Unit Kerja yang memiliki lebih dari 1 gedung. Dengan catatan, gedung utama tetap
          ditentukan lokasinya dan Pegawai yang berada pada gedung lainnya didaftarkan melalui fitur ini.
        </div>
        <div class="card">
          <div class="card-body table-responsive">
            <table class="table table-bordered dt-responsive nowrap table-striped align-middle datatable">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>LATITUDE</th>
                  <th>LONGITUDE</th>
                  <th>OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pegawai as $row) { ?>
                  <tr>
                    <td>
                      <?= $row->NIP_BARU ?>
                    </td>
                    <td>
                      <?= $row->NAMA ?>
                    </td>
                    <td>
                      <?= $row->LAT ?>
                    </td>
                    <td>
                      <?= $row->LON ?>
                    </td>
                    <td><a href="https://www.google.com/maps/search/?api=1&query=<?= $row->LAT ?>%2C<?= $row->LON ?>"
                        target="_blank" class="btn btn-outline-danger btn-sm btn-label">
                        <div class="d-flex">
                          <div class="flex-shrink-0">
                            <i class=" ri-map-pin-line label-icon align-middle fs-16 me-2"></i>
                          </div>
                          <div class="flex-grow-1">
                            View Map
                          </div>
                        </div>
                      </a>
                      <a href="<?= site_url('satker/lokasi/pegawai/delete/'.encrypt($row->NIP_BARU)) ?>" onclick="return confirm('Data akan dihapus?')" class="btn btn-outline-primary btn-sm">Delete</a>
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

<div id="addAccess" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static"
  aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="myModalLabel">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="" id="addpegawai" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="jumlah" class="form-label">NIP</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="nip" id="nip">
                  <button class="btn btn-outline-success" type="button" id="button-addon2"
                    onclick="checknip()">Cek</button>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="nama" class="form-label">NAMA</label>
                <input type="text" class="form-control" name="nama" id="nama" readonly>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="gedung" class="form-label">NAMA GEDUNG</label>
                <input type="text" class="form-control" name="gedung" id="gedung">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="firstNameinput" class="form-label">KOORDINAT</label>
                <div class="input-group">
                  <input type="text" class="form-control" aria-describedby="parse" id="latlon">
                  <button class="btn btn-outline-success" type="button" id="parse"
                    onclick="parselatlon()">parsing</button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" placeholder="Latitude" id="latitude" name="latitude">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" placeholder="Longitude" id="longitude" name="longitude">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="$('#addpegawai').submit()">Simpan</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

  function parselatlon() {
    var text = $("#latlon").val();
    var str = text.split(", ");
    $('#latitude').val(str[0]);
    $('#longitude').val(str[1]);
  }

  function checknip() {
    axios.get('<?= site_url('ajax/pegawai') ?>/'+$ ( '#nip').val())
      .then(function (response) {
        var data = response.data[0];

        $('#nama').val(data.NAMA_LENGKAP);
        $('#jabatan').val(data.TAMPIL_JABATAN);
        $('#phone').val(data.NO_HP);
      });
  }
</script>
<?= $this->endSection() ?>
