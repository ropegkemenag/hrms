<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\SimpegModel;
use App\Models\UnorModel;

class Download extends BaseController
{
    public function index()
    {
        return view('manajemen/download');
    }

    public function pegawai()
    {
      $kode = kodekepala(session('kelola'));

      $model = new SimpegModel;
      $pegawai = $model->getTempPegawai($kode);

      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();

      $sheet->setCellValue('A1', 'NIP');
      $sheet->setCellValue('B1', 'NIP_BARU');
      $sheet->setCellValue('C1', 'NAMA_LENGKAP');
      $sheet->setCellValue('D1', 'AGAMA');
      $sheet->setCellValue('E1', 'TEMPAT_LAHIR');
      $sheet->setCellValue('F1', 'TANGGAL_LAHIR');
      $sheet->setCellValue('G1', 'JENIS_KELAMIN');
      $sheet->setCellValue('H1', 'PENDIDIKAN');
      $sheet->setCellValue('I1', 'JENJANG_PENDIDIKAN');
      $sheet->setCellValue('J1', 'LEVEL_JABATAN');
      $sheet->setCellValue('K1', 'PANGKAT');
      $sheet->setCellValue('L1', 'GOL_RUANG');
      $sheet->setCellValue('M1', 'TMT_CPNS');
      $sheet->setCellValue('N1', 'TMT_PANGKAT');
      $sheet->setCellValue('O1', 'MK_TAHUN');
      $sheet->setCellValue('P1', 'MK_BULAN');
      $sheet->setCellValue('Q1', 'TIPE_JABATAN');
      $sheet->setCellValue('R1', 'TAMPIL_JABATAN');
      $sheet->setCellValue('S1', 'TMT_JABATAN');
      $sheet->setCellValue('T1', 'SATKER_1');
      $sheet->setCellValue('U1', 'SATKER_2');
      $sheet->setCellValue('V1', 'SATKER_3');
      $sheet->setCellValue('W1', 'SATKER_4');
      $sheet->setCellValue('X1', 'SATKER_5');
      $sheet->setCellValue('Y1', 'USIA_PENSIUN');
      $sheet->setCellValue('Z1', 'TMT_PENSIUN');
      $sheet->setCellValue('AA1', 'STATUS_PEGAWAI');
      $sheet->setCellValue('AB1', 'NO_HP');
      $sheet->setCellValue('AC1', 'EMAIL');
      $sheet->setCellValue('AD1', 'HARI_KERJA');

      $i = 2;
      foreach ($pegawai as $row) {
        $sheet->getCell('A'.$i)->setValueExplicit($row->NIP,\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->getCell('B'.$i)->setValueExplicit($row->NIP_BARU,\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->setCellValue('C'.$i, $row->NAMA_LENGKAP);
        $sheet->setCellValue('D'.$i, $row->AGAMA);
        $sheet->setCellValue('E'.$i, $row->TEMPAT_LAHIR);
        $sheet->setCellValue('F'.$i, $row->TANGGAL_LAHIR);
        $sheet->setCellValue('G'.$i, $row->JENIS_KELAMIN);
        $sheet->setCellValue('H'.$i, $row->PENDIDIKAN);
        $sheet->setCellValue('I'.$i, $row->JENJANG_PENDIDIKAN);
        $sheet->setCellValue('J'.$i, $row->LEVEL_JABATAN);
        $sheet->setCellValue('K'.$i, $row->PANGKAT);
        $sheet->setCellValue('L'.$i, $row->GOL_RUANG);
        $sheet->setCellValue('M'.$i, $row->TMT_CPNS);
        $sheet->setCellValue('N'.$i, $row->TMT_PANGKAT);
        $sheet->setCellValue('O'.$i, $row->MK_TAHUN);
        $sheet->setCellValue('P'.$i, $row->MK_BULAN);
        $sheet->setCellValue('Q'.$i, $row->TIPE_JABATAN);
        $sheet->setCellValue('R'.$i, $row->TAMPIL_JABATAN);
        $sheet->setCellValue('S'.$i, $row->TMT_JABATAN);
        $sheet->setCellValue('T'.$i, $row->SATKER_1);
        $sheet->setCellValue('U'.$i, $row->SATKER_2);
        $sheet->setCellValue('V'.$i, $row->SATKER_3);
        $sheet->setCellValue('W'.$i, $row->SATKER_4);
        $sheet->setCellValue('X'.$i, $row->SATKER_5);
        $sheet->setCellValue('Y'.$i, $row->USIA_PENSIUN);
        $sheet->setCellValue('Z'.$i, $row->TMT_PENSIUN);
        $sheet->setCellValue('AA'.$i, $row->STATUS_PEGAWAI);
        $sheet->setCellValue('AB'.$i, $row->NO_HP);
        $sheet->setCellValue('AC'.$i, $row->EMAIL);
        $sheet->setCellValue('AD'.$i, $row->HARI_KERJA);

        $i++;
      }

      $tanggal = date('YmdHis');
      $writer = new Xlsx($spreadsheet);
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Data Pegawai'.$tanggal.'.xlsx"');
      $writer->save('php://output');
    }

    public function unor()
    {
      $kode = kodekepala(session('kelola'));

      $model = new UnorModel;
      $data = $model->like('KODE_SATUAN_KERJA', $kode, 'after')->findAll();

      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();

      $sheet->setCellValue('A1', 'KODE_SATUAN_KERJA');
      $sheet->setCellValue('B1', 'KODE_ATASAN');
      $sheet->setCellValue('C1', 'SATUAN_KERJA');
      $sheet->setCellValue('D1', 'KETERANGAN');
      $sheet->setCellValue('E1', 'KODE_UNIT_KERJA');
      $sheet->setCellValue('F1', 'KODE_GRUP_SATUAN_KERJA');
      $sheet->setCellValue('G1', 'PROGRAM');
      $sheet->setCellValue('H1', 'NSM');
      $sheet->setCellValue('I1', 'NPSM');
      $sheet->setCellValue('J1', 'KODE_KUA');
      $sheet->setCellValue('K1', 'LAT');
      $sheet->setCellValue('L1', 'LON');

      $i = 2;
      foreach ($data as $row) {
        $sheet->getCell('A'.$i)->setValueExplicit($row->KODE_SATUAN_KERJA,\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->getCell('B'.$i)->setValueExplicit($row->KODE_ATASAN,\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->setCellValue('C'.$i, $row->SATUAN_KERJA);
        $sheet->setCellValue('D'.$i, $row->KETERANGAN_SATUAN_KERJA);
        $sheet->getCell('E'.$i)->setValueExplicit($row->KODE_UNIT_KERJA,\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->getCell('F'.$i)->setValueExplicit($row->KODE_GRUP_SATUAN_KERJA,\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
        $sheet->setCellValue('G'.$i, $row->PROGRAM);
        $sheet->setCellValue('H'.$i, $row->NSM);
        $sheet->setCellValue('I'.$i, $row->NPSN);
        $sheet->setCellValue('J'.$i, $row->KODE_KUA);
        $sheet->setCellValue('K'.$i, $row->LAT);
        $sheet->setCellValue('L'.$i, $row->LON);

        $i++;
      }

      $tanggal = date('YmdHis');
      $writer = new Xlsx($spreadsheet);
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment; filename="Data Unor'.$tanggal.'.xlsx"');
      $writer->save('php://output');
    }
}
