<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\AppsModel;

class Users extends BaseController
{
    public function index()
    {
      $apps = new AppsModel;
      $data['apps'] = $apps->findAll();
      return view('master/users/index', $data);
    }
}
