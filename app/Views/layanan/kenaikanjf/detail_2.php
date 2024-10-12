<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0 font-size-18">Usulan Kenaikan Jabatan Fungsional - Dokumen</h4>

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
              <h4 class="card-title mb-0 flex-grow-1">Dokumen</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>DOKUMEN</th>
                      <th>STATUS</th>
                      <th>UNGGAH</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($dokumen as $row) { ?>
                      <tr>
                        <td><?= $row->keterangan?></td>
                        <td id="output<?= $row->id?>"><?= ($row->lampiran)?'<a href="javascript:;" onclick="preview(\'https://ropeg.kemenag.go.id:9000/layanan/dokumen/'.$row->lampiran.'\')">Lihat Dokumen</a>':'Belum Diunggah';?></td>
                        <td>
                          <button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="$('#file<?= $row->id?>').click()"><i class="bx bx-upload align-middle"></i></button>
                          <form method="POST" action="<?= site_url('dokumen/upload') ?>" style="display: none;" id="form<?= $row->id ?>" enctype="multipart/form-data">
                            <input type="hidden" name="nip" value="<?= $usul->nip ?>">
                            <input type="hidden" name="usul" value="<?= encrypt($usul->id) ?>">
                            <input type="hidden" name="iddok" value="<?= $row->dokumen ?>">
                            <input type="hidden" name="layanan" value="<?= $row->layanan ?>">
                            <input type="file" name="dokumen" id="file<?=$row->id ?>" onchange="uploadfile('<?= $row->id ?>')">
                          </form>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex align-items-start gap-3 mt-4 mb-4">
          <a href="<?= site_url('mutasi/kenaikanjf/detail/'.encrypt($usul->id).'/1')?>" class="btn btn-success btn-label left nexttab nexttab"><i class="ri-arrow-left-line label-icon align-middle fs-16 ms-2"></i>Formulir Tubel (Step 1)</a>
          <a href="<?= site_url('mutasi/kenaikanjf/detail/'.encrypt($usul->id).'/3')?>" class="btn btn-success btn-label right ms-auto nexttab nexttab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Kirim Usulan (Step 3)</a>
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
