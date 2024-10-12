<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">

  <div class="row g-6">
<!-- Card Border Shadow -->
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-primary h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-primary"><i class='ti ti-truck ti-28px'></i></span>
        </div>
        <h4 class="mb-0">42</h4>
      </div>
      <p class="mb-1">On route vehicles</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">+18.2%</span>
        <small class="text-muted">than last week</small>
      </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-warning h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-warning"><i class='ti ti-alert-triangle ti-28px'></i></span>
        </div>
        <h4 class="mb-0">8</h4>
      </div>
      <p class="mb-1">Vehicles with errors</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">-8.7%</span>
        <small class="text-muted">than last week</small>
      </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-danger h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-danger"><i class='ti ti-git-fork ti-28px'></i></span>
        </div>
        <h4 class="mb-0">27</h4>
      </div>
      <p class="mb-1">Deviated from route</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">+4.3%</span>
        <small class="text-muted">than last week</small>
      </p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-sm-6">
  <div class="card card-border-shadow-info h-100">
    <div class="card-body">
      <div class="d-flex align-items-center mb-2">
        <div class="avatar me-4">
          <span class="avatar-initial rounded bg-label-info"><i class='ti ti-clock ti-28px'></i></span>
        </div>
        <h4 class="mb-0">13</h4>
      </div>
      <p class="mb-1">Late vehicles</p>
      <p class="mb-0">
        <span class="text-heading fw-medium me-2">-2.5%</span>
        <small class="text-muted">than last week</small>
      </p>
    </div>
  </div>
</div>

<div class="col-xxl-4 col-lg-6">
  <div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
      <div class="card-title mb-0">
        <h5 class="m-0 me-2">Reasons for delivery exceptions</h5>
      </div>
      <div class="dropdown">
        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="gender" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="ti ti-dots-vertical ti-md text-muted"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
          <a class="dropdown-item" href="javascript:void(0);">Share</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div id="deliveryExceptionsChart"></div>
    </div>
  </div>
</div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="https://d2mj1s7x3czrue.cloudfront.net/hrms/assets/libs/apexcharts/apexcharts.min.js"></script>
<script>
$(document).ready(function() {
  var i={donut:{series1:config.colors.success,series2:"#53D28C",series3:"#7EDDA9",series4:"#A9E9C5"}};
  var options = {
    chart:{
      height:420,
      parentHeightOffset:0,
      type:"donut"
    },
    labels:["Incorrect address","Weather conditions","Federal Holidays","Damage during transit"],
    series:[13,25,22,40],
    colors:[i.donut.series1,i.donut.series2,i.donut.series3,i.donut.series4],
    stroke:{width:0},
    dataLabels:{
      enabled:!1,
      formatter:function(e,t){
        return parseInt(e)+"%"
      }
    },
    legend:{
      show:!0,
      position:"bottom",
      offsetY:10,
      markers:{
        width:8,height:8,offsetX:-3
      },
      itemMargin:{
        horizontal:15,
        vertical:5
      },
      fontSize:"13px",
      fontFamily:"Public Sans",
      fontWeight:400,
      labels:{colors:o,useSeriesColors:!1}
    },
    tooltip:{theme:!1},
    grid:{
      padding:{top:15}
    },
    plotOptions:{
      pie:{
        donut:{
          size:"77%",labels:{
            show:!0,value:{
              fontSize:"24px",fontFamily:"Public Sans",color:o,fontWeight:500,offsetY:-20,formatter:function(e){
                return parseInt(e)+"%"
              }
            },
            name:{
              offsetY:30,fontFamily:"Public Sans"
            },
            total:{
              show:!0,fontSize:"15px",fontFamily:"Public Sans",color:s,label:"AVG. Exceptions",formatter:function(e){return"30%"}
            }
          }
        }
      }
    }
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
