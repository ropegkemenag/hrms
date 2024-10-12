<?php

namespace App\Controllers\Layanan\Kenaikanpangkat;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        return view('kenaikanpangkat/index');
    }
}
