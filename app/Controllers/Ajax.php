<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UnorModel;

class Ajax extends BaseController
{
    public function index()
    {
        //
    }

    public function searchunor()
    {
      $model = new UnorModel;
      $search = $this->request->getVar('search');

      $data = $model->like('nama', $search, 'both')->findAll();
      return $this->response->setJSON($data);
    }

    public function getpegawai($nip)
    {
      $request = \Config\Services::request();
      $client = \Config\Services::curlrequest();

      $apiurl = 'https://api.kemenag.go.id/rest/pegawaibysatker/'.$nip.'/'.kodekepala(session('kelola'));

      $response = $client->request('GET', $apiurl, [
        'headers' => [
            'Accept'        => 'application/json',
            'X-API-KEY'     => 'NKRIharg4M@t!!!'
        ],
        'verify' => false
      ]);

      $data = json_decode($response->getBody());
      return $this->response->setJSON($data);
    }
}
