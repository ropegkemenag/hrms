<?php

namespace App\Controllers\Simpeg;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
      return view('simpeg/index');
    }
}
