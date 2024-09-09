<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SimpegModel;

class Report extends BaseController
{
    public function index()
    {
      $model = new SimpegModel;
      $data['djk'] = $model->report_jk();
      $data['djab'] = $model->report_jab();
      $data['dagama'] = $model->report_agama();

      return view('report', $data);
    }

    public function datapejabat($kode=1)
    {
      $model = new SimpegModel;
      $data = $model->pejabat($kode);

      return $this->response->setJSON($data);
    }
}
