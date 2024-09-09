<?= $this->extend('manajemen/template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Pengolahan Data</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
              <li class="breadcrumb-item active">Starter</li>
            </ol>
          </div>

        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card card-body">
          <select class="form-control" name="source" id="source">
            <optgroup label="GRUP Eselon I">
              <option value="01">Kementerian Agama Pusat</option>
              <option value="13">Unit Pelaksana Teknis Asrama Haji Embarkasi</option>
              <option value="02">Kanwil Kementerian Agama Provinsi</option>
              <option value="11">Universitas Islam Negeri (UIN)</option>
              <option value="04">Institut Agama Islam Negeri (IAIN)</option>
              <option value="16">Institut Agama Hindu Negeri (IAHN)</option>
              <option value="15">Institut Agama Kristen Negeri (IAKN)</option>
              <option value="12">Institut Hindu Dharma Negeri (IHDN)</option>
              <option value="08">Sekolah Tinggi Agama Buddha Negeri (STABN)</option>
              <option value="07">Sekolah Tinggi Agama Hindu Negeri (STAHN)</option>
              <option value="05">Sekolah Tinggi Agama Islam Negeri (STAIN)</option>
              <option value="14">Sekolah Tinggi Agama Katolik Negeri (STAKATN)</option>
              <option value="06">Sekolah Tinggi Agama Kristen Negeri (STAKN)</option>
              <option value="10">Balai Diklat Keagamaan</option>
            </optgroup>
            <optgroup label="Eselon I Pusat">
              <option value="0102">Sekretariat Jenderal</option>
              <option value="0110">Inspektorat Jenderal</option>
              <option value="0108">Direktorat Jenderal Bimbingan Masyarakat Buddha</option>
              <option value="0107">Direktorat Jenderal Bimbingan Masyarakat Hindu</option>
              <option value="0104">Direktorat Jenderal Bimbingan Masyarakat Islam</option>
              <option value="0106">Direktorat Jenderal Bimbingan Masyarakat Katolik</option>
              <option value="0105">Direktorat Jenderal Bimbingan Masyarakat Kristen</option>
              <option value="0103">Direktorat Jenderal Pendidikan Islam</option>
              <option value="0109">Direktorat Jenderal Penyelenggaraan Haji dan Umrah</option>
              <option value="0112">Badan Penyelenggara Jaminan Produk Halal</option>
              <option value="0111">Badan Litbang dan Diklat</option>
            </optgroup>
            <optgroup label="Satuan Kerja">
              <option value="1307">Asrama Haji Embarkasi Balikpapan</option>
              <option value="1301">Asrama Haji Embarkasi Banda Aceh</option>
              <option value="1306">Asrama Haji Embarkasi Banjarmasin</option>
              <option value="1310">Asrama Haji Embarkasi Bekasi</option>
              <option value="1304">Asrama Haji Embarkasi Jakarta</option>
              <option value="1309">Asrama Haji Embarkasi Lombok</option>
              <option value="1308">Asrama Haji Embarkasi Makasar</option>
              <option value="1302">Asrama Haji Embarkasi Medan</option>
              <option value="1303">Asrama Haji Embarkasi Padang</option>
              <option value="1305">Asrama Haji Embarkasi Surabaya</option>
              <option value="1012">Balai Diklat Keagamaan Ambon</option>
              <option value="1005">Balai Diklat Keagamaan Bandung</option>
              <option value="1008">Balai Diklat Keagamaan Banjarmasin</option>
              <option value="1011">Balai Diklat Keagamaan Denpasar</option>
              <option value="1004">Balai Diklat Keagamaan Jakarta</option>
              <option value="1010">Balai Diklat Keagamaan Makassar</option>
              <option value="1009">Balai Diklat Keagamaan Manado</option>
              <option value="1001">Balai Diklat Keagamaan Medan</option>
              <option value="1002">Balai Diklat Keagamaan Padang</option>
              <option value="1003">Balai Diklat Keagamaan Palembang</option>
              <option value="1014">Balai Diklat Keagamaan Papua</option>
              <option value="1013">Balai Diklat Keagamaan Provinsi Aceh</option>
              <option value="1006">Balai Diklat Keagamaan Semarang</option>
              <option value="1007">Balai Diklat Keagamaan Surabaya</option>
              <option value="0900">Balai Litbang Agama</option>
              <option value="0901">Balai Litbang Agama Jakarta</option>
              <option value="0903">Balai Litbang Agama Makassar</option>
              <option value="0902">Balai Litbang Agama Semarang</option>
              <option value="1601">IAHN Tampung Penyang Palangkaraya</option>
              <option value="0419">IAIN Ambon</option>
              <option value="0436">IAIN Batusangkar</option>
              <option value="0422">IAIN Bengkulu</option>
              <option value="0446">IAIN Bone</option>
              <option value="0411">IAIN Bukittinggi</option>
              <option value="0444">IAIN Curup</option>
              <option value="0443">IAIN Fattahul Muluk Papua</option>
              <option value="0431">IAIN Jember</option>
              <option value="0445">IAIN Kediri</option>
              <option value="0433">IAIN Kendari</option>
              <option value="0438">IAIN Kerinci</option>
              <option value="0449">IAIN Kudus</option>
              <option value="0434">IAIN Langsa</option>
              <option value="0437">IAIN Lhokseumawe</option>
              <option value="0442">IAIN Madura</option>
              <option value="0435">IAIN Manado</option>
              <option value="0439">IAIN Metro</option>
              <option value="0424">IAIN Padangsidimpuan</option>
              <option value="0408">IAIN Palangkaraya</option>
              <option value="0430">IAIN Palopo</option>
              <option value="0426">IAIN Palu</option>
              <option value="0448">IAIN Parepare</option>
              <option value="0440">IAIN Pekalongan</option>
              <option value="0441">IAIN Ponorogo</option>
              <option value="0427">IAIN Pontianak</option>
              <option value="0428">IAIN Purwokerto</option>
              <option value="0409">IAIN Salatiga</option>
              <option value="0429">IAIN Samarinda</option>
              <option value="0418">IAIN Sultan Amai Gorontalo</option>
              <option value="0421">IAIN Surakarta</option>
              <option value="0447">IAIN Syaikh Abdurrahman Siddik Bangka Belitung</option>
              <option value="0420">IAIN Syekh Nurjati Cirebon</option>
              <option value="0425">IAIN Ternate</option>
              <option value="0423">IAIN Tulungagung</option>
              <option value="1503">IAKN Ambon</option>
              <option value="1502">IAKN Manado</option>
              <option value="1501">IAKN Tarutung</option>
              <option value="1201">IHDN Denpasar</option>
              <option value="0214">Kanwil Kementerian Agama Daerah Istimewa Yogyakarta</option>
              <option value="0201">Kanwil Kementerian Agama Provinsi Aceh</option>
              <option value="0225">Kanwil Kementerian Agama Provinsi Bali</option>
              <option value="0211">Kanwil Kementerian Agama Provinsi Banten</option>
              <option value="0207">Kanwil Kementerian Agama Provinsi Bengkulu</option>
              <option value="0210">Kanwil Kementerian Agama Provinsi DKI Jakarta</option>
              <option value="0221">Kanwil Kementerian Agama Provinsi Gorontalo</option>
              <option value="0205">Kanwil Kementerian Agama Provinsi Jambi</option>
              <option value="0212">Kanwil Kementerian Agama Provinsi Jawa Barat</option>
              <option value="0213">Kanwil Kementerian Agama Provinsi Jawa Tengah</option>
              <option value="0215">Kanwil Kementerian Agama Provinsi Jawa Timur</option>
              <option value="0216">Kanwil Kementerian Agama Provinsi Kalimantan Barat</option>
              <option value="0218">Kanwil Kementerian Agama Provinsi Kalimantan Selatan</option>
              <option value="0217">Kanwil Kementerian Agama Provinsi Kalimantan Tengah</option>
              <option value="0219">Kanwil Kementerian Agama Provinsi Kalimantan Timur</option>
              <option value="0234">Kanwil Kementerian Agama Provinsi Kalimantan Utara</option>
              <option value="0208">Kanwil Kementerian Agama Provinsi Kepulauan Bangka Belitung</option>
              <option value="0231">Kanwil Kementerian Agama Provinsi Kepulauan Riau</option>
              <option value="0209">Kanwil Kementerian Agama Provinsi Lampung</option>
              <option value="0228">Kanwil Kementerian Agama Provinsi Maluku</option>
              <option value="0229">Kanwil Kementerian Agama Provinsi Maluku Utara</option>
              <option value="0226">Kanwil Kementerian Agama Provinsi Nusa Tenggara Barat</option>
              <option value="0227">Kanwil Kementerian Agama Provinsi Nusa Tenggara Timur</option>
              <option value="0230">Kanwil Kementerian Agama Provinsi Papua</option>
              <option value="0233">Kanwil Kementerian Agama Provinsi Papua Barat</option>
              <option value="0204">Kanwil Kementerian Agama Provinsi Riau</option>
              <option value="0232">Kanwil Kementerian Agama Provinsi Sulawesi Barat</option>
              <option value="0224">Kanwil Kementerian Agama Provinsi Sulawesi Selatan</option>
              <option value="0222">Kanwil Kementerian Agama Provinsi Sulawesi Tengah</option>
              <option value="0223">Kanwil Kementerian Agama Provinsi Sulawesi Tenggara</option>
              <option value="0220">Kanwil Kementerian Agama Provinsi Sulawesi Utara</option>
              <option value="0203">Kanwil Kementerian Agama Provinsi Sumatera Barat</option>
              <option value="0206">Kanwil Kementerian Agama Provinsi Sumatera Selatan</option>
              <option value="0202">Kanwil Kementerian Agama Provinsi Sumatera Utara</option>
              <option value="0802">STABN Raden Wijaya Wonogiri</option>
              <option value="0801">STABN Sriwijaya Tangerang</option>
              <option value="0701">STAHN Gde Pudja Mataram</option>
              <option value="0703">STAHN Mpu Kuturan Singaraja</option>
              <option value="0541">STAIN Bengkalis</option>
              <option value="0539">STAIN Gajah Putih Takengon</option>
              <option value="0542">STAIN Majene</option>
              <option value="0544">STAIN Mandailing Natal</option>
              <option value="0538">STAIN Sorong</option>
              <option value="0543">STAIN Sultan Abdurrahman Kepri</option>
              <option value="0540">STAIN Teungku Dirundeng Meulaboh</option>
              <option value="1401">STAKATN Pontianak</option>
              <option value="0607">STAKN Kupang</option>
              <option value="0604">STAKN Palangkaraya</option>
              <option value="0605">STAKN Toraja</option>
              <option value="0603">STAKPN Sentani</option>
              <option value="1105">UIN Alauddin Makassar</option>
              <option value="1117">UIN Antasari Banjarmasin</option>
              <option value="1108">UIN Ar-Raniry Banda Aceh</option>
              <option value="1112">UIN Imam Bonjol Padang</option>
              <option value="1118">UIN Mataram</option>
              <option value="1104">UIN Maulana Malik Ibrahim Malang</option>
              <option value="1111">UIN Raden Fatah Palembang</option>
              <option value="1114">UIN Raden Intan Lampung</option>
              <option value="1116">UIN Sultan Maulana Hasanuddin Banten</option>
              <option value="1106">UIN Sultan Syarif Kasim</option>
              <option value="1113">UIN Sulthan Thaha Saifuddin Jambi </option>
              <option value="1110">UIN Sumatera Utara Medan</option>
              <option value="1107">UIN Sunan Ampel Surabaya</option>
              <option value="1102">UIN Sunan Gunung Djati Bandung</option>
              <option value="1103">UIN Sunan Kalijaga, Yogyakarta</option>
              <option value="1101">UIN Syarif Hidayatullah Jakarta</option>
              <option value="1109">UIN Walisongo Semarang</option>
            </optgroup>
            <option value="0">Kementerian Agama RI (Semua)</option>
          </select>
            <div class="input-group-append">
              <button type="button" name="button" class="btn btn-info" id="sourcebtn">Muat Data</button>
            </div>
        </div>
      </div>

      <div class="col-12 align-self-center">
        <div class="card card-body">
          <div style="height:480px;">
            <web-pivot-table />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script type="text/javascript" src="https://webpivottable.com/releases/latest/dist/wpt.js" ></script>
<script type="text/javascript">

  $(document).ready(function() {
    var wpt = document.getElementsByTagName('web-pivot-table')[0];
    // wpt.showControlPanel();
    wpt.setOptions({
      server:{
        fileProxyEnabled: 0
      }
    });

    $('#sourcebtn').on('click',function(event) {
      wpt.setWptFromWebService('https://ropeg.kemenag.go.id/api/webview/pegawai/wpt/'+$('#source').val());
    });
    wpt.showControlPanel();
  });

  function functionName() {

  }

function loaddata() {

  $('#wdr-component').html('Sedang memuat data...');
  $.getJSON('https://ropeg.kemenag.go.id/api/webview/pegawai/pivot/'+$('#source').val(), function(mps) {
    // var jsonData = ;
    var pivot = new WebDataRocks({
      container: "#wdr-component",
      toolbar: true,
      report: {
        dataSource: {
          data: mps
        }
      }
    });
  });
  }
</script>
<?= $this->endSection() ?>
