<?php

namespace App\Controllers\Layanan\Kenaikanjf;

use App\Controllers\BaseController;
use App\Models\SimpegModel;
use App\Models\CrudModel;
use App\Models\KenaikanjfModel;
use App\Models\LogModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new KenaikanjfModel();
        $data['usul'] = $model->like('kode_satker',session('kepala'),'after')->findAll();
        return view('kenaikanjf/index', $data);
    }

    public function detail($id,$step=false)
    {
      $model = new KenaikanjfModel();
      $data['usul'] = $model->find(decrypt($id));

      $crud = new CrudModel();
      $data['dokumen'] = $model->getDokumen(1,decrypt($id));
      $data['jabatans'] = $model->getJabatans();

      if($data['usul']->status_usulan == 1 || $data['usul']->status_usulan == 4){

        if($step == 1){
          return view('kenaikanjf/detail_1', $data);
        }else if($step == 2){
          return view('kenaikanjf/detail_2', $data);
        }else if($step == 3){
          return view('kenaikanjf/detail_3', $data);
        }else{
          return view('kenaikanjf/detail_1', $data);
        }
      }else{
        return view('kenaikanjf/preview', $data);
        // print_r($data['usul']);
        // echo decrypt($id);
      }

    }

    public function detailx($id)
    {
      $model = new KenaikanjfModel();
      $data['usul'] = $model->find(decrypt($id));

      $crud = new CrudModel();
      $data['dokumen'] = $crud->getDokumen(1,decrypt($id));
      $data['jabatans'] = $crud->getJabatans();

      if($data['usul']->status_usulan == 1 || $data['usul']->status_usulan == 4){
        return view('kenaikanjf/detail', $data);
      }else{
        return view('kenaikanjf/preview', $data);
      }

    }

    public function savedata()
    {
      if (! $this->validate([
        'jabatan_lama' => "required",
        'jabatan_baru' => "required",
        'pak' => "required",
      ])) {
          return redirect()->back()->with('error', 'Data tidak lengkap');
      }else{
        $jf = new KenaikanjfModel;

        $data = [
            'pengantar_nomor' => $this->request->getVar('pengantar_nomor'),
            'pengantar_dari' => $this->request->getVar('pengantar_dari'),
            'pengantar_tanggal' => $this->request->getVar('pengantar_tanggal'),
            'jabatan_lama' => $this->request->getVar('jabatan_lama'),
            'jabatan_baru' => $this->request->getVar('jabatan_baru'),
            'pak' => $this->request->getVar('pak')
        ];

        $id = decrypt($this->request->getVar('id'));
        $jf
        ->where(['id'=>$id])
        ->set($data)
        ->update();

        // $this->draftusul($this->request->getVar('id'));

        return redirect()->back()->with('message', 'Data telah diupdate');
      }
    }

    public function addusul()
    {
      $session = session();
      if (! $this->validate([
        'nip' => "required"
      ])) {
          $session->setFlashdata('message', $this->validator->getErrors());
          return redirect()->to('usul');
      }

      $simpeg = new SimpegModel();
      $satker = session('kepala');
      $nip = $this->request->getVar('nip');

      $pegawai = $simpeg->query_row("SELECT * FROM TEMP_PEGAWAI WHERE NIP_BARU='$nip' AND KODE_SATKER_4 LIKE '$satker%'");

      if($pegawai){
        $param = [
          'kode_satker' => $pegawai->KODE_SATUAN_KERJA,
          'nip' => $pegawai->NIP_BARU,
          'nama' => $pegawai->NAMA_LENGKAP,
          'jabatan' => $pegawai->TAMPIL_JABATAN,
          'jabatan_lama' => $pegawai->TAMPIL_JABATAN,
          'level_jabatan' => $pegawai->LEVEL_JABATAN,
          'golongan' => $pegawai->GOL_RUANG,
          'pangkat' => $pegawai->PANGKAT,
          'unit_kerja' => $pegawai->KETERANGAN_SATUAN_KERJA,
          'status_usulan' => 1,
          'id_layanan' => 1,
          'tahapan' => 'Draft',
          'created_by' => session('nip'),
          'created_by_name' => session('nama')
        ];

        $berkas = new KenaikanjfModel();
        $berkas->insert($param);

        $logm = new LogModel();
        $logm->insert(['id_usul'=>$berkas->getInsertID(),'id_layanan'=>1,'status_usulan'=>1,'keterangan'=>'Input Usulan','created_by'=>session('nip'),'created_by_name'=>session('nama')]);

        $session->setFlashdata('message', 'Pegawai telah ditambahkan');
      }else{
        $session->setFlashdata('message', 'Pegawai tidak ditemukan. Pastikan Pegawai yang ditambahkan terdapat pada Satker kodesatker4 Anda.');
      }

      return redirect()->to('mutasi/kenaikanjf');
    }

    public function deleteusul($id,$nip)
    {
      $berkas = new KenaikanjfModel();
      $berkas->where(['id'=>decrypt($id)])->delete();

      return redirect()->back()->with('message', 'Usulan telah dihapus');
    }

    public function submit($id)
    {
      $id = decrypt($id);

      $berkas = new KenaikanjfModel();
      $berkas->where(['id'=>$id])->set(['status_usulan'=>2,'tahapan'=>'Kirim Usulan','tanggal_usul' => date('Y-m-d H:i:s')])->update();

      $logm = new LogModel();
      $logm->insert(['id_usul'=>$id,'id_layanan'=>1,'status_usulan'=>2,'keterangan'=>'Submit Usulan','created_by'=>session('nip'),'created_by_name'=>session('nama')]);

      return redirect()->back()->with('message', 'Usulan telah Dikirim');
    }
}
