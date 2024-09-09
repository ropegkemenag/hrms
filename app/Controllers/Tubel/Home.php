<?php

namespace App\Controllers\Tubel;

use App\Controllers\BaseController;
use App\Models\SimpegModel;
use App\Models\CrudModel;
use App\Models\TubelModel;
use App\Models\LogModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TubelModel();
        $data['usul'] = $model->findAll();
        return view('tubel/index', $data);
    }

    public function detail($id,$step=false)
    {
      $model = new TubelModel();
      $data['usul'] = $model->find(decrypt($id));

      $crud = new CrudModel();
      $data['dokumen'] = $crud->getDokumen(6,decrypt($id));
      $data['jabatans'] = $crud->getJabatans();

      if($data['usul']->status_usulan == 1 || $data['usul']->status_usulan == 4){

        if($step == 1){
          return view('tubel/detail_1', $data);
        }else if($step == 2){
          return view('tubel/detail_2', $data);
        }else if($step == 3){
          return view('tubel/detail_3', $data);
        }else{
          return view('tubel/detail_1', $data);
        }
      }else{
        return view('tubel/preview', $data);
      }

    }

    public function savedata()
    {
      if (! $this->validate([
        'nomorsurat' => "required",
        'tglsurat' => "required",
        'program' => "required",
        'univ' => "required",
        'prodi' => "required",
        'tahun' => "required",
      ])) {
          return redirect()->back()->with('error', 'Data tidak lengkap');
          // echo 'Data tidak lengkap';
      }else{
        $jf = new TubelModel;

        $data = [
            'pengantar_nomor' => $this->request->getVar('pengantar_nomor'),
            'pengantar_jabatan' => $this->request->getVar('pengantar_jabatan'),
            'surat_perjanjian_no' => $this->request->getVar('nomorsurat'),
            'surat_perjanjian_tanggal' => $this->request->getVar('tglsurat'),
            'program' => $this->request->getVar('program'),
            'universitas' => $this->request->getVar('univ'),
            'prodi' => $this->request->getVar('prodi'),
            'tahun_akademik' => $this->request->getVar('tahun'),
        ];

        $id = decrypt($this->request->getVar('id'));
        $jf
        ->where(['id'=>$id])
        ->set($data)
        ->update();

        // $this->draftusul($this->request->getVar('id'));

        return redirect()->back()->with('message', 'Data telah diupdate');
        // echo 'Data telah diupdate';
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
      $jenis = $this->request->getVar('jenis');

      $pegawai = $simpeg->query_row("SELECT * FROM TEMP_PEGAWAI WHERE NIP_BARU='$nip' AND KODE_SATKER_4 LIKE '$satker%'");

      if($pegawai){
        $param = [
          'kode_satker' => $pegawai->KODE_SATUAN_KERJA,
          'nip' => $pegawai->NIP_BARU,
          'nama' => $pegawai->NAMA_LENGKAP,
          'jabatan' => $pegawai->TAMPIL_JABATAN,
          'golongan' => $pegawai->GOL_RUANG,
          'pangkat' => $pegawai->PANGKAT,
          'tgl_lahir' => $pegawai->TANGGAL_LAHIR,
          'unit_kerja' => $pegawai->KETERANGAN_SATUAN_KERJA,
          'jenis_tubel' => $jenis,
          'status_usulan' => 1,
          'tahapan' => 'Draft',
          'created_by' => session('nip'),
          'created_by_name' => session('nama')
        ];

        $berkas = new TubelModel();
        $berkas->insert($param);

        $logm = new LogModel();
        $logm->insert(['id_usul'=>$berkas->getInsertID(),'id_layanan'=>6,'status_usulan'=>1,'keterangan'=>'Input Usulan','created_by'=>session('nip'),'created_by_name'=>session('nama')]);

        $session->setFlashdata('message', 'Pegawai telah ditambahkan');
      }else{
        $session->setFlashdata('message', 'Pegawai tidak ditemukan. Pastikan Pegawai yang ditambahkan terdapat pada Satker Anda.');
      }

      return redirect()->to('tubel');
    }

    public function deleteusul($id,$nip)
    {
      $berkas = new TubelModel();
      $berkas->where(['id'=>decrypt($id)])->delete();

      return redirect()->back()->with('message', 'Usulan telah dihapus');
    }

    public function submit($id)
    {
      $id = decrypt($id);

      $berkas = new TubelModel();
      $berkas->where(['id'=>$id])->set(['status_usulan'=>2,'tahapan'=>'Kirim Usulan','tanggal_usul' => date('Y-m-d H:i:s')])->update();

      $logm = new LogModel();
      $logm->insert(['id_usul'=>$id,'id_layanan'=>1,'status_usulan'=>2,'keterangan'=>'Submit Usulan','created_by'=>session('nip'),'created_by_name'=>session('nama')]);

      return redirect()->back()->with('message', 'Usulan telah Dikirim');
    }
}
