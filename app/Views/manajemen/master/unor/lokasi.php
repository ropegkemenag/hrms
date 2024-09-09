<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">PENGATURAN - LOKASI SATUAN KERJA</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">

            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body table-responsive">
            <table class="table table-bordered dt-responsive nowrap table-striped align-middle datatable">
                <thead>
                    <tr>
                        <th>SATUAN KERJA</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($satker as $row) {?>
                        <tr>
                            <td><a href="<?= site_url('satker/lokasi/'.encrypt($row->KODE_SATUAN_KERJA)) ?>"><?= $row->SATUAN_KERJA ?></a> </td>
                            <td><?= $row->LAT ?></td>
                            <td><?= $row->LON ?></td>
                            <td><a href="https://www.google.com/maps/search/?api=1&query=<?= $row->LAT ?>%2C<?= $row->LON ?>" target="_blank" class="btn btn-outline-danger btn-sm btn-label"><div class="d-flex">
                                  <div class="flex-shrink-0">
                                      <i class=" ri-map-pin-line label-icon align-middle fs-16 me-2"></i>
                                  </div>
                                  <div class="flex-grow-1">
                                      View Map
                                  </div>
                              </div></a>
                              <a href="javascript:;" onclick="edit('<?= encrypt($row->KODE_SATUAN_KERJA) ?>')" class="btn btn-outline-primary btn-sm">Ubah</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="editmodal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Ubah Lokasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="save">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="firstNameinput" class="form-label">Satuan Kerja</label>
                            <input type="text" class="form-control" id="satker" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="firstNameinput" class="form-label">Koordinat</label>
                            <div class="input-group">
                                <input type="text" class="form-control" aria-describedby="parse" id="latlon">
                                <button class="btn btn-outline-success" type="button" id="parse" onclick="parselatlon()">parsing</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstNameinput" class="form-label">Latitude</label>
                            <input type="text" class="form-control" placeholder="Latitude" id="latitude" name="latitude">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastNameinput" class="form-label">Longitude</label>
                            <input type="text" class="form-control" placeholder="Longitude" id="longitude" name="longitude">
                        </div>
                    </div>
                    <input type="hidden" name="kode" id="kode">
                  </div>
                </form>
                <p class="text-muted">Panduan:
                  <ul>
                    <li>Buka <a href="https://www.google.com/maps" target="_blank">Google Maps</a></li>
                    <li>Cari lokasi Gedung berada</li>
                    <li>Klik Kanan pada titik yang sudah sesuai</li>
                    <li>klik pada koordinat yang muncul di menu google maps.</li>
                    <li>Paste/tempel pada kolom koordinat</li>
                  </ul>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" onclick="$('#save').submit()">Simpan</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

  function parselatlon()
  {
    var text = $("#latlon").val();
      var str = text.split(", ");
      $('#latitude').val(str[0]);
      $('#longitude').val(str[1]);
  }

  function edit(id){
    axios.get('<?= site_url('ajax/getlokasi')?>/'+id)
    .then(function (response) {
      var data = response.data[0];

      $('#latitude').val(data.LAT);
      $('#longitude').val(data.LON);
      $('#satker').val(data.SATUAN_KERJA);
      $('#kode').val(id);
    });
    $('#editmodal').modal('show');
  }
</script>
<?= $this->endSection() ?>
