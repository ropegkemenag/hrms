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
                    <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Filters</a>
                </div>
            </div>
            <div class="collaps show" id="collapseExample">
              <form class="" action="<?= site_url('pegawai')?>" method="post">
                <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                  <div class="col">
                    <h6 class="text-uppercase fs-12 mb-2">Nama</h6>
                    <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama" value="<?= old('nama')?>">
                  </div>
                  <div class="col">
                    <h6 class="text-uppercase fs-12 mb-2">Satuan Kerja</h6>
                    <input type="text" class="form-control" placeholder="Nama Satuan Kerja" name="satker" value="<?= old('satker')?>">
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
