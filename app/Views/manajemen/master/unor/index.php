<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">SATUAN KERJA</h4>

          <div class="page-title-right">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">Tambah Satuan Kerja</button>
          </div>

        </div>
      </div>

    <div class="card card-body bg-soft-primary">
      <form class="" action="" method="post">
        <div class="row">
          <div class="col-lg-6">
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Kode</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_SATKER_NEW?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Satuan Kerja</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->SATUAN_KERJA?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Keterangan Satuan Kerja</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KETERANGAN_SATUAN_KERJA?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Unit Organisasi</label>
              </div>
              <div class="col-lg-9">
                <select class="form-select" name="unor" disabled>
                  <option value="">-</option>
                  <?php foreach ($parent as $row) {
                    $select = ($detail->KODE_UNIT_ORGANISASI_NEW == $row->KODE_SATKER_NEW)?'selected':'';
                    echo '<option value="'.$row->KODE_SATKER_NEW.'" '.$select.'>'.$row->SATUAN_KERJA.'</option>';
                  } ?>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Unit Kerja</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_UNIT_KERJA?>" disabled>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Koordinat</label>
              </div>
              <div class="col-lg-4">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->LAT?>" disabled>
              </div>
              <div class="col-lg-4">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->LON?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Group Satuan Kerja</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_GRUP_SATUAN_KERJA?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Lokasi</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_LOKASI?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="border border-dashed"></div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Dibuat Oleh</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->USER_ADD?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">Dirubah Oleh</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->USER_UPDATE?>" disabled>
              </div>
            </div>
          </div>
        </div>
      </form>
  </div>

      <div class="card card-body">
        <table class="table table-bordered table-striped datatable">
          <thead>
            <tr>
              <!-- <th width="30px">KODE SATKER</th> -->
              <th>SATUAN KERJA</th>
              <th>KETERANGAN</th>
              <th>VIEW</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($satker as $row) {?>
              <tr>
                <!-- <td><?= $row->KODE_SATKER_NEW?></td> -->
                <td><a href="<?= site_url('master/umum/unor/index/'.encrypt($row->KODE_SATKER_NEW))?>" class="text-bold"><?= $row->SATUAN_KERJA?></a></td>
                <td><?= $row->KETERANGAN_SATUAN_KERJA?></td>
                <td><a href="javascript:;" class="btn btn-success btn-sm" onclick="edit('<?= $row->KODE_SATKER_NEW?>')"> Edit </a> <a href="<?= site_url('master/umum/unor/delete/'.encrypt($row->KODE_SATKER_NEW))?>" class="btn btn-danger btn-sm" onclick="return confirm('Unor akan dihapus?')"> Delete </a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
    </div>
  </div>
</div>

<div id="editmodal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Satuan Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('master/umum/unor/update/'.encrypt($detail->KODE_SATKER_NEW))?>" method="post" id="editform">
                <div class="row mb-4">
                  <label for="nomor_usul" class="col-sm-3 col-form-label">Satuan Kerja</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" id="nama" required>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="tanggal_surat" class="col-sm-3 col-form-label">Keterangan Satuan Kerja</label>
                  <div class="col-sm-9">
                    <textarea name="keterangan" class="form-control" rows="3" id="keterangan"></textarea>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">PROGRAM</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="program" id="program">
                      <option value="">~Pilih Program~</option>
                      <option value="Dukungan Manajemen">Dukungan Manajemen</option>
                      <option value="Kerukunan Umat Beragama">Kerukunan Umat Beragama</option>
                      <option value="Pendidikan Islam">Pendidikan Islam</option>
                      <option value="Penyelenggaraan Haji dan Umrah">Penyelenggaraan Haji dan Umrah</option>
                      <option value="Bimbingan Masyarakat Islam">Bimbingan Masyarakat Islam</option>
                      <option value="Bimbingan Masyarakat Kristen">Bimbingan Masyarakat Kristen</option>
                      <option value="Bimbingan Masyarakat Katolik">Bimbingan Masyarakat Katolik</option>
                      <option value="Bimbingan Masyarakat Buddha">Bimbingan Masyarakat Buddha</option>
                      <option value="Bimbingan Masyarakat Hindu">Bimbingan Masyarakat Hindu</option>
                      <option value="Bimbingan Masyarakat Khonghucu">Bimbingan Masyarakat Khonghucu</option>
                      <option value="Litbang dan Diklat">Litbang dan Diklat</option>
                      <option value="Penyelenggara Jaminan Produk Halal">Penyelenggara Jaminan Produk Halal</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">UNIT ORGANISASI</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="unor" id="addunor">
                      <?php foreach ($parent as $row) {
                        echo '<option value="'.$row->KODE_SATKER_NEW.'">'.$row->SATUAN_KERJA.'</option>';
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unker" class="col-sm-3 col-form-label">UNIT KERJA</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="unker" id="unker">
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="grup" class="col-sm-3 col-form-label">KELOMPOK SATUAN KERJA</label>
                  <div class="col-sm-9">
                    <select class="form-select" data-choices name="grup" id="grup">
                      <?php foreach ($grupsatker as $row) {
                        echo '<option value="'.$row->KODE_GRUP_SATUAN_KERJA.'">'.$row->GRUP_SATUAN_KERJA.'</option>';
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="eselon" class="col-sm-3 col-form-label">PEJABAT</label>
                  <div class="col-sm-4">
                    <span class="text-primary">ESELON</span>
                    <select class="form-control" name="eselon" id="eselon">
                      <option value="">Non Eselon</option>
                      <option value="I.a">I.a</option>
                      <option value="I.b">I.b</option>
                      <option value="II.a">II.a</option>
                      <option value="II.b">II.b</option>
                      <option value="III.a">III.a</option>
                      <option value="III.b">III.b</option>
                      <option value="IV.a">IV.a</option>
                      <option value="IV.b">IV.b</option>
                      <option value="V.a">V.a</option>
                      <option value="V.b">V.b</option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <span class="text-primary">PEJABAT</span>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#editform').submit()">Kirim</button>
            </div>
        </div>
    </div>
</div>

<div id="addmodal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Buat Satuan Kerja Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('master/umum/unor/add/'.encrypt($detail->KODE_SATKER_NEW))?>" method="post" id="addform">
                <div class="row mb-4">
                  <label for="nomor_usul" class="col-sm-3 col-form-label">Satuan Kerja</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" id="nama" required>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="tanggal_surat" class="col-sm-3 col-form-label">Keterangan Satuan Kerja</label>
                  <div class="col-sm-9">
                    <textarea name="keterangan" class="form-control" rows="3" id="keterangan"></textarea>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="program" class="col-sm-3 col-form-label">PROGRAM</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="program" id="program">
                      <option value="">~Pilih Program~</option>
                      <option value="Dukungan Manajemen">Dukungan Manajemen (Sekretariat Jenderal)</option>
                      <option value="Kerukunan Umat Beragama">Kerukunan Umat Beragama</option>
                      <option value="Pendidikan Islam">Pendidikan Islam</option>
                      <option value="Penyelenggaraan Haji dan Umrah">Penyelenggaraan Haji dan Umrah</option>
                      <option value="Bimbingan Masyarakat Islam">Bimbingan Masyarakat Islam</option>
                      <option value="Bimbingan Masyarakat Kristen">Bimbingan Masyarakat Kristen</option>
                      <option value="Bimbingan Masyarakat Katolik">Bimbingan Masyarakat Katolik</option>
                      <option value="Bimbingan Masyarakat Buddha">Bimbingan Masyarakat Buddha</option>
                      <option value="Bimbingan Masyarakat Hindu">Bimbingan Masyarakat Hindu</option>
                      <option value="Bimbingan Masyarakat Khonghucu">Bimbingan Masyarakat Khonghucu</option>
                      <option value="Litbang dan Diklat">Litbang dan Diklat</option>
                      <option value="Penyelenggara Jaminan Produk Halal">Penyelenggara Jaminan Produk Halal</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label">UNIT ORGANISASI</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="unor" id="unor">
                      <?php foreach ($parent as $row) {
                        echo '<option value="'.$row->KODE_SATKER_NEW.'">'.$row->SATUAN_KERJA.'</option>';
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unker" class="col-sm-3 col-form-label">UNIT KERJA</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="unker" id="addunker">
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="grup" class="col-sm-3 col-form-label">KELOMPOK SATUAN KERJA</label>
                  <div class="col-sm-9">
                    <select class="form-select" data-choices name="grup" id="grup">
                      <?php foreach ($grupsatker as $row) {
                        echo '<option value="'.$row->KODE_GRUP_SATUAN_KERJA.'">'.$row->GRUP_SATUAN_KERJA.'</option>';
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="eselon" class="col-sm-3 col-form-label">PEJABAT</label>
                  <div class="col-sm-4">
                    <span class="text-primary">ESELON</span>
                    <select class="form-control" name="eselon" id="eselon">
                      <option value="">Non Eselon</option>
                      <option value="I.a">I.a</option>
                      <option value="I.b">I.b</option>
                      <option value="II.a">II.a</option>
                      <option value="II.b">II.b</option>
                      <option value="III.a">III.a</option>
                      <option value="III.b">III.b</option>
                      <option value="IV.a">IV.a</option>
                      <option value="IV.b">IV.b</option>
                      <option value="V.a">V.a</option>
                      <option value="V.b">V.b</option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <span class="text-primary">PEJABAT</span>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#addform').submit()">Kirim</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
var siteurl = '<?= site_url()?>/';

function edit(id) {
  alert('Loading...');
  axios.get('<?= site_url()?>/master/umum/unor/getdata/'+id).then(function (response) {
    $('#nama').val(response.data.SATUAN_KERJA);
    $('#keterangan').val(response.data.KETERANGAN_SATUAN_KERJA);
    $('#program').val(response.data.PROGRAM);
    $('#lat').val(response.data.LAT);
    $('#lon').val(response.data.LON);

    $('#editmodal').modal('show');
  });
}

$(document).ready(function() {
  $('#unor').on('change', function(event) {
    var text = $( "#unor option:selected" ).text();
    $('#unker').load('<?= site_url()?>/master/umum/unor/getunitkerja/'+$('#unor').val()+'/'+text);
  });

  $('#addunor').on('change', function(event) {
    var text = $( "#addunor option:selected" ).text();
    $('#addunker').load('<?= site_url()?>/master/umum/unor/getunitkerja/'+$('#addunor').val()+'/'+text);
  });
});

</script>
<?= $this->endSection() ?>
