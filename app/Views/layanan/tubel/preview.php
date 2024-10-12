<?= $this->extend('tubel/template') ?>

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
            <h2 class="mb-0">Usulan Tugas Belajar - Preview</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="javascript:void(0);">
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="nameInput" class="form-label">NIP</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="nip" value="<?= $usul->nip?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">NAMA</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="nip" value="<?= $usul->nama?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="dateInput" class="form-label">JABATAN</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="nip" value="<?= $usul->jabatan?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="dateInput" class="form-label">PANGKAT/GOLONGAN</label>
              </div>
              <div class="col-lg-9">
                <input type="text" class="form-control" id="nip" value="<?= $usul->pangkat.', '.$usul->golongan?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3">
                <label for="meassageInput" class="form-label">UNIT KERJA</label>
              </div>
              <div class="col-lg-9">
                <textarea class="form-control" id="meassageInput" rows="3" disabled><?= $usul->unit_kerja?></textarea>
              </div>
            </div>
          </form>

        </div>
      </div>

      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Lainnya</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form id="customform" class="" action="" method="post">
                <div class="row mb-4">
                    <label for="nomorsurat" class="col-sm-3 col-form-label">Nomor Surat Perjanjian</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nomorsurat" id="nomorsurat" value="<?= $usul->surat_perjanjian_no?>" disabled>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanggal Surat Perjanjian</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="tglsurat" id="tglsurat" value="<?= $usul->surat_perjanjian_tanggal?>" disabled>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="program" class="col-sm-3 col-form-label">Program</label>
                    <div class="col-sm-9">
                      <select class="form-select" name="program" disabled>
                        <option value="program magister (S-2)" <?php ($usul->program == 'program magister (S-2)')?'selected':'';?>>Program Magister (S-2)</option>
                        <option value="program doktoral (S-3)" <?php ($usul->program == 'program doktoral (S-3)')?'selected':'';?>>Program Doktoral (S-3)</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="univ" class="col-sm-3 col-form-label">Universitas / Perguruan Tinggi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="univ" id="univ" value="<?= $usul->universitas?>" disabled>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="prodi" class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-sm-9">
                      <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $usul->prodi?>" disabled>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tahun Akademik</label>
                    <div class="col-sm-9">
                      <input name="tahun" data-inputmask="'mask': '9999/9999'" id="tahunakademik" class="form-control" value="<?= $usul->tahun_akademik?>" disabled>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Dokumen</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>DOKUMEN</th>
                    <th>PREVIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dokumen as $row) { ?>
                    <tr>
                      <td><?= $row->keterangan?></td>
                      <td id="output<?= $row->id?>"><?= ($row->lampiran)?'<a href="javascript:;" onclick="preview(\'https://ropeg.kemenag.go.id:9000/layanan/dokumen/'.$row->lampiran.'\')">Lihat Dokumen</a>':'Belum Diunggah';?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body">
            <div class="table-card">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td class="fw-medium">Layanan</td>
                            <td>Kenaikan Jabatan Fungsional</td>
                        </tr>
                        <tr>
                            <td class="fw-medium">Tanggal Usul</td>
                            <td><?= $usul->tanggal_usul?></td>
                        </tr>
                        <tr>
                            <td class="fw-medium">Status</td>
                            <td><?= $usul->tahapan?></td>
                        </tr>
                        <tr>
                            <td class="fw-medium">Catatan</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="preview" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" id="object">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
function preview(berkas) {
  $('#object').html('<object data="'+berkas+'" type="application/pdf" width="100%" style="height: 80vh;" id="object">'+
                      '<p>Browser tidak mendukung!</p>'+
                    '</object>');
  $('#preview').modal('show');
}
</script>
<?= $this->endSection() ?>
