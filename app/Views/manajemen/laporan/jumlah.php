<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Jumlah Pegawai</h4>

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
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>SATUAN KERJA</th>
                <th>JUMLAH PNS</th>
                <th>JUMLAH PPPK</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($jumlah as $row) {?>
                <tr>
                  <td><?= $no;?></td>
                  <td><a href="<?= site_url('manajemen/laporan/jumlah/'.encrypt($row->KODE_SATUAN_KERJA))?>" class="text-primary"><?= $row->SATUAN_KERJA;?></a></td>
                  <td><?= rupiah($row->JML_PNS);?></td>
                  <td><?= rupiah($row->JML_PPPK);?></td>
                  <td>
                    <div class="dropdown">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-fill align-middle"></i>
                        </button>
                        <!-- <ul class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="<?= site_url('laporan/jumlah/pejabat/'.$row->KODE_SATUAN_KERJA)?>">Pejabat</a>
                          <a class="dropdown-item" href="<?= site_url('laporan/jumlah/statistik/'.$row->KODE_SATUAN_KERJA)?>">Statistik</a>
                          <a class="dropdown-item" href="<?= site_url('laporan/jumlah/komposisi/'.$row->KODE_SATUAN_KERJA)?>">Komposisi Jabatan</a>
                        </ul> -->
                    </div>
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
