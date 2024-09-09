<?php

namespace App\Controllers\Anjababk;

use App\Controllers\BaseController;
use App\Models\SimpegModel;

class Petajabatan extends BaseController
{
    public function index($kode)
    {
        $kode = decrypt($kode);

        $model = new SimpegModel;
        $data['satker'] = $model->getRow('TM_SATUAN_KERJA',['KODE_SATUAN_KERJA'=>$kode]);
        return view('anjababk/petajabatan/index', $data);
    }

    public function struktur($kode)
    {
      $kode = decrypt($kode);

      $model = new SimpegModel;

      $parent = $model->getRow('TM_SATUAN_KERJA',['KODE_SATUAN_KERJA'=>$kode]);
      $subs = $model->getArray('TM_SATUAN_KERJA',['KODE_ATASAN'=>$kode]);

      foreach ($subs as $row) {

        $getpegawai = $model->getPetabyJabatan($row->KODE_SATUAN_KERJA);
        $pegawai = '';
        foreach ($getpegawai as $rp) {
          $pegawai .= '<tr>
                        <td>'.$rp->JABATAN.'</td>
                        <td>'.$rp->JML.'</td>
                      </tr>';
        }

        $abk = [[
          'name'=>'Informasi Jabatan',
          'title'=>'
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>JABATAN</th>
                <th>JML</th>
              </tr>
            </thead>
            <tbody>
              '.$pegawai.'
            </tbody>
          </table>
          ',
          'className'=>'jabatan'
        ]];

        $sub[] = ['name' => $row->SATUAN_KERJA,'title'=>$row->SATUAN_KERJA,'children'=>$abk];
      }

      // $struktur = [
      //   'name' => $parent->SATUAN_KERJA,
      //   'title' => $parent->SATUAN_KERJA,
      //   'children' => [
      //     'name' => $parent->SATUAN_KERJA,'title'=>$parent->PIMPINAN,'children' => $sub
      //   ],
      // ];
      $struktur = [
        'name' => $parent->SATUAN_KERJA,
        'title'=>$parent->PIMPINAN,
        'children' => $sub
      ];

      return $this->response->setJSON($struktur);
    }
}
