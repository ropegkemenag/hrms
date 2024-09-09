<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\AccessModel;
use App\Models\Access80Model;
use App\Models\CrudModel;

class Access extends BaseController
{
    public function index()
    {
        $model = new AccessModel;
        $crud = new CrudModel;

        $kodesatker3 = session('kodesatker3');
        $kelola = session('kelola');
        $data['access'] = $crud->getAccess(kodekepala($kelola));
        $data['satker'] = $crud->getSatkerKelola($kelola);
        $data['apps'] = $crud->getResult('UM_APP',['REMARK'=>1]);

        return view('manajemen/access/index', $data);
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
        // $model80 = new Access80Model;

        $cek = $model->where(['APP_ID'=>$this->request->getVar('app'),'NIP' => $this->request->getVar('nip')])->find();

        if($cek){
            return redirect()->back()->with('message','Gagal diinput. Pegawai telah terdaftar sebelumnya.');
        }else{

            $nip = session('nip');
            $data = [
                'CREATED_BY' => session('kodesatker'),
                'NIP' => $this->request->getVar('nip'),
                'ROLE' => 6,
                'APP_ID' => $this->request->getVar('app'),
                'KODE_SATKER' => decrypt($this->request->getVar('satker')),
                'CREATED_BY' => $nip,
            ];

            $insert = $model->insert($data);
            // $insert = $model80->insert($data);

            return redirect()->back()->with('message','Akses telah ditambahkan.');
        }

    }

    public function delete($id)
    {
        $model = new AccessModel;
        // $model80 = new Access80Model;

        $delete = $model->delete($id);
        // $delete = $model80->delete($id);
        return redirect()->back()->with('message','Akses telah dihapus.');
    }
}
