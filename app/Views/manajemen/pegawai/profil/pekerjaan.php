<?= $this->extend('manajemen/pegawai/profil') ?>

<?= $this->section('dataprofil') ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title mb-3">Riwayat Pekerjaan</h5>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>NO</th>
      <th width="30%">JABATAN</th>
      <th>TMT</th>
      <th>NOMOR SK</th>
      <th>OPSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($jabatans as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->KETERANGAN; ?></td>
      <td><?= date('d-m-Y', strtotime($row->TMT_JABATAN)); ?></td>
      <td><?= $row->NO_SK; ?></td>
      <td><a href="javascript:;" onclick="editpekerjaan('<?= $row->NIP; ?>',<?= $row->NO_URUT; ?>)" class="badge badge-success">Edit</a> <a href="" onclick="return confirm('Data akan dihapus?');" class="badge badge-danger">Delete</a></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
</div>
</div>
<?= $this->endSection() ?>
