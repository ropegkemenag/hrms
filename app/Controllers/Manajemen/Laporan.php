<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SimpegModel;
use App\Models\CrudModel;

class Laporan extends BaseController
{
    public function index()
    {
        //
    }

    public function jumlah($kode=false)
    {
      $model = new SimpegModel;

      $kelola = ($kode)?decrypt($kode):session('kelola');
      // $kelola = '02090000000000';
      $data['jumlah'] = $model->query_array("exec sp_Linq_TotalPegawai @kode='".$kelola."'");

      return view('manajemen/laporan/jumlah', $data);
    }

    public function anomali()
    {
      $model = new SimpegModel;
      $data['pegawai'] = $model->getArray('vw_cek_data_masalah');

      return view('manajemen/laporan/anomali', $data);
    }

    public function pejabat($kode=1)
    {
      $model = new SimpegModel;
      $data['pejabat'] = $model->pejabat($kode);

      return view('manajemen/laporan/pejabat', $data);
    }

    public function pensiun($kode=false,$tahun=false)
    {
      $model = new SimpegModel;
      $kelola = ($kode)?$kode:session('kelola');
      if($tahun){
        $data['pegawai'] = $model->pensiunPegawai($kelola,$tahun);
        $data['kode'] = $kelola;
        $data['tahun'] = $tahun;

        return view('manajemen/laporan/pensiun_pegawai', $data);
      }else{
        $data['jumlah'] = $model->pensiun($kelola);

        return view('manajemen/laporan/pensiun', $data);
      }
    }

    public function pivot()
    {
      return view('manajemen/laporan/pivot');
    }

    public function jobmap($kode='')
    {
      $model = new CrudModel;
      $kelola = session('kelola');
      $data['satker'] = $model->getSatkerKelola($kelola);
      return view('manajemen/laporan/jobmap', $data);
    }

    public function jobmapdetail($kode='')
    {
      $model = new SimpegModel;
      $kelola = session('kelola');
      $data['satker'] = $model->getSatkerKelola($kelola);
      return view('manajemen/laporan/jobmap_detail', $data);
    }

    public function duk()
    {
      $model = new CrudModel;
      $kelola = session('kelola');
      $data['satker'] = $model->getSatkerKelola($kelola);

      return view('manajemen/laporan/duk', $data);
    }

    public function duk_generate()
    {
      $kode = $this->request->getVar('kodex');
      $nama = $this->request->getVar('namax');
      $model = new SimpegModel;

      $kelola = decrypt($kode);
      $nip = session('niplama');
      $generate = $model->query_array("exec spPRACETAK_INVENTARIS_PEGAWAI @NO_BACKUP='0', @KODE_UNIT_KERJA='".$kelola."', @KODE_GRUP_UNIT_KERJA='0', @KODE_LEVEL_JABATAN='0', @KODE_PANGKAT='0', @ISI_UNIT_KERJA='".$nama."', @USERID='".$nip."'");

      return $this->response->setJSON(['status'=>'ok']);
    }

    public function duk_cetak()
    {
      $model = new SimpegModel;

      $nip = session('niplama');
      $data['duk'] = (object) $model->query_array("exec spVIEWCETAK_INVENTARIS_PEGAWAI @USERID='".$nip."'");

      return view('manajemen/laporan/duk_cetak', $data);
    }
}
