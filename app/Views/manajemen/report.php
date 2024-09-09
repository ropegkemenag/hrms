<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-layout-style="default" data-layout-mode="light" data-layout-width="fluid" data-layout-position="fixed">
<head>

  <meta charset="utf-8" />
  <title>HRMS | Kementerian Agama RI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Sistem Informasi Kepegawaian Kementerian Agama RI" name="description" />
  <meta content="Danunih" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/images/favicon.ico">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
  <!--datatable responsive css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

  <!-- Layout config Js -->
  <script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

  <style media="screen">
    .agama-bg {
      background-image: url(https://pusaka.kemenag.go.id/mobile/assets/images/banner/ilustrasi_atas.webp);
      background-position: bottom;
      background-size: auto;
      background-repeat: no-repeat;
      padding-bottom: 50px;
    }
  </style>
</head>

<body>
  <div id="layout-wrapper">
    <div class="vertical-overlay"></div>

    <div class="main-content">
      <div class="pt-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex profile-wrapper">
                <ul class="nav nav-tabs nav-border-top nav-border-top-primary mb-3" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#nav-border-top-home" role="tab" aria-selected="false">
                      Dashboard
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#nav-pejabat" role="tab" aria-selected="false">
                      Pejabat
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-messages" role="tab" aria-selected="false">
                      Messages
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-settings" role="tab" aria-selected="true">
                      Settings
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="tab-content text-muted">
                <div class="tab-pane active" id="nav-border-top-home" role="tabpanel">
                  <div class="row">
                    <div class="col-xxl-3">
                      <div class="card card-height-100">
                        <div class="card-header border-0 align-items-center d-flex">
                          <h4 class="card-title mb-0 flex-grow-1">Jenis Kelamin</h4>
                        </div>
                        <div class="card-body">
                          <div id="jkchart" data-colors='' class="apex-charts" dir="ltr"></div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xxl-9 order-xxl-0 order-first">
                      <div class="d-flex flex-column h-100">
                        <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                      <i class="ri-file-user-line align-middle"></i>
                                    </span>
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Jumlah Pegawai</p>
                                    <h4 class=" mb-0"><span class="counter-value" data-target="<?= rupiah($djk[0]->JUMLAH + $djk[1]->JUMLAH) ?>"><?= rupiah($djk[0]->JUMLAH + $djk[1]->JUMLAH) ?></span></h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                      <i class="ri-arrow-up-circle-fill align-middle"></i>
                                    </span>
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Change</p>
                                    <h4 class=" mb-0">$<span class="counter-value" data-target="19523.25">0</span></h4>
                                  </div>
                                  <div class="flex-shrink-0 align-self-end">
                                    <span class="badge bg-success-subtle text-success"><i class="ri-arrow-up-s-fill align-middle me-1"></i>3.67 %<span> </span></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                      <i class="ri-arrow-up-circle-fill align-middle"></i>
                                    </span>
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Change</p>
                                    <h4 class=" mb-0">$<span class="counter-value" data-target="19523.25">0</span></h4>
                                  </div>
                                  <div class="flex-shrink-0 align-self-end">
                                    <span class="badge bg-success-subtle text-success"><i class="ri-arrow-up-s-fill align-middle me-1"></i>3.67 %<span> </span></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-xl-8">
                            <div class="card">
                              <div class="card-header border-0 align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Data Jabatan</h4>
                              </div>
                              <div class="card-body">
                                <table class="table" id="datatable">
                                  <thead>
                                    <tr>
                                      <th>Grup Jabatan</th>
                                      <th>Jumlah Pegawai</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($djab as $row) {?>
                                      <tr>
                                        <td width="50%"><?= $row->LEVEL_JABATAN?></td>
                                        <td><?= rupiah($row->JUMLAH)?></td>
                                      </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4">
                            <div class="card card-height-100">
                              <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Berdasarkan Agama</h4>
                              </div>

                              <div class="card-body p-0 agama-bg">
                                <!-- <div class="row align-items-center">
                                  <div class="text-center">
                                    <img src="https://pusaka.kemenag.go.id/mobile/assets/images/banner/ilustrasi_atas.webp" class="img-fluid" alt="">
                                  </div>
                                </div> -->
                                <table class="table table-bordered table-striped m-2 mb-10">
                                  <thead>
                                    <tr>
                                      <th>Agama</th>
                                      <th>Jumlah</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($dagama as $row) {?>
                                      <tr>
                                        <td width="50%"><?= $row->AGAMA?></td>
                                        <td><?= rupiah($row->JUMLAH)?></td>
                                      </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="nav-pejabat" role="tabpanel">
                  <div class="card">
                      <div class="card-body">
                        <select class="form-select" name="kategori" id="kategoripejabat">
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
                  </div>

                  <div class="card">
                    <div class="card-body">
                        <div id="pejabat-list">
                            <div class="row mb-2">
                                <div class="col">
                                    <div>
                                        <input class="search form-control" placeholder="Search" />
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-light sort" data-sort="contact-name">
                                        Sort by name
                                    </button>
                                </div>
                            </div>

                            <div data-simplebar style="height: 350px;" class="mx-n3">
                                <ul class="list list-group list-group-flush mb-0">
                                    <li class="list-group-item pagi-list">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div>
                                                    <img class="image avatar-xs rounded-circle" alt="" src="assets/images/users/avatar-1.jpg">
                                                </div>
                                            </div>

                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="contact-name fs-13 mb-1"><a href="#" class="link nama">Jonny Stromberg</a></h5>
                                                <p class="satuan_kerja text-muted mb-0">New updates for ABC Theme</p>
                                            </div>

                                            <div class="flex-shrink-0 ms-2">
                                                <div class="fs-11 text-muted tmt_sk_jab">06 min</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="nav-border-top-messages" role="tabpanel">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <i class="ri-checkbox-circle-line text-success"></i>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                      <div class="mt-2">
                        <a href="javascript:void(0);" class="btn btn-link">Read More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="nav-border-top-settings" role="tabpanel">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <i class="ri-checkbox-circle-line text-success"></i>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the.
                      <div class="mt-2">
                        <a href="javascript:void(0);" class="btn btn-link">Read More <i class="ri-arrow-right-line ms-1 align-middle"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>



      </div>
      <!-- container-fluid -->
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <script>document.write(new Date().getFullYear())</script> © HRMS.
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block">
              <img src="https://ropeg.kemenag.go.id/logo-ropeg.png" width="100px" alt="">
              by Biro Kepegawaian
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>

<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
  <i class="ri-arrow-up-line"></i>
</button>

<div id="preloader">
  <div id="status">
    <div class="spinner-border text-primary avatar-sm" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
</div>

<!-- JAVASCRIPT -->
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/simplebar/simplebar.min.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/node-waves/waves.min.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/feather-icons/feather.min.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/plugins.js"></script>

<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- App js -->
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>\
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#datatable').dataTable({
    pageLength: 5
  });

  getPejabat(1);

  $('#kategoripejabat').on('change',function(event) {
    getPejabat($('#kategoripejabat').val());
  });
});

