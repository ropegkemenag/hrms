<?php

namespace App\Controllers\Pemutakhiran;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use App\Models\SimpegModel;
use App\Models\UsulPensiunModel;
use Aws\S3\S3Client;

class Pensiun extends BaseController
{
    public function index()
    {
      $model = new UsulPensiunModel;

      $data['usul']   = $model->where('created_by', session('nip'))->findAll();
      return view('pemutakhiran/pensiun/index', $data);
    }

    public function save()
    {
      if (! $this->validate([
        'nip' => "required",
        'nama' => "required",
        'tmt_pensiun' => "required",
        'lampiran' => [
            'label' => 'Lampiran SK',
            'rules' => [
                'uploaded[lampiran]',
                'mime_in[lampiran,application/pdf]',
                'max_size[lampiran,500]',
            ],
        ]
      ])) {
        return redirect()->back()->with('message', 'Pastikan Semua sudah terisi');
      }

      $file_name = $_FILES['lampiran']['name'];
      $ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $file_name = 'pensiun.'.$this->request->getVar('nip').'.'.$ext;
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
  			'Key'    => 'usul/pensiun/'.$file_name,
  			'SourceFile' => $temp_file_location,
        'ContentType' => 'application/pdf'
  		]);

      $model = new UsulPensiunModel();

      $data = [
          'nip' => $this->request->getVar('nip'),
          'nama' => $this->request->getVar('nama'),
          'tmt_pensiun' => $this->request->getVar('tmt_pensiun'),
          'lampiran' => $file_name,
          'status' => 1,
          'created_by' => session('nip'),
        ];

      $model->insert($data);

      return redirect()->back()->with('message', 'Usulan berhasil terkirim');
    }

    public function delete($id)
    {
      $id = decrypt($id);

      $model = new UsulPensiunModel;
      $delete = $model->delete($id);

      return redirect()->back()->with('message', 'Usulan telah dihapus');
    }

    public function done($id)
    {
      $id = decrypt($id);

      $model = new UsulPensiunModel;
      $delete = $model->update($id, ['status'=>9]);

      return redirect()->back()->with('message', 'Usulan telah diselesaikan');
    }

    public function decline($value='')
    {
      // code...
    }
}
