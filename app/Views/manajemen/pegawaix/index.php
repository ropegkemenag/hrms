<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Cari Pegawai</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">Starter</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Cari Pegawai</h5>
                <div>
                    <a href="javascript:new_link()" id="add-item" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Add Item</a>
                </div>
            </div>
            <div class="collaps show" id="collapseExample">
              <form class="" action="<?= site_url('pegawai')?>" method="post">
                <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                  <div class="col">
                    <h6 class="text-uppercase fs-12 mb-2">Column</h6>
                    <select class="form-select" name="column[]">
                      <option value="NIP_BARU">NIP BARU</option>
                      <option value="NAMA">NAMA</option>
                      <option value="AGAMA">AGAMA</option>
                      <option value="JENIS_KELAMIN">JENIS KELAMIN</option>
                      <option value="JENJANG_PENDIDIKAN">JENJANG PENDIDIKAN</option>
                      <option value="JABATAN">JABATAN</option>
                      <option value="PANGKAT">PANGKAT</option>
                      <option value="GOL_RUANG">GOLONGAN</option>
                      <option value="TMT_CPNS">TMT CPNS</option>
                      <option value="KETERANGAN">SATUAN KERJA</option>
                    </select>
                  </div>
                  <div class="col">
                    <h6 class="text-uppercase fs-12 mb-2">Operator</h6>
                    <select class="form-select" id="ColumnOperator0" name="operator[]">
                      <option value="=">=</option>
                      <option value=">">&gt;</option>
                      <option value=">=">&gt;=</option>
                      <option value="<">&lt;</option>
                      <option value="<=">&lt;=</option>
                      <option value="!=">!=</option>
                      <option value="LIKE">LIKE</option>
                      <option value="LIKE %...%">LIKE %...%</option>
                      <option value="NOT LIKE">NOT LIKE</option>
                      <option value="IN (...)">IN (...)</option>
                      <option value="NOT IN (...)">NOT IN (...)</option>
                      <option value="BETWEEN">BETWEEN</option>
                      <option value="NOT BETWEEN">NOT BETWEEN</option>
                      <option value="IS NULL">IS NULL</option>
                      <option value="IS NOT NULL">IS NOT NULL</option>
                    </select>
                  </div>
                  <div class="col">
                    <h6 class="text-uppercase fs-12 mb-2">value</h6>
                    <input type="text" class="form-control" placeholder="Nama Pegawai" name="value[]">
                  </div>
                  <div class="col">
                    <h6 class="text-uppercase fs-12 mb-2">&nbsp;</h6>
                    <input type="submit" name="submit" class="btn btn-primary" value="Cari">
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
    <?php if(isset($pegawai)){ ?>
      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Daftar Pencarian Pegawai</h5>
            </div>
        </div>
        <table class="table table-bordered table-striped" id="datatable">
          <thead>
            <tr>
              <th width="30px">NIP LAMA</th>
              <th>NIP BARU</th>
              <th>NAMA</th>
              <th>SATUAN KERJA</th>
              <th>VIEW</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pegawai as $row) {?>
              <tr>
                <td><?= $row->NIP?></td>
                <td><?= $row->NIP_BARU?></td>
                <td><?= $row->NAMA_LENGKAP?></td>
                <td><?= $row->KETERANGAN?></td>
                <td><a href="<?= site_url('pegawai/profil/'.encrypt($row->NIP_BARU))?>"> <i class="ri-search-eye-line"></i> </a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
  <?php } ?>
    </div>



  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
