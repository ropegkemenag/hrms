<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends BaseController
{
    public function index()
    {
        //
    }

    public function pensiun($kode,$tahun)
    {
      $spreadsheet = new Spreadsheet();
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'Hello World !');

      $writer = new Xlsx($spreadsheet);
      $writer->save('hello world.xlsx');
    }
}
