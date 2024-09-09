<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SimpegModel;

class Informasi extends BaseController
{
    public function index()
    {
        $model = new SimpegModel;
        $data['informasi'] = $model->get_news();
        return view('informasi', $data);
    }
}
