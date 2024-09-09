<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Data Jabatan</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">Starter</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="card-header align-items-center d-flex">
          <h4 class="card-title mb-0 flex-grow-1">
            <select class="" name="">

            </select>
          </h4>
          <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm">
              Tambah Jabatan
            </button>
          </div>
        </div>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>KODE JABATAN</th>
              <th>NAMA JABATAN</th>
              <th>UNIT KERJA</th>
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jabatan as $row) {?>
              <tr>
                <td><?= $row->kode_jabatan?></td>
                <td><?= $row->nama_jabatan?></td>
                <td><?= $row->unit_kerja?></td>
                <td><a href="<?= site_url('anjababk/anjab/sub/'.encrypt($row->id))?>" class="btn btn-success btn-sm">Sub</a> <a href="<?= site_url('master/satker/detail/'.encrypt($row->id))?>" class="btn btn-primary btn-sm">Edit</a> <a href="<?= site_url('anjababk/anjab/detail/ikhtisar/'.encrypt($row->id))?>" class="btn btn-warning btn-sm">Anjab</a> <a href="<?= site_url('anjababk/petajabatan/'.encrypt($row->kode_unit_kerja))?>" class="btn btn-danger btn-sm">Peta Jabatan</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">

</script>
<?= $this->endSection() ?>
