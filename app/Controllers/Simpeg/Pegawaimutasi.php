<?php

namespace App\Controllers\Simpeg;

use App\Controllers\BaseController;
use App\Models\UsulDatamutasiModel;
use App\Models\SimpegModel;
use App\Models\LogModel;
use Aws\S3\S3Client;

class Pegawaimutasi extends BaseController
{
    public function index()
    {
      $model = new UsulDatamutasiModel();
      $data['usul'] = $model->where('created_by',session('nip'))->findAll();

      $model          = new SimpegModel;
      $data['satker']   = $model->getParentSatker();

      return view('simpeg/pegawai/mutasi', $data);
    }

    public function addusul()
    {
      if (! $this->validate([
        'nip' => "required",
        'nama' => "required",
        'satkertujuan' => "required",
        'dokumen' => [
  				'rules' => 'uploaded[dokumen]|ext_in[dokumen,pdf,PDF]|max_size[dokumen,2048]',
  				'errors' => [
  					'uploaded' => 'Harus Ada File yang diupload',
  					'mime_in' => 'File Extention Harus Berupa pdf',
  					'max_size' => 'Ukuran File Maksimal 1 MB'
  				]
  			]
      ])) {
          return redirect()->back()->with('error', 'Data tidak lengkap');
      }

      $nip = $this->request->getVar('nip');

      $file_name = $_FILES['dokumen']['name'];
      $ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $file_name = 'docu.12.'.$nip.'.'.$ext;
      $temp_file_location = $_FILES['dokumen']['tmp_name'];

      $s3 = new S3Client([
        'region'  => 'us-east-1',
        'endpoint' => 'https://ropeg.kemenag.go.id:9000/',
        'use_path_style_endpoint' => true,
        'version' => 'latest',
        'credentials' => [
          'key'    => "PkzyP2GIEBe8z29xmahI",
          'secret' => "voNVqTilX2iux6u7pWnaqJUFG1414v0KTaFYA0Uz",
        ],
        'http'    => [
            'verify' => false
        ]
      ]);

      $result = $s3->putObject([
        'Bucket' => 'layanan',
        'Key'    => 'dokumen/'.$file_name,
        'SourceFile' => $temp_file_location,
        'ContentType' => 'application/pdf'
      ]);

      $url = $result->get('ObjectURL');

      if($url){
        $param = [
          'nip' => $nip,
          'nama' => $this->request->getVar('nama'),
          'nomor_sk' => $this->request->getVar('nomor_sk'),
          'tanggal_sk' => $this->request->getVar('tanggal_sk'),
          'tmt' => $this->request->getVar('tmt'),
          'satker_tujuan_kode' => $this->request->getVar('satkertujuan'),
          'satker_tujuan_nama' => $this->request->getVar('satkertujuannama'),
          'satker_awal_kode' => session('kodesatker4'),
          'satker_awal_nama' => session('satker4'),
          'status' => 1,
          'created_by' => session('nip'),
          'created_by_name' => session('nama')
        ];

        $berkas = new UsulDatamutasiModel();
        $berkas->insert($param);

        $logm = new LogModel();
        $logm->insert(['id_usul'=>$berkas->getInsertID(),'id_layanan'=>11,'status_usulan'=>1,'keterangan'=>'Input Usulan','created_by'=>session('nip'),'created_by_name'=>session('nama')]);

        return redirect()->back()->with('message', 'Usul telah ditambahkan');
      }else{
        return redirect()->back()->with('error', 'Gagal tambah usulan. Silahkan coba lagi.');
      }

    }

    public function delete($id)
    {
      $id = decrypt($id);
      $model = new UsulDatamutasiModel();

      $delete = $model->delete($id);
      return redirect()->back()->with('message', 'Usul telah dihapus');
    }

    public function inbox()
    {
      $model = new UsulDatamutasiModel();
      $data['usul'] = $model->whereIn('status',[1,9])->where(['satker_tujuan_kode'=>session('kodesatker4')])->findAll();

      return view('simpeg/pegawai/mutasi_inbox', $data);
    }

    public function accept($id)
    {
      $model = new UsulDatamutasiModel;
      $simpeg = new SimpegModel;

      $id = decrypt($id);

      $pegawai = $model->find($id);
      $simpeg->insertjabatan($pegawai->nip,$pegawai->satker_tujuan_kode,$pegawai->nomor_sk,$pegawai->tanggal_sk,$pegawai->tmt);

      $model->update($id,['status'=>9,'approved_by'=>session('nip'),'approved_by_name'=>session('nama')]);

      return redirect()->back()->with('message', 'Usulan telah diterima. Silahkan sesuaikan data pada SIMPEG');
    }

    public function decline()
    {
      $model = new UsulDatamutasiModel;

      $id = $this->request->getVar('id');
      $id = decrypt($id);
      $keterangan = $this->request->getVar('keterangan');

      $model->update($id,['status'=>8,'keterangan'=>$keterangan,'approved_by'=>session('nip'),'approved_by_name'=>session('nama')]);

      return $this->response->setJSON(array('info' => 'success'));
    }
}
