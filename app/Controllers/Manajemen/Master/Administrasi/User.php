<?php

namespace App\Controllers\Master\Administrasi;

use App\Controllers\BaseController;
use App\Models\Master\UserModel;
use \Hermawan\DataTables\DataTable;

class User extends BaseController
{
    public function index()
    {
      return view('master/administrasi/user');
    }

    public function getdata()
    {
      $model = new UserModel;
      $model->select('NIP, NAMA, KETERANGAN');

      return DataTable::of($model)
      ->add('action', function($row){
          return '<a href="'.site_url('master/administrasi/user/detail/'.$row->NIP).'" type="button" class="btn btn-primary btn-sm" target="_blank"><i class="ri-account-circle-fill"></i></a>';
      })
      ->toJson(true);
    }

    public function detail($nip)
    {
      $model = new UserModel;
      $data['user'] = $model->find($nip);
      return view('master/administrasi/user_detail', $data);
    }
}
