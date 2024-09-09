<?php

namespace App\Controllers\Master\Umum;

use App\Controllers\BaseController;
use App\Models\Master\UnorModel;
use App\Models\CrudModel;

class Unor extends BaseController
{
    public function index($id=false)
    {
        $model = new UnorModel;
        $crud = new CrudModel;

        $id = ($id)?decrypt($id):'0E9CB2EA-3BB1-417C-99CC-CC7489E7B5C4';

        $data['detail'] = $model->find($id);

        $data['parent'] = $model->where('JENIS_SATKER','PARENT')->findAll();
        $data['grupsatker'] = $crud->getResult('TM_GRUP_SATUAN_KERJA');

        if($id == '0E9CB2EA-3BB1-417C-99CC-CC7489E7B5C4'){
          $data['satker'] = $data['parent'];
        }else{
          $data['satker'] = $model->where('KODE_ATASAN_NEW',$id)->findAll();
        }
        return view('master/unor/index', $data);
    }

    public function search()
    {
        $model = new UnorModel;
        $kategori = $this->request->getVar('kategori');
        $keyword  = $this->request->getVar('keyword');

        if($kategori == '1'){
          $data['satker'] = $model->where('KODE_SATUAN_KERJA', $keyword)->findAll();
        }else if($kategori == '2'){
          $data['satker'] = $model->like('SATUAN_KERJA', $keyword)->findAll();
        }else if($kategori == '3'){
          $data['satker'] = $model->where('KODE_ATASAN', $keyword)->findAll();
        }

        return view('master/unor/index', $data);
    }

    public function detail($kode)
    {
      $model = new UnorModel;
      $kode = decrypt($kode);
      $data['detail'] = $model->find($kode);
      $data['satker'] = $model->where('KODE_ATASAN',$kode)->findAll();
      return view('master/unor/detail', $data);
    }

    public function update($kode)
    {
      $model = new UnorModel;
      $param = [
        'SATUAN_KERJA' => $this->request->getVar('nama'),
        'KETERANGAN_SATUAN_KERJA' => $this->request->getVar('keterangan'),
        'KODE_ATASAN_NEW' => $id,
        'KODE_UNIT_ORGANISASI_NEW' => $this->request->getVar('unor'),
        'KODE_UNIT_KERJA_NEW' => $this->request->getVar('unker'),
        'KODE_GRUP_SATUAN_KERJA' => $this->request->getVar('grup'),
        'USER_UPDATE' => session('niplama'),
        'PROGRAM' => $this->request->getVar('program'),
        'ESELON' => $this->request->getVar('eselon'),
      ];

      $model->update($kode,$data);

      return redirect()->back()->with('message','Unor telah diupdate.');
    }

    public function getdata($id)
    {
      $model = new UnorModel();
      $json = $model->find($id);
      return $this->response->setJSON($json);
    }

    public function delete($id)
    {
      $id = decrypt($id);

      $model = new UnorModel;
      $model->delete($id);

      return redirect()->back()->with('message','Unor telah dihapus.');
    }

    public function add($id)
    {

      if (! $this->validate([
            'nama' => "required",
            'keterangan'  => 'required',
            'program'  => 'required',
            'unor'  => 'required',
        ])) {
            return redirect()->back()->with('message','Data tidak lengkap.');
        }

      $id = decrypt($id);

      $model = new UnorModel;

      $param = [
        'SATUAN_KERJA' => $this->request->getVar('nama'),
        'KETERANGAN_SATUAN_KERJA' => $this->request->getVar('keterangan'),
        'KODE_ATASAN_NEW' => $id,
        'KODE_UNIT_ORGANISASI_NEW' => $this->request->getVar('unor'),
        'KODE_UNIT_KERJA_NEW' => $this->request->getVar('unker'),
        'KODE_GRUP_SATUAN_KERJA' => $this->request->getVar('grup'),
        'USER_ADD' => session('niplama'),
        'PROGRAM' => $this->request->getVar('program'),
        'ESELON' => $this->request->getVar('eselon'),
      ];
      $model->insert($param);

      return redirect()->back()->with('message','Unor telah ditambahkan.');
    }

    public function getunitkerja($id,$text)
    {
      $model = new UnorModel();
      $unit = $model->where('KODE_ATASAN_NEW',$id)->findAll();

      echo '<option value="'.$id.'">'.$text.'</option>';
      foreach ($unit as $row) {
        echo '<option value="'.$row->KODE_SATKER_NEW.'">'.$row->SATUAN_KERJA.'</option>';
      }
    }
}
