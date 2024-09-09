<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Data Pensiun</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">Starter</li>
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
                  <th><?= date('Y');?></th>
                  <th><?= date('Y')+1;?></th>
                  <th><?= date('Y')+2;?></th>
                  <th><?= date('Y')+3;?></th>
                  <th><?= date('Y')+4;?></th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($jumlah as $row) {?>
                  <tr>
                    <td><?= $no;?></td>
                    <td><a href="<?= site_url('laporan/pensiun/'.$row->kode_satuan_kerja);?>" class="text-primary"><?= $row->satuan_kerja;?></a></td>
                    <td><a href="<?= site_url('laporan/pensiun/'.$row->kode_satuan_kerja.'/'.date('Y'));?>" class="text-danger"><?= $row->thn1;?></a></td>
                    <td><a href="<?= site_url('laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+1));?>" class="text-danger"><?= $row->thn2;?></a></td>
                    <td><a href="<?= site_url('laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+2));?>" class="text-danger"><?= $row->thn3;?></a></td>
                    <td><a href="<?= site_url('laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+3));?>" class="text-danger"><?= $row->thn4;?></a></td>
                    <td><a href="<?= site_url('laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+4));?>" class="text-danger"><?= $row->thn5;?></a></td>
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
