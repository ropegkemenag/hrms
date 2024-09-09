<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">


    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="text-center mb-5">
          <h3 class="mb-3 fw-semibold">Dashboard <span class="text-danger">Kepegawaian</span></h3>
          <p class="text-muted mb-4 ff-secondary">Sistem Informasi Kepegawaian</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="avatar-sm flex-shrink-0">
                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                  <i class="ri-shield-user-line align-middle"></i>
                </span>
              </div>
              <div class="flex-grow-1 ms-3">
                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Jumlah Pegawai</p>
                <h4 class=" mb-0"><span class="counter-value" data-target="<?= rupiah($djk[0]->JUMLAH + $djk[1]->JUMLAH) ?>">0</span></h4>
              </div>
            </div>
          </div><!-- end card body -->
        </div>

        <div class="card">
          <div class="card-header border-0 align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Berdasarkan Jenis Kelamin</h4>
          </div>
          <div class="card-body">
            <div id="gender" data-colors='["--vz-primary", "--vz-warning"]' class="apex-charts" dir="ltr"></div>

          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-height-100">
          <div class="card-header border-0 align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Berdasarkan Agama</h4>
          </div><!-- end cardheader -->
          <div class="card-body">
            <div id="agama" data-colors='["--vz-primary", "--vz-warning"]' class="apex-charts" dir="ltr"></div>

          </div><!-- end card body -->
        </div><!-- end card -->
      </div>
      <div class="col-lg-3">

      </div>
    </div>

    <div class="row">
      <div class="col-xxl-12 order-xxl-0 order-first">
        <div class="d-flex flex-column h-100">
          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header border-0 align-items-center d-flex">
                  <h4 class="card-title mb-0 flex-grow-1">Berdasarkan Jabatan</h4>
                </div>
                <div class="card-body p-0 pb-3">
                  <div id="chartjab" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end cardbody -->
              </div><!-- end card -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div>
      </div><!-- end col -->
    </div><!-- end row -->

  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/js/pages/dashboard-crypto.init.js"></script>
<script>
$(document).ready(function() {
  var options = {
    series: [<?= rupiah($djk[0]->JUMLAH) ?>, <?= rupiah($djk[1]->JUMLAH) ?>],
    labels: ["Perempuan", "Laki-Laki"],
    chart: {
      type: "donut",
      height: 224
    },
    plotOptions: {
      pie: {
        size: 100,
        offsetX: 0,
        offsetY: 0,
        donut: {
          size: "70%",
          labels: {
            show: !0,
            name: {
              show: !0,
              fontSize: "18px",
              offsetY: -5
            },
            value: {
              show: !0,
              fontSize: "20px",
              color: "#343a40",
              fontWeight: 500,
              offsetY: 5,
              formatter: function(e) {
                return e
              }
            },
            total: {
              show: !0,
              fontSize: "13px",
              label: "Total Pegawai",
              color: "#9599ad",
              fontWeight: 500,
              formatter: function(e) {
                return e.globals.seriesTotals.reduce(function(e, t) {
                  return e + t
                }, 0)
              }
            }
          }
        }
      }
    },
    dataLabels: {
      enabled: !1
    },
    legend: {
      show: !1
    },
    yaxis: {
      labels: {
        formatter: function(e) {
          return e
        }
      }
    },
    stroke: {
      lineCap: "round",
      width: 2
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  };

  var chart = new ApexCharts(document.querySelector("#gender"), options);
  chart.render();

  var optjab = {
    series: [{
      name: 'Pegawai',
      data: [
        <?php
        $no = 1;
        foreach($djab as $row){
          $koma = ($no > 1)?',':'';
          echo $koma.$row->JUMLAH;
          $no++;
        }?>
      ]
    }],
    chart: {
      height: 350,
      type: 'bar',
    },
    plotOptions: {
      bar: {
        borderRadius: 10,
        dataLabels: {
          position: 'top', // top, center, bottom
        },
      }
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val;
      },
      offsetY: -20,
      style: {
        fontSize: '12px',
        colors: ["#304758"]
      }
    },

    xaxis: {
      labels: {
        rotate: -45
      },
      categories: [
        <?php
        $no = 1;
        foreach($djab as $row){
          $koma = ($no > 1)?',':'';
          echo $koma.'"'.$row->LEVEL_JABATAN.'"';
          $no++;
        }?>
      ],
      position: 'bottom',
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      crosshairs: {
        fill: {
          type: 'gradient',
          gradient: {
            colorFrom: '#D8E3F0',
            colorTo: '#BED1E6',
            stops: [0, 100],
            opacityFrom: 0.4,
            opacityTo: 0.5,
          }
        }
      },
      tooltip: {
        enabled: true,
      }
    },
    yaxis: {
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
        formatter: function (val) {
          return val;
        }
      }

    },
    title: {
      text: 'Jumlah Pegawai Berdasarkan Jabatan',
      floating: true,
      offsetY: 330,
      align: 'center',
      style: {
        color: '#444'
      }
    }
  };

  var chartjab = new ApexCharts(document.querySelector("#chartjab"), optjab);
  chartjab.render();

  var optagama = {
    series: [{
      data: [
        <?php
        $no = 1;
        foreach($dagama as $row){
          $koma = ($no > 1)?',':'';
          echo $koma.$row->JUMLAH;
          $no++;
        }?>
      ]
    }],
    chart: {
      type: 'bar',
      height: 350
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        horizontal: true,
      }
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val;
      },
      style: {
        fontSize: '12px',
        colors: ["#304758"]
      }
    },
    xaxis: {
      categories: [
        <?php
        $no = 1;
        foreach($dagama as $row){
          $koma = ($no > 1)?',':'';
          echo $koma.'"'.$row->AGAMA.'"';
          $no++;
        }?>
      ],
    }
  };

  var chartagama = new ApexCharts(document.querySelector("#agama"), optagama);
  chartagama.render();
} );
</script>
<?= $this->endSection() ?>
