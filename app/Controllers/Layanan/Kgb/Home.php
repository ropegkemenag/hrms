<?php

namespace App\Controllers\Layanan\Kgb;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KgbModel;

class Home extends BaseController
{
    public function index()
    {
        return view('layanan/kgb/index');
    }

    public function setup()
    {
      $model = new KgbModel;
      $data['setup'] = $model->getRow('TA_KGB_SETUP',['kode_satker'=>session('kelola')]);

      return view('layanan/kgb/setup', $data);
    }
}
