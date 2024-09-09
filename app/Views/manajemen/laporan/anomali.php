<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Data Anomali</h4>

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
                <th>NIP</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($pegawai as $row) {?>
                <tr>
                  <td><?= $no;?></td>
                  <td><a href="<?= site_url('pegawai/profil/'.$row->nip_baru)?>" class="text-danger" target="_blank"><?= $row->nip_baru;?></a></td>
                  <td><?= $row->nama;?></td>
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
