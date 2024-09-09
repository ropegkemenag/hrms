<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\Master\SatkerModel;

class Satker extends BaseController
{
    public function index()
    {
        $model = new SatkerModel;

        $kelola = session('kelola');
        // $kelola = '02090000000000';
        if($kelola == 0){
          $data['satker'] = $model->where('KODE_ATASAN','01000000000000')->findAll();
          return view('master/satker/index', $data);
        }else{
          $model = new SatkerModel;
          $data['detail'] = $model->find($kelola);
          $data['satker'] = $model->where('KODE_ATASAN',$kelola)->findAll();
          return view('master/satker/detail', $data);
        }
    }

    public function search()
    {
        $model = new SatkerModel;
        $kategori = $this->request->getVar('kategori');
        $keyword  = $this->request->getVar('keyword');

        if($kategori == '1'){
          $data['satker'] = $model->where('KODE_SATUAN_KERJA', $keyword)->findAll();
        }else if($kategori == '2'){
          $data['satker'] = $model->like('SATUAN_KERJA', $keyword)->findAll();
        }else if($kategori == '3'){
          $data['satker'] = $model->where('KODE_ATASAN', $keyword)->findAll();
        }

        return view('master/satker/index', $data);
    }

    public function detail($kode)
    {
      $model = new SatkerModel;
      $kode = decrypt($kode);
      $data['detail'] = $model->find($kode);
      $data['satker'] = $model->where('KODE_ATASAN',$kode)->findAll();
      return view('master/satker/detail', $data);
    }

    public function update($kode)
    {
      $model = new SatkerModel;
      $data = array(
                'LAT' => $this->request->getVar('lat'),
                'LON' => $this->request->getVar('lon'),
               );
      $model->update($kode,$data);

      return redirect()->back();
    }

    public function getdata($id)
    {
      $model = new SatkerModel();
      $json = $model->find($id);
      return $this->response->setJSON($json);
    }
}
