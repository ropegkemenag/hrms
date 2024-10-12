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
              <!-- <li class="breadcrumb-item "><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Buat Usul</button></li> -->
              <li class="breadcrumb-item "><a href="<?= site_url('mutasi/kenaikanjf')?>" class="btn btn-success waves-effect waves-light text-light">Kembali</a></li>
            </ol>
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
                <form id="customform" class="" action="<?= site_url('mutasi/kenaikanjf/savedata') ?>" method="post">
                  <input type="hidden" name="id" value="<?= encrypt($usul->id)?>">
                  <div class="row mb-4">
                    <label for="pengantar_nomor" class="col-sm-3 col-form-label">Nomor Surat Pengantar</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pengantar_nomor" value="<?= $usul->pengantar_nomor?>">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="pengantar_tanggal" class="col-sm-3 col-form-label">Tanggal Surat Pengantar</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="pengantar_tanggal" value="<?= $usul->pengantar_tanggal?>">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="pengantar_dari" class="col-sm-3 col-form-label">Jabatan Surat Pengantar</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="pengantar_dari" value="<?= $usul->pengantar_dari?>">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="jabatan_lama" class="col-sm-3 col-form-label">Jabatan Lama</label>
                    <div class="col-sm-9">
                      <select class="select2" name="jabatan_lama">
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
                      <select class="select2" name="jabatan_baru">
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
                      <input type="text" class="form-control" name="pak" id="pak" value="<?= $usul->pak?>">
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
          <a href="<?= site_url('mutasi/kenaikanjf/detail/'.encrypt($usul->id).'/2')?>" class="btn btn-success btn-label right ms-auto nexttab nexttab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Lengkapi Dokumen</a>
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
<script src="https://malsup.github.io/jquery.form.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  // $("#tahunakademik").inputmask();
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
