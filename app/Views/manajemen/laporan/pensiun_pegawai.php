<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="row">
      <div class="col-12">
      <div class="d-flex mb-4 gap-4">
        <div class="avatar avatar-md">
          <div class="avatar-initial bg-label-primary rounded">
            <i class="ti ti-users ti-30px"></i>
          </div>
        </div>
        <div>
          <h5 class="mb-0">
            <span class="align-middle">Data Pegawai Pensiun</span>
          </h5>
          <span>-</span>
        </div>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-12 align-self-center">
          <div class="card">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="datatable">
                <thead class="table-dark">
                  <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>GOL/RUANG</th>
                    <th>JABATAN</th>
                    <th width="15%">TMT PENSIUN</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($pegawai as $row) {?>
                    <tr>
                      <td><?= $no;?></td>
                      <td><?= $row->nip_baru;?></td>
                      <td><?= $row->nama_lengkap;?></td>
                      <td><?= $row->gol_ruang;?></td>
                      <td><?= $row->ket_jabatan;?></td>
                      <td><?= date('d-m-Y', strtotime($row->tmt_pensiun));?></td>
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

<?= $this->section('script') ?>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script>
  $(document).ready(function() {
    $('#datatable').DataTable({
      dom:"Bfrtip",
      buttons:["copy","excel","print"]
    });
} );
</script>
<?= $this->endSection() ?>
