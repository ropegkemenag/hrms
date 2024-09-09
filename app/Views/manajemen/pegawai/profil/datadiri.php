<?= $this->extend('manajemen/pegawai/profil') ?>

<?= $this->section('dataprofil') ?>
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
<?= $this->endSection() ?>
