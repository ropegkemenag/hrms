<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\TubelModel;
use App\Models\CrudModel;

class Tubel extends BaseController
{
    public function index()
    {
        //
    }

    public function lists($nip)
    {
      $model = new TubelModel();
      $usul = $model->where('created_by',$nip)->findAll();

      return $this->response->setJSON($usul);
    }

    public function detail($id)
    {
      $model = new TubelModel();
      $data['usul'] = $model->find($id);

      $crud = new CrudModel();
      $data['dokumen'] = $crud->getDokumen(6,$id);

      return $this->response->setJSON($data);
    }
}
