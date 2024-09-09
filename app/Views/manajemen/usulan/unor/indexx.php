<?= $this->extend('template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/libs/jqwidgets/styles/jqx.base.css" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Unit Organisasi</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div id="treegrid"></div>
          <div id='Menu'>
            <ul>
                <!-- <li>Edit Selected Row</li> -->
                <li>Edit Pendidikan dan Jumlah</li>
                <!-- <li>Hapus Data</li> -->
            </ul>
          </div>
        </div>
    </div>
</div>

<div id="addmodal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="myModalLabel">Formulir Jabatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">
          <div class="mb-3">
            <label for="posisi" class="form-label">Posisi Jabatan</label>
            <select name="posisi" id="posisi" class="form-select">
              <option value="0a">PIMPINAN TERTINGGI</option>
              <option value="0b">WAKIL PIMPINAN</option>
              <option value="1a">JPT UTAMA (I/A)</option>
              <option value="1b">JPT MADYA (I/A)</option>
              <option value="1c">JPT MADYA (I/B)</option>
              <option value="2a">JPT PRATAMA (II/A)</option>
              <option value="2b">JPT PRATAMA (II/B)</option>
              <option value="3a">ADMINSTRATOR (III/A)</option>
              <option value="3b">ADMINSTRATOR (III/B)</option>
              <option value="4a">PENGAWAS (IV/A)</option>
              <option value="4b">PENGAWAS (IV/B)</option>
              <option value="9">BUKAN UNTUK POSISI JABATAN</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" value="">
            <input type="hidden" name="parent" id="parent" value="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submit()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<div id="addmodal2" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="myModalLabel">Formulir Jabatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">
          <div class="mb-3">
            <label for="posisi" class="form-label">Posisi Jabatan</label>
            <select name="posisi" id="posisi2" class="form-select">
              <option value="5b">FUNGSIONAL KEAHLIAN</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submit2()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<div id="addpendidikan" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="myModalLabel">Formulir Jabatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">
          <div class="mb-3">
            <label for="posisi" class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="" id="nama_jabatan" disabled>
          </div>
          <div class="mb-3">
            <label for="jabatan" class="form-label">Pendidikan</label>

          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit2" class="form-label">ABK</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="abk" name="abk" placeholder="">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit1" class="form-label">PNS</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="pns" name="pns">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit1" class="form-label">CPNS</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="cpns" name="cpns">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit1" class="form-label">PPPK</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="pppk" name="pppk">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit1" class="form-label">USUL CPNS</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="usul_pns" name="usul_pns">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit1" class="form-label">USUL CPPPK</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="usul_pppk" name="usul_pppk">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-3">
              <label for="unit1" class="form-label">MHPK</label>
            </div>
            <div class="col-lg-9">
              <input type="text" class="form-control" id="mhpk" name="mhpk">
            </div>
          </div>
          <input type="hidden" name="id" id="idpend" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitpendidikan()">Simpan</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxdatatable.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxtreegrid.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxmenu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  $('#jabatan2').select2({
        dropdownParent: $('#addmodal2')
    });

  var multipleDefault = new Choices(
          document.getElementById('choices-multiple-groups'),
          { allowHTML: true }
        );
            // prepare the data
            var source =
            {
                dataType: "json",
                dataFields: [
                    { name: 'headId', type: 'number' },
                    { name: 'induk', type: 'number' },
                    { name: 'updated_at', type: 'string' },
                    { name: 'nama_satker', type: 'string' }
                ],
                hierarchy:
                {
                    keyDataField: { name: 'headId' },
                    parentDataField: { name: 'induk' }
                },
                id: 'headId',
                root: 'value',
                url: '<?= site_url('usul/unor/dxuf')?>'
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            // create Tree Grid
            $("#treegrid").jqxTreeGrid(
            {
               width:  '100%',
                source: dataAdapter,
                autoRowHeight: true,
                // pageable: true,
                sortable: true,
                ready: function()
                {
                    $("#treegrid").jqxTreeGrid('expandAll');
                    $('.btnaddpendidikan').on('click',function(event) {
                      console.log(this.data('id'));
                    });
                },
                columns: [{
                        text: "NAMA SATUAN ORGANISASI/JABATAN",
                        editable: false,
                        pinned: true,
                        align: "center",
                        dataField: "nama_jabatan",
                        minWidth: 400
                    },
                    {
                        text: "UPDATED AT",
                        columnGroup: "updated_at",
                        editable: false,
                        dataField: "abk",
                        cellsAlign: "center",
                        align: "center",
                        width: 80,
                    }
                ]
            });

            var contextMenu = $("#Menu").jqxMenu({ width: 200, height: 50, autoOpenPopup: false, mode: 'popup' });
            $("#treegrid").on('contextmenu', function () {
                return false;
            });
            $("#treegrid").on('rowClick', function (event) {
                var args = event.args;
                if (args.originalEvent.button == 2) {
                    var scrollTop = $(window).scrollTop();
                    var scrollLeft = $(window).scrollLeft();
                    contextMenu.jqxMenu('open', parseInt(event.args.originalEvent.clientX) + 5 + scrollLeft, parseInt(event.args.originalEvent.clientY) + 5 + scrollTop);
                    return false;
                }
            });
            $("#Menu").on('itemclick', function (event) {
                var args = event.args;
                var selection = $("#treegrid").jqxTreeGrid('getSelection');
                var rowid = selection[0].uid
                if ($.trim($(args).text()) == "Edit Selected Row") {
                    $("#treegrid").jqxTreeGrid('beginRowEdit', rowid);
                } else if ($.trim($(args).text()) == "Edit Pendidikan dan Jumlah") {

                  axios.get('<?= site_url('usul/unor/getdata')?>/'+rowid)
                  .then(function (response) {
                    $('#idpend').val(rowid);
                    $('#nama_jabatan').val(response.data.nama_jabatan);
                    $('#abk').val(response.data.abk);
                    $('#pns').val(response.data.pns);
                    $('#cpns').val(response.data.cpns);
                    $('#pppk').val(response.data.pppk);
                    $('#usul_pns').val(response.data.usul_pns);
                    $('#usul_pppk').val(response.data.usul_pppk);
                    $('#mhpk').val(response.data.mhpk);

                    multipleDefault.removeActiveItems();

                    if(response.data.pends){
                      let data = response.data.pends;

                      multipleDefault.setChoiceByValue(data.split(','));
                      console.log(response.data.mphk);
                    }
                  });

                  $('#addpendidikan').modal('show');

                } else {
                  axios.get('<?= site_url('usul/unor/deletex')?>/'+rowid)
                    .then(function (response) {
                      if(response.data.message == 'ok'){
                        $("#treegrid").jqxTreeGrid('deleteRow', rowid);
                      }else{
                        alert(response.data.message);
                      }
                    });

                }
            });


  $('.btnaddpendidikan').on('click',function(event) {
    console.log(this.data('id'));
  });
});

