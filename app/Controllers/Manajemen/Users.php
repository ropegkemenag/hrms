<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SimpegModel;

class Users extends BaseController
{
    public function index()
    {
        $data['user']   = false;
        return view('manajemen/master/users/index', $data);
    }

    public function search()
    {
      $model          = new SimpegModel;
      $nip            = $this->request->getVar('nip');
      $satker         = kodekepala(session('kelola'));
      $data['user']   = $model->search_user($nip,$satker);

      return view('manajemen/master/users/index', $data);
    }

    public function lokasi($satker=false)
    {
        $satker = ($satker)?decrypt($satker):session('kelola');

        $simpeg = new SimpegModel;
        $data['satker'] = $simpeg->subsatker($satker);
        return view('manajemen/master/satker/lokasi', $data);
    }

    public function changepassword()
    {
        $nip = decrypt($this->request->getVar('nip'));
        $password = $this->request->getVar('password');

        $password = md5($password);
        $password = substr($password, 16,32).substr($password, 0,16);

        $simpeg = new SimpegModel;
        $update = $simpeg->updatepassword($nip,$password);

        // $parent = kodeparent(session('kelola')).'0000000000';
        $pegawai = $simpeg->getRow('TEMP_PEGAWAI',['NIP_BARU'=>$nip]);
        $server = $simpeg->getRow('TM_SATKER_MAP',['KODE_SATUAN_KERJA'=>$pegawai->KODE_SATKER_4]);

        $client = \Config\Services::curlrequest();
        $client->request('POST', $server->SERVER2.'/setpasswd', [
            'form_params' => [
                'nip' => $nip,
                'pwd' => $password,
            ],
        ]);

        if($this->updateuser($nip)){
          return redirect()->to('setting/user');
        }else{
          return redirect()->to('setting/user');
        }

    }

    public function updateuser($nip)
    {
      $simpeg = new SimpegModel;

      $pegawai = $simpeg->getRow('TEMP_PEGAWAI',['NIP_BARU'=>$nip]);
      $server = $simpeg->getRow('TM_SATKER_MAP',['KODE_SATUAN_KERJA'=>$pegawai->KODE_SATKER_4]);

      $client = \Config\Services::curlrequest();
      $get = $client->get($server->SERVER2.'/redis/updateuser/'.$nip, ['debug' => true]);
      $get = $client->get($server->SERVER2.'/redis/updatepegawai/'.$nip, ['debug' => true]);

      // print_r($get);

      return true;
    }
}
