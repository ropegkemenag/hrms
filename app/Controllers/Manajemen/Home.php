<?php

namespace App\Controllers\Manajemen;
use App\Controllers\BaseController;
use App\Models\SimpegModel;
use App\Models\CrudModel;

class Home extends BaseController
{
    public function index()
    {
        return view('manajemen/dashboard/pegawai');
    }

    public function getpegawai($nip)
    {
      $model = new CrudModel();

      $json = $model->getResult('TEMP_PEGAWAI',['NIP_BARU'=>$nip]);
      return $this->response->setJSON($json);
    }
}
