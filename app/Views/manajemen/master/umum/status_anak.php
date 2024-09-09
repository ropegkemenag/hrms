<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Tabel Status Anak</h4>

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
                  <th>STATUS ANAK</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($status as $row) {?>
                  <tr>
                    <td><?= $row->KODE_STATUS_ANAK?></td>
                    <td><?= $row->STATUS_ANAK?></td>
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
