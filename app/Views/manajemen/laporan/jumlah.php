<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="row ">
      <div class="col-12">
        <div class="d-flex mb-4 gap-4">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ti ti-users ti-30px"></i>
            </div>
          </div>
          <div>
            <h5 class="mb-0">
              <span class="align-middle">Jumlah Pegawai</span>
            </h5>
            <span>-</span>
          </div>
        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>SATUAN KERJA</th>
                  <th>JUMLAH PNS</th>
                  <th>JUMLAH PPPK</th>
                  <th>TOTAL</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($jumlah as $row) {?>
                  <tr>
                    <td><?= $no;?></td>
                    <td><a href="<?= site_url('manajemen/laporan/jumlah/'.encrypt($row->KODE_SATUAN_KERJA))?>" class="text-primary"><?= $row->SATUAN_KERJA;?></a></td>
                    <td><?= rupiah($row->JML_PNS);?></td>
                    <td><?= rupiah($row->JML_PPPK);?></td>
                    <td><?= rupiah($row->JML_PNS+$row->JML_PPPK);?></td>
                  </td>
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
