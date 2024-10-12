<?php

namespace App\Controllers\Layanan\Kgb;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;
use App\Models\SimpegModel;

class Pegawai extends BaseController
{
    public function index()
    {
        return view('layanan/kgb/pegawai');
    }

    public function getData()
    {
      $db = \Config\Database::connect('kgb', false);
      $builder = $db->table('vw_data_pegawai')->select('NIP,NIP_BARU,NAMA,KETERANGAN,tmt')->like('KODE_SATUAN_KERJA', kodekepala(session('kelola')), 'after');

      return DataTable::of($builder)
      ->add('action', function($row){
          return '<a href="'.site_url('kgb/pegawai/addkgb/'.encrypt($row->NIP_BARU)).'" type="button" class="btn btn-primary btn-sm" onclick="return confirm(\'Pegawai akan dibuatkan KGB?\')">Buat KGB</a> ';
      })
      ->toJson(true);
    }
}
