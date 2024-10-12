<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="row">
      <div class="col-12">
        <div class="d-flex mb-4 gap-4">
          <div class="avatar avatar-md">
            <div class="avatar-initial bg-label-primary rounded">
              <i class="ti ti-users ti-30px"></i>
            </div>
          </div>
          <div>
            <h5 class="mb-0">
              <span class="align-middle">Data Pejabat</span>
            </h5>
            <span>-</span>
          </div>
        </div>
      </div>
  </div>

  <div class="row ">
    <div class="col-12 align-self-center">
    <div class="card">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-sm-4">
                  <select class="form-select" name="kategori" id="kategori">
                    <option value="1">Pejabat Pimpinan Tinggi Madya Kementerian Agama</option>
                    <option value="2">Pejabat Pimpinan Tinggi Pratama Kementerian Agama</option>
                    <option value="3">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Sekretariat Jenderal</option>
                    <option value="4">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Pendidikan Islam</option>
                    <option value="5">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Bimbingan Masyarakat Islam</option>
                    <option value="6">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Bimbingan Masyarakat Kristen</option>
                    <option value="7">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Bimbingan Masyarakat Katolik</option>
                    <option value="8">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Bimbingan Masyarakat Hindu</option>
                    <option value="9">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Bimbingan Masyarakat Buddha</option>
                    <option value="10">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Ditjen Penyelenggaraan Haji dan Umrah</option>
                    <option value="11">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Inspektorat Jenderal</option>
                    <option value="12">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Badan Litbang Serta Pendidikan dan Pelatihan</option>
                    <option value="64">Pejabat Administrator/Koordinator/Pengawas/Subkoordinator Badan Penyelenggara Jaminan Produk Halal</option>
                  </select>
                </div>
                <!--end col-->
                <!-- <div class="col-sm-auto ms-auto">
                    <div class="list-grid-nav hstack gap-1">
                        <button type="button" id="grid-view-button" class="btn btn-soft-info nav-link btn-icon fs-14 active filter-button"><i class="ri-grid-fill"></i></button>
                        <button type="button" id="list-view-button" class="btn btn-soft-info nav-link  btn-icon fs-14 filter-button"><i class="ri-list-unordered"></i></button>
                        <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info btn-icon fs-14"><i class="ri-more-2-fill"></i></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                            <li><a class="dropdown-item" href="#">All</a></li>
                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                        </ul>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addmembers"><i class="ri-add-fill me-1 align-bottom"></i> Add Members</button>
                    </div>
                </div> -->
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
    <hr>
      <div class="card">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="pejabat">
            <thead class="table-dark">
              <tr>
                <th>SATUAN KERJA</th>
                <th>PEJABAT</th>
                <th width="15%">TMT SK</th>
                <th width="15%">TMT PENSIUN</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($pejabat as $row) {?>
                <tr>
                  <td><?= $row->satuan_kerja;?></td>
                  <td>
                    <?php if($row->nama_lengkap){
                      echo '<b>'.$row->nama_lengkap.'</b><br>'.$row->nip_baru;
                    }else{
                      echo '-';
                    }?>
                  </td>
                  <td><?= ($row->tmt_pensiun)?date('d-m-Y', strtotime($row->tmt_sk_jab)):'-';?></td>
                  <td><?= ($row->tmt_pensiun)?date('d-m-Y', strtotime($row->tmt_pensiun)):'-';?></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#kategori').on('change', function(event) {
      window.location.replace("<?= site_url()?>manajemen/laporan/pejabat/"+$('#kategori').val());
    });
  });

</script>
<?= $this->endSection() ?>
