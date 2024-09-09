<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Riwayat Pendidikan</div>
</div>
  <table class="table table-bordered table-striped mt-5">
    <thead>
      <tr>
        <th>NO</th>
        <th>TINGKAT</th>
        <th>NAMA SEKOLAH/PT</th>
        <th>TAHUN LULUS</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($pendidikan as $row) { ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $row->JENJANG_PENDIDIKAN; ?></td>
        <td><b><?= $row->NAMA_SEKOLAH; ?></b><br><?= $row->FAKULTAS_PENDIDIKAN.' - '.$row->JURUSAN; ?>
          <?php if($row->FILE_SK){ ?>
          <br><br><a href="<?= base_url('dokumen/pendidikan/'.$row->FILE_SK);?>" class="badge badge-primary" target="_blank">Lampiran Ijazah</a></td>
          <?php } ?>
        <td><?= $row->TAHUN_LULUS; ?></td>
      </tr>
    <?php $no++;} ?>
    </tbody>
  </table>

<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Riwayat Diklat</div>
</div>
  <table class="table table-bordered table-striped mt-5">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA PELATIHAN</th>
        <th>PERIODE</th>
        <th>JAM</th>
        <th>HARI</th>
        <th>BULAN</th>
        <th>TEMPAT</th>
        <th>PENYELENGGARA</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($diklat as $row) { ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $row->DIKLAT_LAIN; ?></td>
        <td><?= local_date($row->TGL_AWAL); ?></b><br><?= local_date($row->TGL_AKHIR); ?></td>
        <td><?= $row->LAMA_JAM; ?></td>
        <td><?= $row->LAMA_HARI; ?></td>
        <td><?= $row->LAMA_BLN; ?></td>
        <td><?= $row->TEMPAT; ?></td>
        <td><?= $row->PENYELENGGARA; ?></td>
      </tr>
    <?php $no++;} ?>
    </tbody>
  </table>
