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
            <h2 class="mb-0">Daftar Mutasi Pegawai - Masuk</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="alert alert-success mb-xl-0" role="alert">
        <strong> Harap dibaca! </strong><br>
        Fitur ini untuk melakukan pemindahan satuan kerja pada SIMPEG. Sebelum menerima usulan, harap diperhatikan.
        <ul>
          <li>Pastikan NIP sesuai dengan Lampiran SK</li>
          <li>Admin harap melengkapi data pada SIMPEG setelah menerima usulan</li>
        </ul>
      </div>

      <div class="card mt-3">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Inbox Usulan</h4>
            <div class="flex-shrink-0">
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
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="https://ropeg.kemenag.go.id:9000/layanan/dokumen/docu.11.<?= $row->nip?>.pdf" type="button" class="btn btn-primary btn-sm" target="_blank">Lihat SK</a>
                        <?php if($row->status == 1){ ?>
                        <a href="<?= site_url('simpeg/mutasi/accept/'.encrypt($row->id))?>" onclick="return confirm('Usulan diterima?')" type="button" class="btn btn-success btn-sm">Terima</a>
                        <a href="javascript:;" onclick="declined('<?= encrypt($row->id)?>')" type="button" class="btn btn-danger btn-sm">Tolak</a>
                        <?php }?>
                    </div>
                      <?php if($row->status == 0){?>
                      <a href="<?= site_url('simpeg/mutasi/delete/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" type="button" class="btn btn-danger">Delete</a>
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


<?= $this->endSection() ?>

<?= $this->section('style') ?>
<link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
var siteurl = '<?= site_url()?>';

function add(id) {
  // alert('Memuat...');
  $('#addmodal').modal('show');
}

function declined(ids) {
  Swal.fire({
    text: 'Masukan informasi penolakan!',
    input: 'text',
    inputAttributes: {
      autocapitalize: 'off'
    },
    showCancelButton: true,
    confirmButtonText: 'Tolak Laporan',
    confirmButtonColor: "#f06548",
    showLoaderOnConfirm: true,
    preConfirm: (data) => {
      return fetch('<?= site_url('simpeg/mutasi/decline')?>', {
        method: "POST",
        body: JSON.stringify({ keterangan: data, id: ids}),
        headers: {"Content-type": "application/json; charset=UTF-8"}})
        .then(response => {
          if (!response.ok) {
            throw new Error(response.statusText)
          }
          return response.json()
        })
        .catch(error => {
          Swal.showValidationMessage(
            `Request failed: ${error}`
          )
        })
      },
      allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.replace("<?= site_url('simpeg/mutasi/inbox')?>");
      }
    });
  }

$(document).ready(function() {
  $('#satkertujuan').on('change',function(event) {
    $('#satkertujuannama').val($("#satkertujuan option:selected").text());
  });
});


</script>
<?= $this->endSection() ?>
