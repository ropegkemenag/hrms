<?php

namespace App\Controllers\Master\Umum;

use App\Controllers\BaseController;
use App\Models\Master\LokasiModel;
use \Hermawan\DataTables\DataTable;

class Lokasi extends BaseController
{
    public function index()
    {
        return view('master/umum/lokasi');
    }

    public function data()
    {
        $model = new LokasiModel();
        $model->select('KODE_LOKASI, LOKASI');

        return DataTable::of($model)->toJson();
    }
}
