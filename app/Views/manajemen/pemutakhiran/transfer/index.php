<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Transfer Pegawai Antar Satuan Kerja</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
              <a href="<?= site_url('pemutakhiran/transfer/add')?>" class="text-white btn btn-primary">Buat Usul Pindah</a>
              </li>
            </ol>
          </div>

        </div>
      </div>

      <div class="alert alert-danger mb-xl-0" role="alert">
        <strong> Harap dibaca! </strong><br>
        Fitur ini untuk melakukan pemindahan satuan kerja pada SIMPEG.
        <ul>
          <li>Pastikan Pegawai telah menerima SK Mutasi</li>
          <li>Pegawai yang dipindahkan melalui fitur ini, tidak langsung berpindah ke Satuan Kerja tujuan </li>
          <li>Pegawai akan berpindah setelah Admin pada Satuan Kerja tujuan menerima melalui aplikasi yang sama </li>
          <li>Harap berhati-hati menggunakan fitur ini </li>
          <li>Pastikan pegawai yang diinputkan sama dengan data yang ada di SK</li>
        </ul>
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
              <th>SATKER TUJUAN</th>
              <th>STATUS</th>
              <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usul as $row) {?>
              <tr>
                <td><?= $row->nip ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->satker_tujuan ?></td>
                <td><?= $row->status ?></td>
                <td><a href="javascript:;" onclick="detail()" class="btn btn-sm btn-danger">Delete</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Inbox Usul</h4>
          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>NIP</th>
              <th>NAMA</th>
              <th>SATKER TUJUAN</th>
              <th>STATUS</th>
              <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($inbox as $row) {?>
              <tr>
                <td><?= $row->nip ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->satker_tujuan ?></td>
                <td><?= $row->status ?></td>
                <td>
                  <a href="<?= site_url('pemutakhiran/transfer/detail/'.encrypt($row->id))?>" class="btn btn-sm btn-success">Detail</a>
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
<?= $this->endSection() ?>
