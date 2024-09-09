<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Detail Satuan Kerja</h4>

          <div class="page-title-right">
            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="edit('<?= $detail->KODE_SATUAN_KERJA?>')">Edit</button>
            <button type="button" class="btn btn-success btn-sm">Kembali</button>
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
                  <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_SATUAN_KERJA?>" disabled>
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
                  <label for="nameInput" class="form-label">Unit Kerja</label>
                </div>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_UNIT_KERJA?>" disabled>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-3">
                  <label for="nameInput" class="form-label">Unit Organisasi</label>
                </div>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="kode" name="kode" value="<?= $detail->KODE_UNIT_ORGANISASI?>" disabled>
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
      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">SATUAN KERJA BAWAHAN</h5>
            </div>
        </div>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="30px">KODE SATKER</th>
              <th>SATUAN KERJA</th>
              <th>PROGRAM</th>
              <th>VIEW</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($satker as $row) {?>
              <tr>
                <td><?= $row->KODE_SATUAN_KERJA?></td>
                <td><?= $row->SATUAN_KERJA?></td>
                <td><?= $row->PROGRAM?></td>
                <td><a href="<?= site_url('master/umum/unor/detail/'.encrypt($row->KODE_SATUAN_KERJA))?>"> <i class="ri-search-eye-line"></i> </a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
    </div>
  </div>
  <!-- container-fluid -->
</div>

<div id="editmodal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Satuan Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('master/umum/unor/update/'.encrypt($detail->KODE_SATUAN_KERJA))?>" method="post" id="addform" enctype="multipart/form-data">
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
                  <label for="perihal" class="col-sm-3 col-form-label">KODE KUA</label>
                  <div class="col-sm-9">
                    <input type="text" name="perihal" class="form-control" id="unor" required>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">KODE UNIT KERJA</label>
                  <div class="col-sm-9">
                    <input type="text" name="unker" class="form-control" id="unker" required>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">KODE UNIT ORGANISASI</label>
                  <div class="col-sm-9">
                    <input type="text" name="unor" class="form-control" id="unor" required>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">ESELON</label>
                  <div class="col-sm-4">
                    <input type="text" name="lat" class="form-control" id="lat" required>
                    <span class="text-primary">ESELON</span>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="lon" class="form-control" id="lon" required>
                    <span class="text-primary">PEJABAT</span>
                  </div>
                </div>
                <!-- <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">KODE KUA</label>
                  <div class="col-sm-9">
                    <input type="text" name="perihal" class="form-control" id="perihal" required>
                    <span class="text-primary">Jika KUA</span>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">NPSN</label>
                  <div class="col-sm-9">
                    <input type="text" name="perihal" class="form-control" id="perihal" required>
                    <span class="text-primary">Jika Madrasah</span>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="perihal" class="col-sm-3 col-form-label">NSM</label>
                  <div class="col-sm-9">
                    <input type="text" name="perihal" class="form-control" id="perihal" required>
                    <span class="text-primary">Jika Madrasah</span>
                  </div>
                </div> -->
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
</script>
<?= $this->endSection() ?>
