<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Semasa mengikuti pendidikan pada SLTA ke bawah</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Organisasi</th>
      <th>Kedudukan</th>
      <th>Periode</th>
      <th>Tempat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($org as $row) {
      if($row->TIPE_ORGAN == 'SA'){
        ?>
        <tr>
          <td><?= $row->NAMA_ORGAN?></td>
          <td><?= $row->KEDUDUKAN?></td>
          <td><?= $row->TAHUN_AWAL.' s.d '.$row->TAHUN_AKHIR?></td>
          <td><?= $row->TEMPAT?></td>
        </tr>
      <?php }} ?>
    </tbody>
  </table>

<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Semasa mengikuti pendidikan pada Perguruan Tinggi</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Organisasi</th>
      <th>Kedudukan</th>
      <th>Periode</th>
      <th>Tempat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($org as $row) {
      if($row->TIPE_ORGAN == 'PT'){
        ?>
        <tr>
          <td><?= $row->NAMA_ORGAN?></td>
          <td><?= $row->KEDUDUKAN?></td>
          <td><?= $row->TAHUN_AWAL.' s.d '.$row->TAHUN_AKHIR?></td>
          <td><?= $row->TEMPAT?></td>
        </tr>
      <?php }} ?>
    </tbody>
  </table>

<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Semasa selesai pendidikan dan atau selama menjadi pegawai</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Organisasi</th>
      <th>Kedudukan</th>
      <th>Periode</th>
      <th>Tempat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($org as $row) {
      if($row->TIPE_ORGAN == 'PG'){
        ?>
        <tr>
          <td><?= $row->NAMA_ORGAN?></td>
          <td><?= $row->KEDUDUKAN?></td>
          <td><?= $row->TAHUN_AWAL.' s.d '.$row->TAHUN_AKHIR?></td>
          <td><?= $row->TEMPAT?></td>
        </tr>
      <?php }} ?>
    </tbody>
  </table>
