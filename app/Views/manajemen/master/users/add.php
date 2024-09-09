<?= $this->extend('manajemen/template') ?>

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
                <div class="flex-grow-1">
                  <form class="" action="<?= site_url('pegawai')?>" method="post">
                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3">
                      <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">Kategori</h6>
                        <select class="form-select" name="kategori">
                          <option value="2">Satuan Kerja</option>
                          <option value="1">Kode</option>
                          <option value="3">Kode Atasan</option>
                        </select>
                      </div>
                      <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">Keyword</h6>
                        <input type="text" class="form-control" placeholder="Kata Kunci Pencarian" name="keyword" value="<?= old('keyword')?>">
                      </div>
                      <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">&nbsp;</h6>
                        <input type="submit" name="submit" class="btn btn-primary" value="Cari">
                      </div>
                    </div>
                  </form>
                </div>
                <div>
                    <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Tambah</a>
                </div>
            </div>
        </div>
    </div>
      <div class="card">
        <div class="card-header border-0">
            <div class="d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Cari Pegawai</h5>
            </div>
        </div>
        xxx
    </div>
    </div>
  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>
