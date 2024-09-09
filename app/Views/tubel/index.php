<?= $this->extend('tubel/template') ?>

<?= $this->section('content') ?>
<div class="pc-content">
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
            <li class="breadcrumb-item" aria-current="page">Sample Page</li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="page-header-title">
            <h2 class="mb-0">Usulan Tugas Belajar</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Daftar Usulan</h4>
            <div class="flex-shrink-0">
                <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Buat Usul</button> -->
            </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="datatable table table-bordered table-hover mb-0">
            <thead>
              <tr>
                <th>Nama/NIP</th>
                <th>Jenis Tubel</th>
                <th>Satuan Kerja</th>
                <th>Status</th>
                <th>Dibuat Tanggal</th>
                <th>Opsi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($usul as $row) {?>
              <tr>
                <td><?= '<b>'.$row->nama.'</b><br>'.$row->nip?></td>
                <td><?= jenis_tubel($row->jenis_tubel)?></td>
                <td><?= $row->unit_kerja?></td>
                <td class="<?= ($row->status_usulan == 4)?'text-danger':''?>"><?= $row->tahapan?></td>
                <td><?= $row->created_at?></td>
                <!-- <td><a href="<?= site_url('tubel/detail/'.encrypt($row->id))?>" class="btn btn-secondary btn-sm"><i class="bx bx-file-find"></i></a> <a href="<?= site_url('tubel/deleteusul/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" class="btn btn-danger btn-sm">Delete</a></td> -->
                <td>
                  <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                      <a href="<?= site_url('tubel/detail/'.encrypt($row->id))?>" type="button" class="btn btn-primary">Detail</a>
                      <a href="javascript:;" onclick="" type="button" class="btn btn-success">Log</a>
                      <?php if($row->status_usulan == 0){?>
                      <a href="<?= site_url('tubel/deleteusul/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" type="button" class="btn btn-danger">Delete</a>
                      <?php }?>
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div> <!-- end col -->
  </div>
</div>

<div id="myModal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Usulan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('tubel/addusul') ?>" method="post" id="addform">
                <div class="row mb-4">
                  <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="text" name="nip" class="form-control" id="nip" required>
                  </div>
                </div>
                <div class="row mb-4">
                  <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                  <div class="col-sm-9">
                    <select class="form-select" name="jenis" id="jenis">
                      <option value="6">Tugas Belajar Pada Jam Kerja</option>
                      <option value="7">Tugas Belajar di Luar Jam Kerja</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="$('#addform').submit()">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
