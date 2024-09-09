<?= $this->extend('template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/libs/jqwidgets/styles/jqx.base.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url() ?>assets/libs/jqwidgets/styles/jqx.bootstrap.css" type="text/css" />

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">UNIT ORGANISASI</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Unit Organisasi</li>
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
                  <li>Tambah Unor</li>
                  <li>Edit</li>
                  <li>Hapus</li>
              </ul>
            </div>
          </div>
        </div>

    </div>

    <div id="detail" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header p-3 bg-soft-info">
            <h5 class="modal-title" id="myModalLabel">Info Unit Organisasi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="" action="" method="post">
              <div class="mb-3">
                <label for="posisi" class="form-label">NAMA UNOR</label>
                <input type="text" class="form-control" name="" value="" readonly>
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">KETERANGAN UNOR</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="" readonly>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <div id="editunor" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header p-3 bg-soft-info">
            <h5 class="modal-title" id="myModalLabel">Edit Unit Organisasi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="" action="" method="post">
              <div class="mb-3">
                <label for="posisi" class="form-label">KODE UNOR</label>
                <input type="text" class="form-control" id="id" name="" value="" readonly>
              </div>
              <div class="mb-3">
                <label for="posisi" class="form-label">NAMA UNOR</label>
                <input type="text" class="form-control" id="nama" name="">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">KETERANGAN UNOR</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">JENIS UNOR</label>
                <input type="text" class="form-control" name="keterangan" id="grup">
              </div>
              <div class="mb-3">
                <label for="jabatan" class="form-label">PROGRAM</label>
                <select class="form-control" id="program" name="program">
                  <option value="Dukungan Manajemen">Dukungan Manajemen</option>
                  <option value="Inspektorat Jenderal">Inspektorat Jenderal</option>
                  <option value="Pendidikan Islam">Pendidikan Islam</option>
                  <option value="Badan Litbang dan Diklat">Badan Litbang dan Diklat</option>
                  <option value="Penyelenggara Jaminan Produk Halal">Penyelenggara Jaminan Produk Halal</option>
                  <option value="Penyelenggaraan Haji dan Umrah">Penyelenggaraan Haji dan Umrah</option>
                  <option value="Bimbingan Masyarakat Islam">Bimbingan Masyarakat Islam</option>
                  <option value="Bimbingan Masyarakat Kristen">Bimbingan Masyarakat Kristen</option>
                  <option value="Bimbingan Masyarakat Katolik">Bimbingan Masyarakat Katolik</option>
                  <option value="Bimbingan Masyarakat Hindu">Bimbingan Masyarakat Hindu</option>
                  <option value="Bimbingan Masyarakat Buddha">Bimbingan Masyarakat Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
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
    <script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/libs/jqwidgets/jqxlistbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $('#jabatan2').select2({
            dropdownParent: $('#addmodal2')
        });

                // prepare the data
                var source =
                {
                    dataType: "json",
                    dataFields: [
                        { name: 'headId', type: 'number' },
                        { name: 'induk', type: 'number' },
                        { name: 'updated_at', type: 'string' },
                        { name: 'nama_satker', type: 'string' },
                        { name: 'info', type: 'string' },
                        { name: 'keterangan', type: 'string' }
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
                    autoRowHeight: false,
                    pageable: true,
                    pagerMode: 'advanced',
                    sortable: true,
                    theme: 'bootstrap',
                    ready: function()
                    {
                        // $("#treegrid").jqxTreeGrid('expandAll');
                        $("#treegrid").jqxTreeGrid('expandRow', '<?= session('kelola')?>');
                        $('.btnaddpendidikan').on('click',function(event) {
                          console.log(this.data('id'));
                        });
                    },
                    columns: [{
                            text: "NAMA SATUAN ORGANISASI/JABATAN",
                            editable: true,
                            // pinned: true,
                            align: "center",
                            dataField: "nama_satker"
                        },
                        {
                          text: "KETERANGAN",
                          editable: true,
                          dataField: "keterangan",
                          cellsAlign: "center",
                          align: "center"
                        },
                        {
                            text: "UPDATED AT",
                            editable: false,
                            dataField: "updated_at",
                            cellsAlign: "center",
                            align: "center"
                        },
                        {
                            text: "INFO",
                            editable: false,
                            dataField: "info",
                            cellsAlign: "center",
                            align: "center"
                        }
                    ]
                });

                var contextMenu = $("#Menu").jqxMenu({ width: 200, height: 90, autoOpenPopup: false, mode: 'popup' });
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
                    if ($.trim($(args).text()) == "Hapus") {
                        // Begin hapus
                    } else if ($.trim($(args).text()) == "Edit") {

                      axios.get('<?= site_url('usul/unor/getdata')?>/'+rowid)
                      .then(function (response) {
                        $('#id').val(rowid);
                        $('#induk').val(response.data.KODE_ATASAN);
                        $('#nama').val(response.data.SATUAN_KERJA);
                        $('#keterangan').val(response.data.KETERANGAN_SATUAN_KERJA);
                        $('#unitkerja').val(response.data.KODE_UNIT_KERJA);
                        $('#program').val(response.data.PROGRAM);
                        $('#grup').val(response.data.KODE_GRUP_SATUAN_KERJA);

                        // multipleDefault.removeActiveItems();
                        //
                        // if(response.data.pends){
                        //   let data = response.data.pends;
                        //
                        //   multipleDefault.setChoiceByValue(data.split(','));
                        //   console.log(response.data.mphk);
                        // }
                      });

                      $('#editunor').modal('show');

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

    function detail(id) {
      $('#detail').modal('show');
    }
    </script>
    <?= $this->endSection() ?>
