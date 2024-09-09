<?= $this->extend('manajemen/template') ?>

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
              <li class="breadcrumb-item active">Peta Jabatan</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="row ">
        <div class="col-12 align-self-center">
          <div class="card card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>SATUAN KERJA</th>
                  <th>PETA JABATAN</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($satker as $row) {?>
                  <tr>
                    <td><?= $no;?></td>
                    <td><?= $row->SATUAN_KERJA;?></td>
                    <td><a href="<?= site_url('laporan/jobmap/'.encrypt($row->KODE_SATUAN_KERJA));?>" class="btn btn-primary">Lihat Peta Jabatan Ekisting</a></td>
                  </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
