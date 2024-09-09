<?php

namespace App\Controllers\Pemutakhiran;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use App\Models\SimpegModel;
use App\Models\UsulUnorModel;

class Unor extends BaseController
{
    public function index()
    {
      $model = new UsulUnorModel;

      $data['usul']   = $model->where('created_by', session('nip'))->findAll();
      return view('pemutakhiran/unor/index', $data);
    }

    public function save()
    {
      if (! $this->validate([
        'nama_unor' => "required"
      ])) {
        return redirect()->back()->with('message', 'Pastikan Semua sudah terisi');
      }

      $model = new UsulUnorModel();

      $data = [
          'nama_unor' => $this->request->getVar('nama_unor'),
          'jenis' => $this->request->getVar('tipe'),
          'status' => 1,
          'created_by' => session('nip'),
        ];

      $model->insert($data);

      return redirect()->back()->with('message', 'Usulan berhasil terkirim');
    }

    public function delete($id)
    {
      $id = decrypt($id);

      $model = new UsulUnorModel;
      $delete = $model->delete($id);

      return redirect()->back()->with('message', 'Usulan telah dihapus');
    }

    public function done($id)
    {
      $id = decrypt($id);

      $model = new UsulUnorModel;
      $delete = $model->update($id, ['status'=>9]);

      return redirect()->back()->with('message', 'Usulan telah diselesaikan');
    }

    public function decline($value='')
    {
      // code...
    }
}
