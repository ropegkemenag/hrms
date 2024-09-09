<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">


    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="text-center mb-5">
          <h3 class="mb-3 fw-semibold">Sebaran <span class="text-danger">Unit Kerja</span></h3>
          <p class="text-muted mb-4 ff-secondary">Kementerian Agama RI.</p>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="card card-height-100">
                <div id='map'></div>
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

  </div>
  <!-- container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<style>
		#map {
			width: 100%;
			height: 500px;
		}
	</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<link rel="stylesheet" href="https://opengeo.tech/maps/leaflet-search/src/leaflet-search.css">
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://opengeo.tech/maps/leaflet-search/src/leaflet-search.js"></script>

<script type="text/javascript">
var data = [
  <?php
 foreach ($lokasi as $row) {
  echo '{"loc":['.str_replace(' ','',$row->LAT).','.str_replace(' ','',$row->LON).'], "title":"'.$row->SATUAN_KERJA.'"},';
 }
 ?>
];

var map = new L.Map('map', {zoom: 9, center: new L.latLng(data[0].loc) });	//set center from first location

map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

var markersLayer = new L.LayerGroup();	//layer contain searched elements

map.addLayer(markersLayer);

var controlSearch = new L.Control.Search({
  position:'topright',
  layer: markersLayer,
  initial: false,
  zoom: 12
});

map.addControl( controlSearch );

////////////populate map with markers from sample data
for(i in data) {
  var title = data[i].title,	//value searched
    loc = data[i].loc,		//position found
    marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
  marker.bindPopup('Nama: '+ title );
  markersLayer.addLayer(marker);
}
</script>
<?= $this->endSection() ?>
