<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Usul Pensiun Untuk TAPERA</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addmodal">
                  Buat Usul Baru
                </button>
              </li>
            </ol>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Usul</h4>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>NIP</th>
              <th>NAMA</th>
              <th>TMT PENSIUN</th>
              <th>PENGIRIM</th>
              <th>DIBUAT PADA</th>
              <th>STATUS</th>
              <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usul as $row) {?>
              <tr>
                <td><?= $row->nip ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->tmt_pensiun ?></td>
                <td><?= $row->created_by ?></td>
                <td><?= $row->created_at ?></td>
                <td><?= usul_status($row->status) ?></td>
                <td>
                  <?php if($row->status == 1){ ?>
                  <a href="<?= site_url('pemutakhiran/pensiun/delete/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" class="btn btn-sm btn-danger">Delete</a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- container-fluid -->
</div>

<div id="addmodal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" data-bs-backdrop="static" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="myModalLabel">Buat Usul Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="<?= site_url('pemutakhiran/pensiun/save')?>" method="post" id="formadd" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip" id="nip">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="mb-3">
            <label for="tmt_pensiun" class="form-label">TMT PENISUN</label>
            <input type="date" class="form-control" name="tmt_pensiun" id="tmt_pensiun">
          </div>
          <div class="mb-3">
            <label for="lampiran" class="form-label">SK PENISUN</label>
            <input type="file" class="form-control" name="lampiran" id="lampiran">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="$('#formadd').submit()">Simpan</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
