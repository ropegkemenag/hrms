<?php

namespace App\Controllers\Master\Kepegawaian;

use App\Controllers\BaseController;
use App\Models\CrudModel;

class Referensi extends BaseController
{
    public function index()
    {
        //
    }

    public function kepangkatan()
    {
      $model = new CrudModel;
      $data['pangkat'] = $model->getResult('TM_PANGKAT');
      return view('master/kepegawaian/kepangkatan', $data);
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
