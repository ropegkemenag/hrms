<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Data Non ASN</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="<?= site_url('nonasn/add')?>" class="btn btn-primary text-white">Tambah Pegawai</a></li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>NAMA</th>
                  <th>TANGGAL LAHIR</th>
                  <th>OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($pegawai as $row) {?>
                  <tr>
                    <td><?= $row->NIK?></td>
                    <td><?= $row->NAMA_LENGKAP?></td>
                    <td><?= $row->TANGGAL_LAHIR?></td>
                    <td></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <?= $pager->links() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
