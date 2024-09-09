<?php

namespace App\Controllers\Pemutakhiran;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use App\Models\SimpegModel;

class Tambah extends BaseController
{
    public function index()
    {
      $data['user']   = false;
      return view('pemutakhiran/tambah/index', $data);
    }

    public function add($value='')
    {
      // code...
    }

    public function approve($value='')
    {
      // code...
    }

    public function decline($value='')
    {
      // code...
    }
}
