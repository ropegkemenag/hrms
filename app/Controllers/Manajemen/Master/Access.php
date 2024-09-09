<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\AccessModel;
use App\Models\CrudModel;

class Access extends BaseController
{
    public function index()
    {
        $model = new AccessModel;
        $crud = new CrudModel;

        $kodesatker3 = session('kodesatker3');
        $kelola = session('kelola');
        // $data['access'] = $crud->getAccessAll();
        $data['satker'] = $crud->getResult('TM_SATUAN_KERJA',['JENIS_SATKER'=>'PARENT']);
        $data['apps'] = $crud->getResult('UM_APP');

        return view('master/access/index', $data);
    }

    public function add()
    {
        if (! $this->validate([
            'nip' => "required",
            'satker' => "required",
            'nama' => "required",
            'app' => "required",
          ])) {
              return redirect()->back()->with('message','Harap isi dengan lengkap.');
          }

        $model = new AccessModel;

        $cek = $model->where(['APP_ID'=>$this->request->getVar('app'),'NIP' => $this->request->getVar('nip')])->find();

        if($cek){
            return redirect()->back()->with('message','Gagal diinput. Pegawai telah terdaftar sebelumnya.');
        }else{

            $nip = session('nip');
            $kodesatker = decrypt($this->request->getVar('satker'));
            $data = [
                'NIP' => $this->request->getVar('nip'),
                'ROLE' => 6,
                'APP_ID' => $this->request->getVar('app'),
                'KODE_SATKER' => $kodesatker,
                'CREATED_BY' => $nip,
            ];

            $insert = $model->insert($data);

            return redirect()->back()->with('message','Akses telah ditambahkan.');
        }

    }

    public function delete($id)
    {
        $model = new AccessModel;

        $id = decrypt($id);

        $delete = $model->delete($id);
        return redirect()->back()->with('message','Akses telah dihapus.');
    }
}
