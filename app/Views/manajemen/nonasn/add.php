<?= $this->extend('manajemen/template') ?>

<?= $this->section('style') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Tambah Data Non ASN</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="<?= site_url('nonasn/add')?>" class="btn btn-success text-white">Kembali</a></li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card card-body">
          <form action="" method="post">
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nik" class="form-label">NIK</label>
              </div>
              <div class="col-lg-9">
                <input type="number" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan (No. KTP)" value="<?= old('nik') ?>" required>
                <div class="invalid-feedback">
                  NIK harus diisi.
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nokk" class="form-label">Nomor KK</label>
              </div>
              <div class="col-lg-9">
                <input type="number" class="form-control" id="nokk" name="nokk" value="<?= old('nokk') ?>" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nama" class="form-label">Nama Lengkap (Tanpa Gelar)</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="tempatlahir" class="form-label">Tempat Lahir</label>
              </div>
              <div class="col-lg-6">
                <select class="tempatlahir form-control" id="tempatlahir" name="tempatlahir">
                  <option value=""></option>
                </select>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" id="dateInput" name="tanggallahir"  value="<?= old('tanggallahir') ?>" readonly="readonly" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
              </div>
              <div class="col-lg-9">
                <select class="form-select" name="jeniskelamin" id="jeniskelamin" value="<?= old('jeniskelamin') ?>" required>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="agama" class="form-label">Agama</label>
              </div>
              <div class="col-lg-9">
                <select class="form-select" name="agama" id="agama" value="<?= old('agama') ?>">
                  <option value="1">ISLAM</option>
                  <option value="2">KRISTEN</option>
                  <option value="3">KATOLIK</option>
                  <option value="4">HINDU</option>
                  <option value="5">BUDDHA</option>
                  <option value="6">KHONGHUCU</option>
                </select>
              </div>
            </div>
            <h4>PENDIDIKAN</h4>
            <hr>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="sekolah" class="form-label">Sekolah / Perguruan Tinggi</label>
              </div>
              <div class="col-lg-9">
                <select class="tempatlahir form-control" id="pt" name="tempatlahir">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="prodi" class="form-label">Program Studi</label>
              </div>
              <div class="col-lg-9">
                <select class="tempatlahir form-control" id="prodi" name="prodi">
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="ijazah" class="form-label">Nomor Ijazah</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="ijazah" name="ijazah" value="<?= old('ijazah') ?>">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="lulus" class="form-label">Tanggal Lulus</label>
              </div>
              <div class="col-lg-9">
                <input type="date" class="form-control flatpickr-input" data-provider="flatpickr" id="lulus" name="lulus" value="<?= old('lulus') ?>">
              </div>
            </div>
            <div class="text-end">
              <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
  var siteurl = '<?= site_url()?>';

  $(document).ready(function() {
    $('.tempatlahir').select2({
      ajax: {
        url: siteurl+"ajax/kabupaten",
        type: "post",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            searchTerm: params.term,
            searchJenjang: $('#jenjang').val()
          };
        },
        processResults: function (response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });

</script>
<?= $this->endSection() ?>
