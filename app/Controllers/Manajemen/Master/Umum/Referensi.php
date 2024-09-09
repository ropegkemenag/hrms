<?php

namespace App\Controllers\Master\Umum;

use App\Controllers\BaseController;
use App\Models\CrudModel;

class Referensi extends BaseController
{
    public function index()
    {
        //
    }

    public function agama()
    {
      $model = new AgamaModel;
      $data['agama'] = $model->findAll();
      return view('master/umum/agama', $data);
    }

    public function statusperkawinan()
    {
      $model = new CrudModel;
      $data['status'] = $model->getResult('TM_STATUS_KAWIN');
      return view('master/umum/status_kawin', $data);
    }

    public function statusanak()
    {
      $model = new CrudModel;
      $data['status'] = $model->getResult('TM_STATUS_ANAK');
      return view('master/umum/status_anak', $data);
    }
}
