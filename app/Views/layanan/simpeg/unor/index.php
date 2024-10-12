<?= $this->extend('layanan/template') ?>

<?= $this->section('style') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="pc-content">

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-datatable table-responsive">
          <table class="datatable table table-bordered dt-responsive w-100">
            <thead>
              <tr>
                <th>Tanggal Usul</th>
                <th>Nama Unor</th>
                <th>Jenis Ubah</th>
                <th>Status</th>
                <th>Opsi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($usul as $row) {?>
              <tr>
                <td><?= $row->created_at?></td>
                <td><?= $row->nama_unor?></td>
                <td><?= $row->jenis?></td>
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
                      <?php if($row->status == 0){?>
                      <a href="<?= site_url('data/unor/delete/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" type="button" class="btn btn-danger">Delete</a>
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
                <h5 class="modal-title" id="myModalLabel">Tambah Usulan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('layanan/simpeg/unor/addusul') ?>" method="post" id="addform">
                <div class="row mb-4">
                  <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="jenis" id="jenis">
                      <option value="tambah">Penambahan</option>
                      <option value="ubah">Perubahan</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="jenis" class="col-sm-3 col-form-label" id="jenisTxt">Unor Induk</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="unor_induk" id="unor_induk">
                    </select>
                    <input type="hidden" name="unor_induk_name" id="unor_induk_name" value="">
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="unor" class="col-sm-3 col-form-label" id="unorTxt">Nama Unor</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_unor" value="">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#addform').submit()">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url()?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script type="text/javascript">
var siteurl = '<?= site_url()?>';

function add(id) {
  // alert('Memuat...');
  $('#addmodal').modal('show');
}

$(document).ready(function() {

  $('.datatable').DataTable({
    buttons:[
      'copy', 'excel', 'pdf',
      {
      text:'<i class="ti ti-plus ti-xs me-md-2"></i><span class="d-md-inline-block d-none">Create Invoice</span>',
      className:"btn btn-primary waves-effect waves-light",
      action:function(e,t,o,a){
        window.location="app-invoice-add.html"
      }
    }]
  });

  $('#jenis').on('change',function(event) {
    if($('#jenis').val() == 'tambah'){
      $('#jenisTxt').html('Unor Induk');
      $('#unorTxt').html('Nama Unor');
    }else{
      $('#jenisTxt').html('Unor yang diubah');
      $('#unorTxt').html('Menjadi');
    }
  });

  $('#unor_induk').select2({
    theme: 'bootstrap-5',
    dropdownParent: $('#addmodal'),
    ajax: {
      url: siteurl+'ajax/searchunor',
      data: function (params) {
        var query = {
          search: params.term,
          type: 'public'
        }

        return query;
      },
      processResults: function (data) {
        return {
          results: data
        };
      },
      processResults: (data, params) => {
        const results = data.map(item => {
          return {
            id: item.id,
            text: item.nama,
          };
        });
        return {
          results: results,
        }
      },
    },
    placeholder: 'Cari Unor',
    minimumInputLength: 5,
  });

  $('#unor_induk').on('select2:select', function (e) {
    var data = e.params.data;
    $('#unor_induk_name').val(data.text);
});
});


</script>
<?= $this->endSection() ?>
