<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Istri/Suami
</h5>
<table class="table table-striped" style="font-size: 0.7rem">
  <thead>
    <tr>
      <th>NO</th>
      <th width="30%">NAMA</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Tanggal Menikah</th>
      <th>Pekerjaan</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($keluargapasangan as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->TEMPAT_LAHIR.', '.id_date($row->TGL_LAHIR); ?></td>
      <td><?= id_date($row->TGL_NIKAH); ?></td>
      <td><?= $row->PEKERJAAN; ?></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
<hr>
<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Anak
</h5>
<table class="table table-striped" style="font-size: 0.7rem">
  <thead>
    <tr>
      <th>NO</th>
      <th width="30%">NAMA</th>
      <th>Jenis Kelamin</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Status</th>
      <th>Pekerjaan</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($keluargapasangan as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->TEMPAT_LAHIR.', '.id_date($row->TGL_LAHIR); ?></td>
      <td><?= $row->TGL_NIKAH; ?></td>
      <td><?= $row->PEKERJAAN; ?></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
<hr>
<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Ayah dan Ibu Kandung
</h5>
<table class="table table-striped" style="font-size: 0.7rem">
  <thead>
    <tr>
      <th>NO</th>
      <th width="30%">NAMA</th>
      <th>Jenis Kelamin</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Status</th>
      <th>Pekerjaan</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($keluargapasangan as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->TEMPAT_LAHIR.', '.id_date($row->TGL_LAHIR); ?></td>
      <td><?= $row->TGL_NIKAH; ?></td>
      <td><?= $row->PEKERJAAN; ?></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
<hr>
<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Ayah dan Ibu Mertua
</h5>
<table class="table table-striped" style="font-size: 0.7rem">
  <thead>
    <tr>
      <th>NO</th>
      <th width="30%">NAMA</th>
      <th>Jenis Kelamin</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Status</th>
      <th>Pekerjaan</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($keluargapasangan as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->TEMPAT_LAHIR.', '.id_date($row->TGL_LAHIR); ?></td>
      <td><?= $row->TGL_NIKAH; ?></td>
      <td><?= $row->PEKERJAAN; ?></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
<hr>
<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Saudara Kandung
</h5>
<table class="table table-striped" style="font-size: 0.7rem">
  <thead>
    <tr>
      <th>NO</th>
      <th width="30%">NAMA</th>
      <th>Jenis Kelamin</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Status</th>
      <th>Pekerjaan</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($keluargapasangan as $row) { ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->NAMA; ?></td>
      <td><?= $row->TEMPAT_LAHIR.', '.id_date($row->TGL_LAHIR); ?></td>
      <td><?= $row->TGL_NIKAH; ?></td>
      <td><?= $row->PEKERJAAN; ?></td>
    </tr>
  <?php $no++;} ?>
  </tbody>
</table>
