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
            <h2 class="mb-0">Usulan Tugas Belajar</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <?php if($usul->status_usulan == 4){ ?>
        <div class="alert alert-danger mb-xl-0" role="alert">
            <strong> Usulan dikembalikan:</strong> <?= $usul->alasan_penolakan?>
        </div>
      <?php } ?>

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
            <h4 class="card-title mb-0 flex-grow-1">Kelengkapan Data</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-8">
              <form id="dataform" class="" action="<?= site_url('asesmen/tubel/savedata') ?>" method="post">
                <input type="hidden" name="id" value="<?= encrypt($usul->id)?>">

                <div class="row mb-4">
                    <label for="pengantar_nomor" class="col-sm-3 col-form-label">Nomor Surat Pengantar</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pengantar_nomor" id="pengantar_nomor" value="<?= $usul->pengantar_nomor?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="pengantar_jabatan" class="col-sm-3 col-form-label">Jabatan Penandatangan Surat Pengantar</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pengantar_jabatan" id="pengantar_jabatan" value="<?= $usul->pengantar_jabatan?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="nomorsurat" class="col-sm-3 col-form-label">Nomor Surat Perjanjian</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nomorsurat" id="nomorsurat" value="<?= $usul->surat_perjanjian_no?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanggal Surat Perjanjian</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="tglsurat" id="tglsurat" value="<?= $usul->surat_perjanjian_tanggal?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="program" class="col-sm-3 col-form-label">Program</label>
                    <div class="col-sm-9">
                      <select class="form-select" name="program">
                        <option value="program magister (S-2)" <?php ($usul->program == 'program magister (S-2)')?'selected':'';?>>Program Magister (S-2)</option>
                        <option value="program doktoral (S-3)" <?php ($usul->program == 'program doktoral (S-3)')?'selected':'';?>>Program Doktoral (S-3)</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="univ" class="col-sm-3 col-form-label">Universitas / Perguruan Tinggi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="univ" id="univ" value="<?= $usul->universitas?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="prodi" class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-sm-9">
                      <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $usul->prodi?>">
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tahun Akademik</label>
                    <div class="col-sm-9">
                      <input name="tahun" data-inputmask="'mask': '9999/9999'" id="tahunakademik" class="form-control" value="<?= $usul->tahun_akademik?>" />
                    </div>
                </div>
                <div class="row mb-4">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label" id="customformOutput"></label>
                  <div class="col-sm-9">
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex align-items-start gap-3 mt-4 mb-4">
        <?php if($usul->tahun_akademik){ ?>
          <a href="<?= site_url('asesmen/tubel/detail/'.encrypt($usul->id).'/2')?>" class="btn btn-success btn-label right ms-auto nexttab nexttab" disabled><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Lengkapi Dokumen</a>
        <?php }else{ ?>
          <button type="button" class="btn btn-label right ms-auto nexttab nexttab" name="button" disabled><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Lengkapi Dokumen (Step 2)</button>
        <?php } ?>
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
<script src="https://malsup.github.io/jquery.form.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  // $('#dataform').ajaxForm(function() {
  //   success: function showResponse(responseText, statusText, xhr, $form){
  //     console.log(responseText);
  //     console.log(statusText);
  //     console.log(xhr);
  //   }
  // });
});

function uploadfile(id) {
  $('#form'+id).ajaxSubmit({
    // target: '#output'+id,
    beforeSubmit: function(a,f,o) {
      alert('Mengunggah');
    },
    success: function(data) {
      if(data.status == 'error'){
        Swal.fire({title:"Ooppss...",text:data.message,icon:"error",confirmButtonColor:"#5b73e8"});
      }else{
        Swal.fire({html:"Dokumen telah diunggah",confirmButtonColor:"#5b73e8"});
        $('#output'+id).html(data.message);
      }
    }
  });
}

function preview(berkas) {
  $('#object').html('<object data="'+berkas+'" type="application/pdf" width="100%" style="height: 80vh;" id="object">'+
                      '<p>Browser tidak mendukung!</p>'+
                    '</object>');
  $('#preview').modal('show');
}
</script>
<?= $this->endSection() ?>
