<?php

namespace App\Controllers\Anjababk;

use App\Controllers\BaseController;
use App\Models\AnjabJabatanModel;
use App\Models\AnjabTugasModel;

class Anjab extends BaseController
{
  public function index($parent=false)
  {
    $model = new AnjabJabatanModel;

    $data['jabatan'] = $model->where('parent','0')->findAll();
    return view('anjababk/anjab/index', $data);
  }

  public function sub($parent)
  {
    $parent = decrypt($parent);
    $model = new AnjabJabatanModel;

    $data['jabatan'] = $model->where('parent',$parent)->findAll();
    return view('anjababk/anjab/index', $data);
  }

  public function detail($method,$id)
  {
    $method = 'detail_' . $method;

    if (method_exists($this, $method)) {
        return $this->{$method}($id);
    }

    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
  }

  public function detail_ikhtisar($id)
  {
    $id = decrypt($id);
    $model = new AnjabJabatanModel;

    $data['jabatan'] = $model->find($id);
    return view('anjababk/anjab/detail/ikhtisar', $data);
  }

  public function save_ikhtisar()
  {
    $model = new AnjabJabatanModel;

    $model->update($this->request->getVar('id'),['ikhtisar_jabatan'=>$this->request->getVar('ikhtisar')]);

    return redirect()->back();
  }

  public function detail_kualifikasi($id)
  {
    $id = decrypt($id);
    $model = new AnjabJabatanModel;

    $data['jabatan'] = $model->find($id);
    return view('anjababk/anjab/detail/kualifikasi', $data);
  }
  public function detail_tugaspokok($id)
  {
    $id = decrypt($id);
    $model = new AnjabJabatanModel;
    $tugasmodel = new AnjabTugasModel;

    $data['jabatan'] = $model->find($id);
    $data['tugas'] = $tugasmodel->where(['id_jabatan'=>$id])->findAll();
    return view('anjababk/anjab/detail/tugaspokok', $data);
  }

  public function print()
  {
    return view('anjababk/anjab/print');
  }

}
