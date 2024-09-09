<?php

namespace App\Controllers\Master\Umum;

use App\Controllers\BaseController;
use App\Models\Master\AgamaModel;

class Agama extends BaseController
{
    public function index()
    {
        $model = new AgamaModel;
        $data['agama'] = $model->findAll();
        return view('master/umum/agama', $data);
    }
}
