<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SatkerModel;

class Auth extends BaseController
{

  public function index()
  {
    $this->login();
  }

  public function login()
  {
    if (!session()->get('isLoggedIn')) {
      return redirect()->to($_ENV['SSO_SIGNIN'].'?appid='.$_ENV['SSO_APPID']);
    }else{
      return redirect()->to('formasi');
    }
  }

  public function callback()
  {
    $request = \Config\Services::request();
    $client = \Config\Services::curlrequest();

    $token = $request->getVar('token') ?? '';
    if($token){
      $verify_url = $_ENV['SSO_VERIFY'];

      $response = $client->request('POST', $verify_url, [
        'headers' => [
            'Accept'        => 'application/json',
            'Authorization' => 'Bearer '. $token,
        ],
        'verify' => false
      ]);

      $data = json_decode($response->getBody());
      // print_r($data);
      if($data->status == 200){
        $data = $data->pegawai;
          if($data->SATKER_KELOLA != NULL){
            $ses_data = [
              'nip'        => $data->NIP,
              'niplama'    => $data->NIP_LAMA,
              'nama'       => $data->NAMA,
              'pangkat'    => $data->PANGKAT,
              'golongan'   => $data->GOLONGAN,
              'jabatan'    => $data->JABATAN,
              'level'      => $data->KODE_LEVEL_JABATAN,
              'kodesatker3' => $data->KODE_SATKER_3,
              'satker3'     => $data->SATKER_3,
              'kodesatker4' => $data->KODE_SATKER_4,
              'satker4'     => $data->SATKER_4,
              'kodesatker5' => $data->KODE_SATKER_5,
              'satker'     => '',
              'kelola'     => $data->SATKER_KELOLA,
              'isLoggedIn' => TRUE
            ];
            session()->set($ses_data);
            return redirect()->to('/');
          }else{
            return redirect()->to('auth/forbidden');
          }

      }else{
        echo $data->msg;
      }
    }else{
      echo 'no Token';
    }
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to($_ENV['SSO_SIGNIN'].'?appid='.$_ENV['SSO_APPID']);
  }
}