function getPejabat(id) {
  axios.get('report/getpejabat/'+id)
  .then(function (response) {

    var pejabatlist = new List("pejabat-list",{
        valueNames: ['nama','satuan_kerja','tmt_sk_jab',{ attr: 'src', name: 'image' }]
    });

    pejabatlist.clear();
    // pejabatlist.add(response.data);

    $.each( response.data, function( i, val ) {
      pejabatlist.add({nama:val.nama_lengkap,satuan_kerja:val.satuan_kerja,tmt_sk_jab:val.tmt_sk_jab,image:'https://simpeg.kemenag.go.id/laporan/views.ashx?jn=0&ImID='+val.nip});
    });
  })
  .catch(function (error) {
    alert('Unable to load data');
  });
}

var options = {
  series:[<?= $djk[1]->JUMLAH ?>,<?= $djk[0]->JUMLAH ?>],
  labels:["Laki-Laki","Perempuan"],
  chart:{type:"donut",height:224},
  plotOptions:{
    pie:{
      size:100,
      offsetX:0,
      offsetY:0,
      donut:{
        size:"70%",
        labels:{
          show:!0,
          name:{
            show:!0,
            fontSize:"18px",
            offsetY:-5
          },
          value:{
            show:!0,
            fontSize:"20px",
            color:"#343a40",
            fontWeight:500,
            offsetY:5,
            formatter:function(e){
              return e
            }
          },
          total:{
            show:!0,
            fontSize:"13px",
            label:"Jumlah",
            color:"#9599ad",
            fontWeight:500,
            formatter:function(e){
              return e.globals.seriesTotals.reduce(function(e,t){
                return e+t
              },
              0
            )}
          }
        }
      }
    }
  },
  dataLabels:{
    enabled:!1
  },
  legend:{
    show:!1
  },
  yaxis:{
    labels:{
      formatter:function(e){
        return e
      }
    }
  },
  stroke:{
    lineCap:"round",width:2
  }
};

var chart = new ApexCharts(document.querySelector("#jkchart"), options);
chart.render();
</script>
</body>

</html>
