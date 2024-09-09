<?= $this->extend('kgb/template') ?>

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
            <h2 class="mb-0">Pengaturan KGB</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <form>
                  <h5 class="mb-2">A. Informasi Surat:</h5>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">Kota Satuan Kerja:</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="kota_surat" value="<?= $setup->kota_surat?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">Format Nomor Surat:</label>
                    <div class="col-lg-6">
                      <div class="input-group">
                        <input type="text" id="multiple-inputs" class="form-control" name="kgb_no" value="<?= $setup->prefix_no_surat?>">
                        <span class="input-group-text"> / XXX /</span>
                        <input type="text" class="form-control" name="suffix" value="<?= $setup->suffix_no_surat?>">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">KPPN:</label>
                    <div class="col-lg-6">
                      <select class="form-select" name="kppn">
                        <option value="">KPPN Bandung</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">Unit Organisasi:</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="unit_organisasi" value="<?= $setup->unit_orgranisasi?>">
                    </div>
                  </div>
                  <h5 class="mb-2">B. Header TTD:</h5>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">#1</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="ttd_header1" value="<?= $setup->ttd_header1?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">#2</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="ttd_header2" value="<?= $setup->ttd_header2?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">#3</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="ttd_header3" value="<?= $setup->ttd_header3?>">
                    </div>
                  </div>
                  <h5 class="mb-2">C. Penandatangan:</h5>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">Nama Pejabat</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="ttd_nip" value="<?= $setup->ttd_pjb_nip?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">NIP Pejabat</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="ttd_nama" value="<?= $setup->ttd_pjb_nama?>">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label">Keterangan Peraturan</label>
                    <div class="col-lg-6">
                      <textarea name="peraturan" class="form-control" rows="3"><?= $setup->ket_peraturan?></textarea>
                    </div>
                  </div>
                  <h5 class="mb-2">D. Tembusan:</h5>
                  <div class="mb-3 row">
                    <label class="col-lg-4 col-form-label"></label>
                    <div class="col-lg-6">
                      <textarea name="tembusan" class="form-control" rows="5"><?= $setup->tembusan1?></textarea>
                      <small class="form-text text-muted">Tulis per baris</small>
                    </div>
                  </div>
                </form>
        </div>
        <div class="card-footer bg-light border-0 text-end">
          <button class="btn btn-primary me-2">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
