<?= $this->extend('template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.8.0/css/jquery.orgchart.min.css">
<style media="screen">
#chart-container {
position: relative;
height: 420px;
border: 1px solid #aaa;
margin: 0.5rem;
overflow: auto;
text-align: center;
}
.orgchart{
  background-image: initial;
}
.orgchart .node .title {
    width: 200px;
    height: initial;
    white-space: initial;
}
.orgchart .node .content {
    height: initial;
    white-space: initial;
    width: 200px;
}

.orgchart .jabatan .title { background-color: #cc0066; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Peta Jabatan</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">Starter</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="card card-body">
        <div id="chart-container"></div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.8.0/js/jquery.orgchart.min.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#chart-container').orgchart({
    'data' : '<?= site_url('anjababk/petajabatan/struktur/'.encrypt($satker->KODE_SATUAN_KERJA))?>',
    'nodeContent' : 'title'
  });
});

</script>
<?= $this->endSection() ?>
