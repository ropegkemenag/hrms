  <div class="card ribbon-box border shadow-none mb-lg-0">
      <div class="ribbon ribbon-primary round-shape">Alamat</div>
  </div>

  <table class="table datapegawai mt-5">
    <tr>
      <th width="20%">Alamat</th>
      <td><?= $alamat->ALAMAT_1;?></td>
    </tr>
    <tr>
      <th>Kelurahan</th>
      <td><?= $alamat->ALAMAT_2;?></td>
    </tr>
    <tr>
      <th>Kecamatan</th>
      <td><?= $alamat->KECAMATAN;?></td>
    </tr>
    <tr>
      <th>Kabupaten/Kota</th>
      <td><?= $alamat->KAB_KOTA;?></td>
    </tr>
    <tr>
      <th>Provinsi</th>
      <td><?= $alamat->PROVINSI;?></td>
    </tr>
    <tr>
      <th>Kode Pos</th>
      <td></td>
    </tr>
    <tr>
      <th>No. HP</th>
      <td><?= $alamat->NO_HP;?></td>
    </tr>
    <tr>
      <th>No. HP 2</th>
      <td></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?= $alamat->EMAIL;?></td>
    </tr>
    <tr>
      <th>Darurat (Nama)</th>
      <td><?= $alamat->DARURAT_NAMA;?></td>
    </tr>
    <tr>
      <th>Darurat (Hubungan)</th>
      <td><?= $alamat->DARURAT_HUBUNGAN;?></td>
    </tr>
    <tr>
      <th>Darurat (HP)</th>
      <td><?= $alamat->DARURAT_HP;?></td>
    </tr>
  </table>
