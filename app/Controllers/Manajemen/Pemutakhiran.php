<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\UsulPegawaiModel;
use App\Models\SimpegModel;

class Pemutakhiran extends BaseController
{
    public function index()
    {
        return view('pemutakhiran/index');
    }

    public function tambah()
    {
      $model = new UsulPegawaiModel;

      $data['pegawai'] = $model->where(['created_by'=>session('nip')])->findAll();

      return view('pemutakhiran/tambah', $data);
    }

    public function add()
    {
      return view('pemutakhiran/tambah_add');
    }

    public function transfer()
    {
      $data['user']   = false;
      return view('pemutakhiran/transfer/index', $data);
    }

    public function search()
    {
      $model          = new SimpegModel;
      $nip            = $this->request->getVar('nip');
      $satker         = kodekepala(session('kelola'));
      $data['user']   = $model->search_user($nip,$satker);

      return view('pemutakhiran/transfer/index', $data);
    }
}
