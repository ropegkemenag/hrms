<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SimpegModel;

class Dashboard extends BaseController
{
    public function index()
    {
      $model = new SimpegModel;
      $data['informasi'] = $model->get_news();
      return view('index', $data);
    }

    public function pegawai()
    {
        $model = new SimpegModel;
        $kelola = kodekepala(session('kelola'));
        $data['djk'] = $model->dashboard_jk($kelola);
        $data['djab'] = $model->dashboard_jab($kelola);
        $data['dagama'] = $model->dashboard_agama($kelola);

        return view('manajemen/dashboard/pegawai', $data);
    }

    public function map()
    {
        $model = new SimpegModel;
        $kelola = kodekepala(session('kelola'));
        $data['lokasi'] = $model->get_map($kelola);
        return view('manajemen/dashboard/map', $data);
    }
}
