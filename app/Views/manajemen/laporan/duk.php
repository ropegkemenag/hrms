<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="row">
      <div class="col-12">
        <div class="d-flex mb-4 gap-4">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ti ti-users ti-30px"></i>
            </div>
          </div>
          <div>
            <h5 class="mb-0">
              <span class="align-middle">Daftar Urut Kepangkatan</span>
            </h5>
            <span>-</span>
          </div>
        </div>
      </div>
      </div>

      <div class="row ">
        <div class="col-12 align-self-center">
          <div class="card">
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>SATUAN KERJA</th>
                    <th>CETAK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($satker as $row) {?>
                    <tr>
                      <td><?= $no;?></td>
                      <td><?= $row->SATUAN_KERJA;?></td>
                      <td><a href="javascript:;" onclick="generate('<?= encrypt($row->KODE_SATUAN_KERJA) ?>','<?= $row->SATUAN_KERJA?>')" class="btn btn-sm btn-success">Cetak</a></td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
  function generate(kode,nama) {
    $("#loverlay").fadeIn(300);

    $.post("<?= site_url('laporan/duk/generate')?>",
    {
      kodex: kode,
      namax: nama
    },
    function(data, status){
      $("#loverlay").fadeIn(300);
      if(data.status == 'ok'){
        location.replace("<?= site_url('laporan/duk/cetak')?>");
      }else{
        alert("Gagal generate DUK. Silahkan coba lagi.");
      }
    });

  }
</script>
<?= $this->endSection() ?>
