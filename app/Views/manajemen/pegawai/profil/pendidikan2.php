<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Riwayat Pendidikan Formal
</h5>
<ul class="timeline mt-3 mb-5">
  <?php $no=1; foreach ($pendidikan as $row) { ?>
    <li class="timeline-item timeline-item-transparent">
      <span class="timeline-point timeline-point-primary"></span>
      <div class="timeline-event">
        <div class="timeline-header mb-3">
          <h6 class="mb-0"><?= $row->TAHUN_LULUS; ?></h6>
          <small class="text-muted"><?= $row->JENJANG_PENDIDIKAN; ?></small>
        </div>
        <p class="mb-2"><?= $row->NAMA_SEKOLAH; ?></b><br><?= $row->FAKULTAS_PENDIDIKAN.' - '.$row->JURUSAN; ?></p>
        <div class="d-flex align-items-center mb-1">
          <?php if($row->FILE_SK){ ?>
            <div class="badge bg-lighter rounded-3">
              <i class="ti ti-file-type-pdf"></i>
              <a href="<?= base_url('dokumen/pendidikan/'.$row->FILE_SK);?>" class="badge badge-primary" target="_blank">Lampiran Ijazah</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </li>
    <?php $no++;} ?>
</ul>
<hr>
<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Riwayat Pendidikan Pelatihan
</h5>
<ul class="timeline mt-3 mb-5">
  <?php $no=1; foreach ($diklat as $row) { ?>
    <li class="timeline-item timeline-item-transparent">
      <span class="timeline-point timeline-point-primary"></span>
      <div class="timeline-event">
        <div class="timeline-header mb-3">
          <h6 class="mb-0"><?= local_date($row->TGL_AWAL); ?> <b>s.d</b> <?= local_date($row->TGL_AKHIR); ?></h6>
          <small class="text-muted">-</small>
        </div>
        <p class="mb-2"><?= $row->DIKLAT_LAIN; ?></p>
        <i class="ti ti-certificate"></i> <?= $row->PENYELENGGARA; ?>
        <br>
        <br>
        <span class="badge bg-label-primary">
          <i class="ti ti-calendar-clock"></i> <?= $row->LAMA_JAM.' Jam, '.$row->LAMA_HARI.' Hari, '.$row->LAMA_BLN.' Bulan'; ?>
        </span>
        <span class="badge bg-label-warning">
          <i class="ti ti-map-pin"></i> <?= $row->TEMPAT; ?>
        </span>
        <div class="d-flex align-items-center mb-1">

        </div>
      </div>
    </li>
    <?php $no++;} ?>
</ul>
