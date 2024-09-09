<?php

namespace App\Controllers\Kgb;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;
use App\Models\SimpegModel;
use App\Models\KgbModel;

class Proses extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect('kgb', false);
        $data['proses'] = $db->table('TA_KGB')
                              ->select('nip,nama,jabatan,tgl_buat,kgb_status')
                              ->where('kgb_status',1)
                              ->like('kode_satker', kodekepala(session('kelola')), 'after')
                              ->get()
                              ->getResult();

        return view('kgb/proses', $data);
    }

    public function getData()
    {
      $db = \Config\Database::connect('kgb', false);
      $builder = $db->table('TA_KGB')->select('nip,nama,jabatan,tgl_buat')
                    ->where('kgb_status',1)
                    ->like('kode_satker', kodekepala(session('kelola')), 'after');

      return DataTable::of($builder)
      ->add('action', function($row){
          return '<a href="'.site_url('kgb/pegawai/addkgb/'.encrypt($row->nip)).'" type="button" class="btn btn-danger btn-sm" onclick="return confirm(\'Pegawai akan dihapus?\')">Delete</a> <a href="'.site_url('kgb/pegawai/addkgb/'.encrypt($row->nip)).'" type="button" class="btn btn-primary btn-sm" onclick="return confirm(\'Pegawai akan dihapus?\')">Cetak</a> <a href="'.site_url('kgb/pegawai/addkgb/'.encrypt($row->nip)).'" type="button" class="btn btn-success btn-sm" onclick="return confirm(\'Pegawai akan dihapus?\')">TTD</a>';
      })
      ->toJson(true);
    }

    public function add($nip)
    {
      // code...
    }
}
