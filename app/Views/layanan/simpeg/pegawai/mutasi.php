<?= $this->extend('simpeg/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
            <li class="breadcrumb-item" aria-current="page">Sample Page</li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="mb-0">Daftar Mutasi Pegawai - Keluar</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-success mb-xl-0" role="alert">
        <strong> Harap dibaca! </strong><br>
        Fitur ini untuk melakukan pemindahan satuan kerja pada SIMPEG.
        <ul>
          <li>Pastikan Pegawai telah menerima SK Mutasi</li>
          <li>Pegawai yang dipindahkan melalui fitur ini, tidak langsung berpindah ke Satuan Kerja tujuan </li>
          <li>Pegawai akan berpindah setelah Admin pada Satuan Kerja tujuan menerima melalui aplikasi yang sama </li>
          <li>Harap berhati-hati menggunakan fitur ini </li>
          <li>Pastikan pegawai yang diinputkan sama dengan data yang ada di SK</li>
        </ul>
      </div>
      <div class="card mt-3">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Usulan</h4>
            <div class="flex-shrink-0">
                <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addmodal">Buat Usul</button> -->
                <a href="javascript:;" type="button" class="btn btn-primary waves-effect waves-light" onclick="add()">Buat Usul</a>
            </div>
        </div>
        <div class="card-body">
          <table class="datatable table table-bordered dt-responsive w-100">
            <thead>
              <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Satker Tujuan</th>
                <th>Status</th>
                <th>Opsi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($usul as $row) {?>
              <tr>
                <td><?= $row->nip?></td>
                <td><?= $row->nama?></td>
                <td><?= $row->satker_tujuan_nama?></td>
                <td>
                  <?= usul_status($row->status)?>
                  <?php
                  if($row->status == 8){
                    echo '<p>'.$row->keterangan.'</p>';
                  }
                  ?>
                </td>
                <td>
                  <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                    <a href="https://ropeg.kemenag.go.id:9000/layanan/dokumen/docu.12.<?= $row->nip?>.pdf" type="button" class="btn btn-primary btn-sm" target="_blank">Lihat SK</a>
                      <?php if($row->status == 0){?>
                      <a href="<?= site_url('simpeg/pegawaibaru/delete/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" type="button" class="btn btn-danger">Delete</a>
                      <?php }?>
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

<div id="addmodal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Buat Usulan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('simpeg/mutasi/addusul') ?>" method="post" id="addform" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                    <input type="number" class="form-control" placeholder="Cari NIP" name="nip" id="nip" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="searchpegawai()">Cari</button>
                  </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" value="" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Nomor SK</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomor_sk" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Tanggal SK</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tanggal_sk" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">TMT</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tmt" value="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="unor" class="col-sm-3 col-form-label">Satuan Kerja Baru</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="satkertujuan" id="satkertujuan">
                      <?php foreach ($satker as $row) {?>
                        <option value="<?= $row->KODE_SATUAN_KERJA ?>"><?= $row->SATUAN_KERJA ?></option>
                      <?php } ?>
                    </select>
                    <input type="hidden" name="satkertujuannama" id="satkertujuannama" value="">
                  </div>
                </div>
                <div class="row">
                  <label for="unor" class="col-sm-3 col-form-label">Lampiran SK</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" name="dokumen" value="">
                    <p>File dalam format pdf</p>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
var siteurl = '<?= site_url()?>';

function add(id) {
  // alert('Memuat...');
  $('#addmodal').modal('show');
}

function searchpegawai() {
  $('#nama').val();
  axios.get('<?= site_url() ?>ajax/getpegawai/'+$('#nip').val())
  .then(function (response) {
    // handle success
    console.log(response.data);
    $('#nama').val(response.data.data.NAMA_LENGKAP);
  })
  .catch(function (error) {
    alert('Data tidak ditemukan');
  })
  .finally(function () {
    // always executed
  });
}

$(document).ready(function() {
  $('#satkertujuan').on('change',function(event) {
    $('#satkertujuannama').val($("#satkertujuan option:selected").text());
  });
});


</script>
<?= $this->endSection() ?>
