<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Tabel Jenis Pegawai</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
              </li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped" id="accesstable">
              <thead>
                <tr>
                  <th>KODE</th>
                  <th>PANGKAT</th>
                  <th>GOL/RUANG</th>
                  <th>GOL PPPK</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pangkat as $row) {?>
                  <tr>
                    <td><?= $row->KODE_PANGKAT?></td>
                    <td><?= $row->PANGKAT?></td>
                    <td><?= $row->GOL_RUANG?></td>
                    <td><?= $row->GOL_PPPK?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
