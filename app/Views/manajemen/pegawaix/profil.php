<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="profile-foreground position-relative mx-n4 mt-n4">
      <div class="profile-wid-bg">
        <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
      </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
      <div class="row g-4">
        <div class="col-auto">
          <div class="avatar-lg">
            <img src="" id="pegawai-avatar" alt="user-img" class="img-thumbnail rounded-circle" />
          </div>
        </div>

        <div class="col">
          <div class="p-2">
            <h3 class="text-white mb-1"><?= $pegawai->NAMA_LENGKAP?></h3>
            <p class="text-white-75"><?= $pegawai->TAMPIL_JABATAN?></p>
            <div class="hstack text-white-50 gap-1">
              <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i><?= $pegawai->SATKER_3?></div>
              <div>
                <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i><?= $pegawai->SATKER_4?>
              </div>
              <div>
                <i class="ri-file-mark-line me-1 text-white-75 fs-16 align-middle"></i><?= $pegawai->PENDIDIKAN?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-auto order-last order-lg-0">
          <div class="row text text-white-50 text-center">
            <div class="col-lg-12 col-4">
              <div class="p-2">
                <h4 class="text-white mb-1"><?= $pegawai->STATUS_PEGAWAI?></h4>
                <p class="fs-14 mb-0">Jenis Pegawai</p>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!--end row-->
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div>
          <div class="d-flex">
            <!-- Nav tabs -->
            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                  <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Data SIMPEG</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                  <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Data SAPK</span>
                </a>
              </li>
            </ul>
            <div class="flex-shrink-0">
              <!-- <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a> -->
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content pt-4 text-muted">
            <div class="tab-pane active" id="overview-tab" role="tabpanel">
              <div class="row">
                <div class="col-xxl-3">
                  <!-- <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-5">Kelengkapan Data</h5>
                      <div class="progress animated-progress custom-progress progress-label">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                          <div class="label">30%</div>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-3">Info</h5>
                      <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                          <tbody>
                            <tr>
                              <th class="ps-0 col-3" scope="row">Mobile</th>
                              <td class="text-muted"><?= $pegawai->NO_HP?></td>
                            </tr>
                            <tr>
                              <th class="ps-0" scope="row">E-mail</th>
                              <td class="text-muted"><?= $pegawai->EMAIL?></td>
                            </tr>
                            <tr>
                              <th class="ps-0" scope="row">Address</th>
                              <td class="text-muted"><?= $pegawai->ALAMAT_1.' '.$pegawai->ALAMAT_2.' '.$pegawai->KAB_KOTA.' '.$pegawai->PROVINSI?>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-3">Info Bank</h5>
                      <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                          <tbody>
                            <tr>
                              <th class="ps-0" scope="row">NPWP</th>
                              <td class="text-muted">: </td>
                            </tr>
                            <tr>
                              <th class="ps-0" scope="row">Bank</th>
                              <td class="text-muted">: </td>
                            </tr>
                            <tr>
                              <th class="ps-0" scope="row">Nama</th>
                              <td class="text-muted">: </td>
                            </tr>
                            <tr>
                              <th class="ps-0" scope="row">Norek</th>
                              <td class="text-muted">: </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div> -->

                  <!-- <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Sosial Media</h5>
                      <div class="d-flex flex-wrap gap-2">
                        <div>
                          <a href="javascript:void(0);" class="avatar-xs d-block">
                            <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                              <i class="ri-github-fill"></i>
                            </span>
                          </a>
                        </div>
                        <div>
                          <a href="javascript:void(0);" class="avatar-xs d-block">
                            <span class="avatar-title rounded-circle fs-16 bg-primary">
                              <i class="ri-global-fill"></i>
                            </span>
                          </a>
                        </div>
                        <div>
                          <a href="javascript:void(0);" class="avatar-xs d-block">
                            <span class="avatar-title rounded-circle fs-16 bg-success">
                              <i class="ri-dribbble-fill"></i>
                            </span>
                          </a>
                        </div>
                        <div>
                          <a href="javascript:void(0);" class="avatar-xs d-block">
                            <span class="avatar-title rounded-circle fs-16 bg-danger">
                              <i class="ri-pinterest-fill"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <!-- <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Skills</h5>
                      <div class="d-flex flex-wrap gap-2 fs-15">
                        <a href="javascript:void(0);" class="badge badge-soft-primary">Photoshop</a>
                        <a href="javascript:void(0);" class="badge badge-soft-primary">illustrator</a>
                        <a href="javascript:void(0);" class="badge badge-soft-primary">HTML</a>
                        <a href="javascript:void(0);" class="badge badge-soft-primary">CSS</a>
                        <a href="javascript:void(0);" class="badge badge-soft-primary">Javascript</a>
                        <a href="javascript:void(0);" class="badge badge-soft-primary">Php</a>
                        <a href="javascript:void(0);" class="badge badge-soft-primary">Python</a>
                      </div>
                    </div>
                  </div> -->
                </div>

                <div class="col-xxl-9">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-3">Data Diri</h5>
                      <div class="table-responsive">
                        <table class="table">
                          <tr>
                            <td class="table-active fw-medium">Nama</td>
                            <td>: <?= $pegawai->NAMA_LENGKAP?></td>
                            <td class="table-active fw-medium">NIP Lama</td>
                            <td>: <?= $pegawai->NIP?></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">Tempat Lahir</td>
                            <td>: <?= $pegawai->TEMPAT_LAHIR?></td>
                            <td class="table-active fw-medium">NIP Baru</td>
                            <td>: <?= $pegawai->NIP_BARU?></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">Tanggal Lahir</td>
                            <td>: <?= read_date($pegawai->TANGGAL_LAHIR)?></td>
                            <td class="table-active fw-medium">Status Kepegawaian</td>
                            <td>: <?= $pegawai->STATUS_PEGAWAI?></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">Jenis Kelamin</td>
                            <td>: <?= gender($pegawai->JENIS_KELAMIN)?></td>
                            <td class="table-active fw-medium">Jenis Kepegawaian</td>
                            <td>:</td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">Agama</td>
                            <td>: <?= $pegawai->AGAMA?></td>
                            <td class="table-active fw-medium">Jabatan</td>
                            <td>: <?= $pegawai->TAMPIL_JABATAN?></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">Status Perkawinan</td>
                            <td>: <?= $pegawai->STATUS_KAWIN?></td>
                            <td class="table-active fw-medium"></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">Masa Kerja</td>
                            <td>: <?= $pegawai->MK_TAHUN_1.' Thn '.$pegawai->MK_BULAN_1.' Bln'?></td>
                            <td class="table-active fw-medium">Tanggal TMT CPNS</td>
                            <td>: <?= read_date($pegawai->TMT_CPNS)?></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">KP Selanjutnya</td>
                            <td>: <?= read_date($pegawai->tmt_pangkat_yad)?></td>
                            <td class="table-active fw-medium">Tanggal TMT PNS</td>
                            <td>: <?= $pegawai->TAMPIL_JABATAN?></td>
                          </tr>
                          <tr>
                            <td class="table-active fw-medium">KGB Selanjutnya</td>
                            <td>: <?= read_date($pegawai->tmt_kgb_yad)?></td>
                            <td class="table-active fw-medium">Tanggal Pensiun</td>
                            <td>: <?= read_date($pegawai->TMT_PENSIUN)?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header align-items-center d-flex">
                          <h4 class="card-title mb-0  me-2">Data Utama</h4>
                          <div class="">
                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist" id="datautama">
                              <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#pendidikan" role="tab" data-url="<?= site_url('pegawai/profil/pendidikan/'.encrypt($pegawai->NIP))?>">
                                  Pendidikan
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#pekerjaan" role="tab" data-url="<?= site_url('pegawai/profil/pekerjaan/'.encrypt($pegawai->NIP))?>">
                                  Pekerjaan
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#indisiplin" role="tab" data-url="<?= site_url('pegawai/profil/indisiplin/'.encrypt($pegawai->NIP))?>">
                                  Indisiplin
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#skp" role="tab" data-url="<?= site_url('pegawai/profil/skp/'.encrypt($pegawai->NIP))?>">
                                  SKP
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kgb" role="tab" data-url="<?= site_url('pegawai/profil/kgb/'.encrypt($pegawai->NIP))?>">
                                  KGB
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="tab-content text-muted">
                            <div class="tab-pane active" id="pendidikan" role="tabpanel">
                              <p class="card-text placeholder-glow">
                                  <span class="placeholder col-7"></span>
                                  <span class="placeholder col-4"></span>
                                  <span class="placeholder col-4"></span>
                                  <span class="placeholder col-6"></span>
                              </p>
                            </div>
                            <div class="tab-pane" id="pekerjaan" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="indisiplin" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="skp" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="kgb" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header align-items-center d-flex">
                          <h4 class="card-title mb-0  me-2">Data Dukung</h4>
                          <div class="">
                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist" id="datadukung">
                              <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#alamat" role="tab" data-url="<?= site_url('pegawai/profil/alamat/'.encrypt($pegawai->NIP))?>">
                                  Alamat
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#keluarga" role="tab" data-url="<?= site_url('pegawai/profil/keluarga/'.encrypt($pegawai->NIP))?>">
                                  Keluarga
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#organisasi" role="tab" data-url="<?= site_url('pegawai/profil/organisasi/'.encrypt($pegawai->NIP))?>">
                                  Organisasi
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#penelitian" role="tab" data-url="<?= site_url('pegawai/profil/penelitian/'.encrypt($pegawai->NIP))?>">
                                  Penelitian
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tandajasa" role="tab" data-url="<?= site_url('pegawai/profil/tandajasa/'.encrypt($pegawai->NIP))?>">
                                  Tanda Jasa
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#pengalaman" role="tab" data-url="<?= site_url('pegawai/profil/pengalaman/'.encrypt($pegawai->NIP))?>">
                                  Pengalaman
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="tab-content text-muted">
                            <div class="tab-pane active" id="alamat" role="tabpanel">

                            </div>
                            <div class="tab-pane" id="keluarga" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="organisasi" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="penelitian" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="tandajasa" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                            <div class="tab-pane" id="pengalaman" role="tabpanel">
                              <p class="card-text placeholder-glow">
    <span class="placeholder col-7"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-4"></span>
    <span class="placeholder col-6"></span>
</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- end col -->
                  </div>

                </div>

              </div>
              <!--end row-->
            </div>
          </div>
          <!--end tab-content-->
        </div>
      </div>

    </div>
    <!--end row-->

  </div><!-- container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
$(document).ready(function() {
  $.get('https://ropeg.kemenag.go.id/api/webview/avatar/index/<?= $pegawai->NIP?>', function(res){
    $('#pegawai-avatar').attr('src',res);
  });
});

$('#datautama a').click(function (e) {
	e.preventDefault();

	var url = $(this).attr("data-url");

  	var href = this.hash;
  	var pane = $(this);
    console.log(url);

	// ajax load from data-url
	$(href).load(url,function(result){
	    pane.tab('show');
	});
});

$('#datadukung a').click(function (e) {
	e.preventDefault();

	var url = $(this).attr("data-url");

  	var href = this.hash;
  	var pane = $(this);
    console.log(url);

	// ajax load from data-url
	$(href).load(url,function(result){
	    pane.tab('show');
	});
});

// load first tab content
$('#pendidikan').load($('#datautama .active').attr("data-url"));
$('#alamat').load($('#datadukung .active').attr("data-url"));

</script>
<?= $this->endSection() ?>
