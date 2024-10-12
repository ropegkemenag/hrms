<?php

namespace App\Controllers\Layanan;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
      return view('layanan/index');
    }
}
