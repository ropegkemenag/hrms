<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Suami/Istri</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Pekerjaan</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($suami as $row) {
        ?>
        <tr>
          <td><?= $row->NAMA?></td>
          <td><?= $row->TGL_LAHIR?></td>
          <td><?= $row->PEKERJAAN?></td>
          <td><?= $row->KETERANGAN?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Anak</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Pekerjaan</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($anak as $row) {
        ?>
        <tr>
          <td><?= $row->NAMA?></td>
          <td><?= $row->TGL_LAHIR?></td>
          <td><?= gender($row->JENIS_KELAMIN)?></td>
          <td><?= $row->PEKERJAAN?></td>
          <td><?= $row->KETERANGAN?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="ribbon ribbon-primary round-shape">Orang Tua</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Pekerjaan</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($keluarga as $row) {
      if($row->JENIS_KELUARGA == 'OT'){
        ?>
        <tr>
          <td><?= $row->NAMA?></td>
          <td><?= $row->TGL_LAHIR?></td>
          <td><?= $row->PEKERJAAN?></td>
          <td><?= $row->KETERANGAN?></td>
        </tr>
      <?php }} ?>
    </tbody>
  </table>

<div class="card ribbon-box border shadow-none mb-lg-0">
  <div class="ribbon ribbon-primary round-shape">Mertua</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Pekerjaan</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($keluarga as $row) {
      if($row->JENIS_KELUARGA == 'MT'){
    ?>
      <tr>
        <td><?= $row->NAMA?></td>
        <td><?= $row->TGL_LAHIR?></td>
        <td><?= $row->PEKERJAAN?></td>
        <td><?= $row->KETERANGAN?></td>
      </tr>
    <?php }} ?>
  </tbody>
</table>
<div class="card ribbon-box border shadow-none mb-lg-0">
  <div class="ribbon ribbon-primary round-shape">Saudara Kandung</div>
</div>
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Pekerjaan</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($keluarga as $row) {
      if($row->JENIS_KELUARGA == 'SK'){
    ?>
      <tr>
        <td><?= $row->NAMA?></td>
        <td><?= $row->TGL_LAHIR?></td>
        <td><?= $row->PEKERJAAN?></td>
        <td><?= $row->KETERANGAN?></td>
      </tr>
    <?php }} ?>
  </tbody>
</table>
