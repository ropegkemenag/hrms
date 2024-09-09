<?php

namespace App\Controllers\Simpeg;

use App\Controllers\BaseController;
use App\Models\UsulUnorModel;
use App\Models\LogModel;

class Unor extends BaseController
{
    public function index()
    {
      $model = new UsulUnorModel();
      $data['usul'] = $model->where('created_by',session('nip'))->findAll();
      return view('simpeg/unor/index', $data);
    }

    public function addusul()
    {
      if (! $this->validate([
        'jenis' => "required",
        'unor_induk' => "required",
        'nama_unor' => "required",
      ])) {
          return redirect()->back()->with('error', 'Data tidak lengkap');
      }

      $param = [
        'nama_unor' => $this->request->getVar('nama_unor'),
        'parent_id' => $this->request->getVar('unor_induk'),
        'parent_nama' => $this->request->getVar('unor_induk_name'),
        'jenis' => $this->request->getVar('jenis'),
        'satker_kode' => session('satker4'),
        'satker_nama' => session('kodesatker4'),
        'status' => 1,
        'created_by' => session('nip'),
        'created_by_name' => session('nama')
      ];

      $berkas = new UsulUnorModel();
      $berkas->insert($param);

      $logm = new LogModel();
      $logm->insert(['id_usul'=>$berkas->getInsertID(),'id_layanan'=>8,'status_usulan'=>1,'keterangan'=>'Input Usulan','created_by'=>session('nip'),'created_by_name'=>session('nama')]);

      return redirect()->back()->with('error', 'Usul telah ditambahkan');
    }

    public function delete($id)
    {
      $id = decrypt($id);
      $model = new UsulUnorModel();

      $delete = $model->delete($id);
      return redirect()->back()->with('message', 'Usul telah dihapus');
    }
}
