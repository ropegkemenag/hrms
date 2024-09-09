<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Pengolahan Data</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">Starter</li>
            </ol>
          </div>

        </div>
      </div>
      <div class="col-12 align-self-center">
        <div class="card card-body">
          <div style="height:480px;">
            <web-pivot-table />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script type="text/javascript" src="https://webpivottable.com/releases/latest/dist/wpt.js" ></script>
<script type="text/javascript">

  $(document).ready(function() {
    var wpt = document.getElementsByTagName('web-pivot-table')[0];
    // wpt.showControlPanel();
    wpt.setOptions({
      server:{
        fileProxyEnabled: 0
      }
    });

    // $('#sourcebtn').on('click',function(event) {
    //   wpt.setWptFromWebService('https://ropeg.kemenag.go.id/api/webview/pegawai/wpt/<?= kodekepala(session('kelola'));?>');
    // });
    wpt.setWptFromWebService('https://ropeg.kemenag.go.id/api/webview/pegawai/wpt/<?= kodekepala(session('kelola'));?>');
    wpt.showControlPanel();
  });

function loaddata() {

  $('#wdr-component').html('Sedang memuat data...');
  $.getJSON('https://ropeg.kemenag.go.id/api/webview/pegawai/pivot/<?= kodekepala(session('kelola'));?>', function(mps) {
    // var jsonData = ;
    var pivot = new WebDataRocks({
      container: "#wdr-component",
      toolbar: true,
      report: {
        dataSource: {
          data: mps
        }
      }
    });
  });
  }
</script>
<?= $this->endSection() ?>