function addchild(id) {
  $('#parent').val(id);
  $('#addmodal').modal('show');
}

function addchild2(id) {
  $('#parent2').val(id);
  $('#addmodal2').modal('show');
}

function addpendidikan(id) {
  $('#id').val(id);

  axios.get('<?= site_url('usul/unor/getdata')?>/'+id)
  .then(function (response) {
    $('#idpend').val(id);
    $('#nama_jabatan').val(response.data.nama_jabatan);
    $('#abk').val(response.data.abk);
    $('#pns').val(response.data.pns);
    $('#cpns').val(response.data.cpns);
    $('#pppk').val(response.data.pppk);
    $('#usul_pns').val(response.data.usul_pns);
    $('#usul_pppk').val(response.data.usul_pppk);
    $('#mhpk').val(response.data.mhpk);

    var multipleDefault = new Choices(
            document.getElementById('choices-multiple-groups'),
            { allowHTML: true }
          );

    multipleDefault.removeActiveItems();

    if(response.data.pends){
      let data = response.data.pends;

      multipleDefault.setChoiceByValue(data.split(','));
      console.log(response.data.mphk);
    }
  });

  $('#addpendidikan').modal('show');
}

function submitpendidikan() {
  axios.post('<?= site_url()?>/usul/unor/savependidikan', {
    idpend: $('#idpend').val(),
    abk: $('#abk').val(),
    pns: $('#pns').val(),
    cpns: $('#cpns').val(),
    pppk: $('#pppk').val(),
    usul_pns: $('#usul_pns').val(),
    usul_pppk: $('#usul_pppk').val(),
    mhpk: $('#mhpk').val(),
    pendidikan: $('#choices-multiple-groups').val()
  })
  .then(function (response) {
    if(response.data.message == 'ok'){
      location.reload();
    }else{
      alert(response.data.message);
    }
  })
  .catch(function (error) {
    console.log(error);
  });
}

function submit() {
  axios.post('<?= site_url()?>/usul/unor/insert', {
    posisi: $('#posisi').val(),
    nama_jabatan: $('#jabatan').val(),
    parent: $('#parent').val()
  })
  .then(function (response) {
    if(response.data.message == 'ok'){
      location.reload();
    }else{
      alert(response.data.message);
    }
  })
  .catch(function (error) {
    console.log(error);
  });
}

function submit2() {
  axios.post('<?= site_url()?>/usul/unor/insert', {
    posisi: $('#posisi2').val(),
    nama_jabatan: $('#jabatan2').val(),
    parent: $('#parent2').val()
  })
  .then(function (response) {
    if(response.data.message == 'ok'){
      location.reload();
    }else{
      alert(response.data.message);
    }
  })
  .catch(function (error) {
    console.log(error);
  });
}
</script>
<?= $this->endSection() ?>
