<?php

namespace App\Controllers\Usulan;

use App\Controllers\BaseController;
use App\Models\UnorModel;

class Unor extends BaseController
{
    public function index()
    {
      $model = new UnorModel;
      return view('usulan/unor/index');
    }

    public function dfux()
    {
      $model = new UnorModel;
      $kodesatker = kodekepala(session('kelola'));

      $data = $model->like('KODE_SATUAN_KERJA', $kodesatker, 'after')->findAll();

      $d = [];
      $i = 0;
      foreach ($data as $row) {

        $d[$i] = [
              'headId' => $row->KODE_SATUAN_KERJA,
              'induk' => $row->KODE_ATASAN,
              'nama_satker' => strtoupper($row->SATUAN_KERJA),
              'keterangan' => $row->KETERANGAN_SATUAN_KERJA,
              'updated_at' => $row->UPDATED_AT,
              'info' => '<a href="javascript:;" class="" onclick="detail(\''.$row->KODE_SATUAN_KERJA.'\')" title="Detail"><i class="bx bx-info-circle text-primary"></i></a>',
            ];

            $i++;
      }
      $json = array('value'=>$d);
      return $this->response->setJSON($json);
    }

    public function getdata($id)
    {
      $model = new UnorModel;
      $json = $model->find($id);
      return $this->response->setJSON($json);
    }
}
