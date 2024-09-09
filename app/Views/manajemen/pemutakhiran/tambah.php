<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Pegawai Baru</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
              <a href="<?= site_url('pemutakhiran/tambah/add')?>" class="btn btn-primary text-light">Tambah Pegawai</a>
              </li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped datatable">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>KETERANGAN</th>
                  <th>STATUS</th>
                  <th>OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($pegawai as $row) {?>
                  <tr>
                    <td><?= $row->NIP?></td>
                    <td><?= $row->NAMA_LENGKAP?></td>
                    <td><?= $row->APP_NAME?></td>
                    <td><?= $row->REMARK?></td>
                    <td><a href="<?= site_url('access/delete/'.$row->ID)?>" class="btn btn-danger btn-sm" onclick="return confirm('Akses akan dihapus?')">Delete</a></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  function checknip(){
    axios.get('<?= site_url('ajax/pegawai')?>/'+$('#nip').val())
    .then(function (response) {
      var data = response.data[0];

      $('#nama').val(data.NAMA_LENGKAP);
      $('#jabatan').val(data.TAMPIL_JABATAN);
      $('#phone').val(data.NO_HP);
    });
  }
</script>
<?= $this->endSection() ?>
