<?php

namespace App\Controllers\Pemutakhiran;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use App\Models\SimpegModel;
use App\Models\UsulMutasiModel;
use Aws\S3\S3Client;

class Transfer extends BaseController
{
    public function index()
    {
      $model          = new UsulMutasiModel;

      $data['usul']   = $model->where('created_by', session('nip'))->findAll();
      $data['inbox']   = $model->where('satker_tujuan', session('kelola'))->findAll();
      return view('pemutakhiran/transfer/index', $data);
    }

    public function add()
    {
      $model          = new UsulMutasiModel;

      $data['user']   = false;
      return view('pemutakhiran/transfer/add', $data);
    }

    public function search()
    {
      $model          = new SimpegModel;
      $nip            = $this->request->getVar('nip');
      $satker         = kodekepala(session('kelola'));
      $data['user']   = $model->searchPegawai($nip,$satker);
      $data['satker']   = $model->getParentSatker();

      return view('pemutakhiran/transfer/add', $data);
    }

    public function save()
    {
      if (! $this->validate([
            'lampiran' => [
                'label' => 'Lampiran SK',
                'rules' => [
                    'uploaded[lampiran]',
                    'mime_in[lampiran,application/pdf]',
                    'max_size[lampiran,500]',
                ],
            ]
        ])) {

          session()->setFlashdata('message', 'Lampiran SK tidak sesuai');
          return redirect()->to('pemutakhiran/transfer');
        }

      $file_name = $_FILES['lampiran']['name'];
      $ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $file_name = 'transfer.'.$this->request->getVar('nip').'.'.$ext;
  		$temp_file_location = $_FILES['lampiran']['tmp_name'];

      $s3 = new S3Client([
        'region'  => 'us-east-1',
        'endpoint' => 'https://ropeg.kemenag.go.id:9000/',
        'use_path_style_endpoint' => true,
        'version' => 'latest',
        'credentials' => [
          // 'key'    => "118ZEXFCFS0ICPCOLIEJ",
          // 'secret' => "9xR+TBkYyzw13guLqN7TLvxhfuOHSW++g7NCEdgP",
          'key'    => "PkzyP2GIEBe8z29xmahI",
          'secret' => "voNVqTilX2iux6u7pWnaqJUFG1414v0KTaFYA0Uz",
        ],
        'http'    => [
            'verify' => false
        ]
      ]);

  		$result = $s3->putObject([
  			'Bucket' => 'hrms',
  			'Key'    => 'usul/transfer/'.$file_name,
  			'SourceFile' => $temp_file_location,
        'ContentType' => 'application/pdf'
  		]);

      $model = new UsulMutasiModel;

      $data = array(
        'nip' => $this->request->getVar('nip'),
        'nama' => $this->request->getVar('nama'),
        'satker_awal' => $this->request->getVar('satkerawal'),
        'satker_tujuan' => $this->request->getVar('satkertujuan'),
        'created_by' => session('nip'),
        'status' => 1,
        'lampiran' => $file_name,
      );

      $model->insert($data);

      session()->setFlashdata('message', 'Usul Mutasi berhasil disimpan');
      return redirect()->to('pemutakhiran/transfer');
    }

    public function delete($id)
    {
      $id = decrypt($id);

      $model = new UsulMutasiModel;
      $delete = $model->delete($id);
    }

    public function detail($id)
    {
      $id = decrypt($id);

      $model = new UsulMutasiModel;
      $data['usul'] = $model->find($id);

      return view('pemutakhiran/transfer/detail', $data);
    }

    public function approve($value='')
    {
      $id = decrypt($id);

      $simpeg = new SimpegModel;
      $update = $simpeg;

      $model = new UsulMutasiModel;
      $data['usul'] = $model->find($id);
    }

    public function decline($value='')
    {
      // code...
    }
}
