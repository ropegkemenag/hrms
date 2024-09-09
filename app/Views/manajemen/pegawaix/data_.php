<?= $this->extend('template') ?>

<?= $this->section('style') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?= $this->endSection() ?>

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
                <h5 class="card-title mb-0 flex-grow-1">Explore Pegawai</h5>
                <div>
                    <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Filters</a>
                </div>
            </div>
            <div class="collaps show" id="collapseExample">
                <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3" id="selectsatker">
                    <div class="col">
                        <h6 class="text-uppercase fs-12 mb-2">Satker</h6>
                        <select class="form-control select2" name="satker1" id="satker1">
                            <option value="">Pilih Satker</option>
                            <option value="01020000000000">Sekretariat Jenderal</option>
                            <option value="01030000000000">Direktorat Jenderal Pendidikan Islam</option>
                            <option value="01040000000000">Direktorat Jenderal Bimbingan Masyarakat Islam</option>
                            <option value="01050000000000">Direktorat Jenderal Bimbingan Masyarakat Kristen</option>
                            <option value="01060000000000">Direktorat Jenderal Bimbingan Masyarakat Katolik</option>
                            <option value="01070000000000">Direktorat Jenderal Bimbingan Masyarakat Hindu</option>
                            <option value="01080000000000">Direktorat Jenderal Bimbingan Masyarakat Buddha</option>
                            <option value="01090000000000">Direktorat Jenderal Penyelenggaraan Haji dan Umrah</option>
                            <option value="01100000000000">Inspektorat Jenderal</option>
                            <option value="01110000000000">Badan Litbang dan Diklat</option>
                            <option value="01120000000000">Badan Penyelenggara Jaminan Produk Halal</option>
                            <option value="11000000000000">Universitas Islam Negeri (UIN)</option>
                            <option value="12000000000000">Universitas Hindu Negeri (UHN)</option>
                            <option value="02000000000000">Kanwil Kementerian Agama Provinsi</option>
                            <option value="04000000000000">Institut Agama Islam Negeri (IAIN)</option>
                            <option value="15000000000000">Institut Agama Kristen Negeri (IAKN)</option>
                            <option value="16000000000000">Institut Agama Hindu Negeri (IAHN)</option>
                            <option value="05000000000000">Sekolah Tinggi Agama Islam Negeri (STAIN)</option>
                            <option value="06000000000000">Sekolah Tinggi Agama Kristen Negeri (STAKN)</option>
                            <option value="07000000000000">Sekolah Tinggi Agama Hindu Negeri (STAHN)</option>
                            <option value="08000000000000">Sekolah Tinggi Agama Buddha Negeri (STABN)</option>
                            <option value="14000000000000">Sekolah Tinggi Agama Katolik Negeri (STAKATN)</option>
                            <option value="09000000000000">Balai Litbang Agama</option>
                            <option value="10000000000000">Balai Diklat Keagamaan</option>
                            <option value="13000000000000">Unit Pelaksana Teknis Asrama Haji Embarkasi</option>
                        </select>
                    </div>
                    <div class="col" id="selectsatker2" style="display:none">
                        <h6 class="text-uppercase fs-12 mb-2">Satker</h6>
                        <select class="form-select select2" name="satker2" id="satker2">
                            <option value="">Pilih Satker</option>
                        </select>
                    </div>
                    <div class="col" id="selectsatker3" style="display:none">
                        <h6 class="text-uppercase fs-12 mb-2">Satker</h6>
                        <select class="form-select" data-choices name="all-sales-type" data-choices-search-false name="satker3" id="satker3">
                            <option value="">Pilih Satker</option>
                        </select>
                    </div>
                    <div class="col" id="selectsatker3" style="display:none">
                        <h6 class="text-uppercase fs-12 mb-2">Satker</h6>
                        <select class="form-select" data-choices name="all-sales-type" data-choices-search-false name="satker4" id="satker4">
                            <option value="">Pilih Satker</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card crm-widget">
        <div class="card-body p-0">
            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                <div class="col">
                    <div class="py-4 px-3">
                        <h5 class="text-muted text-uppercase fs-13">Jumlah Pegawai <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="ri-space-ship-line display-6 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="mb-0"><span class="counter-value" data-target="0" id="jumlahpegawai">0</span></h2>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col">
                    <div class="mt-3 mt-md-0 py-4 px-3">
                        <h5 class="text-muted text-uppercase fs-13">Annual Profit <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="mb-0">$<span class="counter-value" data-target="489.4">489.4</span>k</h2>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col">
                    <div class="mt-3 mt-md-0 py-4 px-3">
                        <h5 class="text-muted text-uppercase fs-13">Lead Coversation <i class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i></h5>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="ri-pulse-line display-6 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="mb-0"><span class="counter-value" data-target="32.89">32.89</span>%</h2>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col">
                    <div class="mt-3 mt-lg-0 py-4 px-3">
                        <h5 class="text-muted text-uppercase fs-13">Daily Average Income <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i></h5>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="ri-trophy-line display-6 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="mb-0">$<span class="counter-value" data-target="1596.5">1,596.5</span></h2>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col">
                    <div class="mt-3 mt-lg-0 py-4 px-3">
                        <h5 class="text-muted text-uppercase fs-13">Annual Deals <i class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i></h5>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="ri-service-line display-6 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h2 class="mb-0"><span class="counter-value" data-target="2659">2,659</span></h2>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end card body -->
    </div>
    </div>
  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".select2").select2()
    $('#satker1').on('change', function(event) {
      getsatker($('#satker1').val());
      $('#selectsatker2').css('display','');
    });

    $('#satker2').on('change', function(event) {
      getsatker($('#satker2').val());
      $('#selectsatker3').css('display','');
    });
  });

  function getsatker($id) {
    axios.get('/pegawai/getcountsatker/'+$id)
    .then(function (response) {
      $('#jumlahpegawai').html(response.data);
    });
  }
</script>
<?= $this->endSection() ?>
