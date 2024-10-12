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
              <span class="align-middle">Data Pensiun</span>
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
                <thead class="table-dark">
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
                      <td><a href="<?= site_url('manajemen/laporan/pensiun/'.$row->kode_satuan_kerja);?>" class="text-primary"><?= $row->satuan_kerja;?></a></td>
                      <td><a href="<?= site_url('manajemen/laporan/pensiun/'.$row->kode_satuan_kerja.'/'.date('Y'));?>" class="text-danger"><?= $row->thn1;?></a></td>
                      <td><a href="<?= site_url('manajemen/laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+1));?>" class="text-danger"><?= $row->thn2;?></a></td>
                      <td><a href="<?= site_url('manajemen/laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+2));?>" class="text-danger"><?= $row->thn3;?></a></td>
                      <td><a href="<?= site_url('manajemen/laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+3));?>" class="text-danger"><?= $row->thn4;?></a></td>
                      <td><a href="<?= site_url('manajemen/laporan/pensiun/'.$row->kode_satuan_kerja.'/'.(date('Y')+4));?>" class="text-danger"><?= $row->thn5;?></a></td>
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
