<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Riwayat Jabatan
</h5>
<ul class="timeline mt-3 mb-5">
  <?php $no=1; foreach ($jabatans as $row) { ?>
    <li class="timeline-item timeline-item-transparent">
      <span class="timeline-point timeline-point-primary"></span>
      <div class="timeline-event">
        <div class="timeline-header mb-3">
          <h6 class="mb-0"><?= date('d-m-Y', strtotime($row->TMT_JABATAN)); ?></h6>
          <small class="text-muted"><?= $row->NO_SK; ?></small>
        </div>
        <p class="mb-2"><?= $row->KETERANGAN; ?></p>
        <div class="d-flex align-items-center mb-1">
          <div class="badge bg-lighter rounded-3">
            <i class="ti ti-file-type-pdf"></i>
            <span class="h6 mb-0 text-body">File SK</span>
          </div>
        </div>
      </div>
    </li>
    <?php $no++;} ?>
</ul>
<hr>
<h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
  <i class="ti ti-list-details me-3"></i> Riwayat Pangkat
</h5>
<ul class="timeline mt-3">
  <?php $no=1; foreach ($jabatans as $row) { ?>
    <li class="timeline-item timeline-item-transparent">
      <span class="timeline-point timeline-point-success"></span>
      <div class="timeline-event">
        <div class="timeline-header mb-3">
          <h6 class="mb-0"><?= date('d-m-Y', strtotime($row->TMT_JABATAN)); ?></h6>
          <small class="text-muted"><?= $row->NO_SK; ?></small>
        </div>
        <p class="mb-2"><?= $row->KETERANGAN; ?></p>
        <div class="d-flex align-items-center mb-1">
          <div class="badge bg-lighter rounded-3">
            <i class="ti ti-file-type-pdf"></i>
            <span class="h6 mb-0 text-body">File SK</span>
          </div>
        </div>
      </div>
    </li>
    <?php $no++;} ?>
</ul>
