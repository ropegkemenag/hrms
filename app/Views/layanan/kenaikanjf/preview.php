<?= $this->extend('kenaikanjf/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0 font-size-18">Usulan Kenaikan Jabatan Fungsional</h4>

          <div class="page-title-right">
              <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="<?= site_url('mutasi/kenaikanjf')?>">Kenaikan Jafung</a></li>
                  <li class="breadcrumb-item active">Preview</li>
              </ol>
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
                  <input type="hidden" name="id" value="<?= encrypt($usul->id)?>">
                  <div class="row mb-4">
                    <label for="jabatan_lama" class="col-sm-3 col-form-label">Jabatan Lama</label>
                    <div class="col-sm-9">
                      <select class="select2" name="jabatan_lama" disabled>
                        <?php foreach ($jabatans as $row) {
                          $select = ($row->JABATAN == $usul->jabatan_lama)?'selected':'';
                          echo '<option value="'.$row->JABATAN.'" '.$select.'>'.$row->JABATAN.'</option>';
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="jabatan_baru" class="col-sm-3 col-form-label">Jabatan Baru</label>
                    <div class="col-sm-9">
                      <select class="select2" name="jabatan_baru" disabled>
                        <?php foreach ($jabatans as $row) {
                          $select = ($row->JABATAN == $usul->jabatan_baru)?'selected':'';
                          echo '<option value="'.$row->JABATAN.'" '.$select.'>'.$row->JABATAN.'</option>';
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="pak" class="col-sm-3 col-form-label">PAK</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pak" id="pak" value="<?= $usul->pak?>" disabled>
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
