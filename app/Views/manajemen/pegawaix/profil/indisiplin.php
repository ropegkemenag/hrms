<h4 class="card-title text-success">Riwayat Pekerjaan</h4>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>NO</th>
      <th>JABATAN</th>
      <th>PERIODE</th>
      <th>NOMOR SK</th>
      <th>OPSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($jabatans as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->JABATAN; ?></td>
      <td><?= date('d-m-Y', strtotime($row->TMT_JABATAN)); ?><br><br>
        <?php if($row->FILE_SK){ ?>
        <a href="<?= base_url('dokumen/pekerjaan/'.$row->FILE_SK);?>" class="badge badge-primary" target="_blank">Lampiran SK</a></td>
        <?php } ?>
      </td>
      <td><?= $row->NO_SK; ?></td>
      <td><a href="javascript:;" onclick="editpekerjaan('<?= $row->NIP; ?>',<?= $row->NO_URUT; ?>)" class="badge badge-success">Edit</a> <a href="" onclick="return confirm('Data akan dihapus?');" class="badge badge-danger">Delete</a></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
