<?= $this->extend('kenaikanjf/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Kenaikan Jabatan Fungsional</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"></li>
                </ol>
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
                  <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Buat Usul</button>
              </div>
          </div>
          <div class="card-body">
            <table class="datatable table table-bordered dt-responsive w-100">
              <thead>
                <tr>
                  <th>Nama/NIP</th>
                  <th>Kenaikan Jabatan</th>
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
                  <td><?= $row->jabatan?> > <?= $row->jabatan_baru?></td>
                  <td><?= $row->unit_kerja?></td>
                  <td class="<?= ($row->status_usulan == 4)?'text-danger':''?>"><?= $row->tahapan?></td>
                  <td><?= $row->created_at?></td>
                  <!-- <td><a href="<?= site_url('mutasi/kenaikanjf/detail/'.encrypt($row->id))?>" class="btn btn-secondary btn-sm"><i class="bx bx-file-find"></i></a> <a href="<?= site_url('mutasi/kenaikanjf/deleteusul/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" class="btn btn-danger btn-sm">Delete</a></td> -->
                  <td>
                    <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                        <a href="<?= site_url('mutasi/kenaikanjf/detail/'.encrypt($row->id))?>" type="button" class="btn btn-primary">Detail</a>
                        <a href="javascript:;" onclick="" type="button" class="btn btn-success">Log</a>
                        <?php if($row->status_usulan == 0){?>
                        <a href="<?= site_url('mutasi/kenaikanjf/deleteusul/'.encrypt($row->id))?>" onclick="return confirm('Usulan akan dihapus?')" type="button" class="btn btn-danger">Delete</a>
                        <?php }?>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div> <!-- end col -->
    </div>

  </div> <!-- container-fluid -->
</div>

<div id="myModal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Usulan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="" action="<?= site_url('mutasi/kenaikanjf/addusul') ?>" method="post" id="addform">
                <div class="row mb-4">
                  <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="text" name="nip" class="form-control" id="nip" required>
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
