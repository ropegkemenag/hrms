<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;
use App\Models\SatkerModel;
use App\Models\SimpegModel;
use \Hermawan\DataTables\DataTable;

class Pegawai extends BaseController
{
    public function index()
    {
      // if(session('kelola') == 0){
      //   return $this->indexall();
      // }else{
        $model = new PegawaiModel;
        $smodel = new SatkerModel;
        $data['satker'] = $smodel->find(session('kelola'));
        $data['jabatan'] = $model->getJabatanSatker(session('kodesatker4'));
        $data['unit'] = $smodel->where('KODE_ATASAN',session('kelola'))->findAll();
        return view('manajemen/pegawai/data',$data);
      // }
    }

    public function indexall()
    {
      $model = new PegawaiModel;
      $smodel = new SatkerModel;
      $data['jabatan'] = $model->getJabatan();
      $data['unit'] = $smodel->where('JENIS_SATKER','PARENT')->findAll();
      return view('manajemen/pegawai/dataall',$data);
    }

    public function cari()
    {
      // print_r($_POST);
      $model = new PegawaiModel;
      $nama = $this->request->getVar('nama');
      $satker = $this->request->getVar('satker');

      $data['pegawai'] = $model->cariPegawai($nama,$satker);

      return view('manajemen/pegawai/index_', $data);
    }

    public function postpegawai()
    {
      $count = count($_POST);
      $where = '';
      for ($i=0; $i < $count; $i++) {
        $col = $_POST['column'][$i];
        $op = $_POST['operator'][$i];
        $val = $_POST['value'][$i];

        $where = $col." ".$op." '".$val."'";
      }
    }

    public function profil($nip,$menu=false)
    {
      $dnip = decrypt($nip);
      $model = new PegawaiModel;
      $simpeg = new SimpegModel;
      $data['pegawai'] = $model->cariProfil($dnip);
      $data['pendidikan'] = $simpeg->getArray('V_RIWAYAT_PENDIDIKAN',['NIP'=>$dnip]);
      $data['diklat'] = $simpeg->getArray('vwALL_DIKLAT', ['NIP'=>$dnip]);
      $data['jabatans'] = $simpeg->getArray('V_RIWAYAT_JABATAN',['NIP'=>$dnip]);
      $data['keluargapasangan'] = $simpeg->getArray('TD_SUAMI_ISTRI',['NIP'=>$dnip]);
      // $data['keluargapasangan'] = $simpeg->getArray('TD_KELUARGA',['NIP'=>$dnip,'JENIS_KELUARGA'=>'SK']);

      if($menu){
        return $this->{$menu}($nip,$data);
      }else{
        return view('manajemen/pegawai/profil',$data);
      }
    }

    public function pendidikan($nip,$data)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['pendidikan'] = $model->getArray('V_RIWAYAT_PENDIDIKAN',['NIP'=>$nip]);
      $data['diklat'] = $model->getArray('vwALL_DIKLAT', ['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/pendidikan',$data);
    }

    public function pekerjaan($nip,$data)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['jabatans'] = $model->getArray('V_RIWAYAT_JABATAN',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/pekerjaan',$data);
    }

    public function indisiplin($nip)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['jabatans'] = $model->getArray('V_RIWAYAT_JABATAN',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/indisiplin',$data);
    }

    public function skp($nip)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['jabatans'] = $model->getArray('V_RIWAYAT_JABATAN',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/skp',$data);
    }

    public function kgb($nip)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['jabatans'] = $model->getArray('V_RIWAYAT_JABATAN',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/kgb',$data);
    }

    public function alamat($nip,$data)
    {
      $nip = decrypt($nip);

      $model = new SimpegModel;
      $data['alamat'] = $model->getRow('TD_ALAMAT',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/alamat',$data);
    }

    public function keluarga($nip)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['suami'] = $model->getArray('TD_SUAMI_ISTRI',['NIP'=>$nip]);
      $data['anak'] = $model->getArray('TD_ANAK',['NIP'=>$nip]);
      $data['keluarga'] = $model->getArray('TD_KELUARGA',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/keluarga',$data);
    }

    public function organisasi($nip)
    {
      $nip = decrypt($nip);
      $model = new SimpegModel;
      $data['org'] = $model->getArray('TR_ORGANISASI',['NIP'=>$nip]);
      return view('manajemen/pegawai/profil/organisasi',$data);
    }

    public function getdata()
    {
      $db = \Config\Database::connect('default', false);
      // $builder = $db->table('TEMP_PEGAWAI')->select('NIP, NIP_BARU, NAMA_LENGKAP, TAMPIL_JABATAN, SATKER_2')->where(['KODE_SATKER_4'=>session('kodesatker4')]);
      $builder = $db->table('TEMP_PEGAWAI')->select('NIP, NIP_BARU, NAMA_LENGKAP, TAMPIL_JABATAN, SATKER_2, SATKER_3, SATKER_4, STATUS_PEGAWAI')->like('KODE_SATUAN_KERJA', kodekepala(session('kelola')), 'after');

      return DataTable::of($builder)
      ->add('action', function($row){
          return '<a href="'.site_url('manajemen/pegawai/profil/'.encrypt($row->NIP)).'" type="button" class="btn btn-primary btn-sm" target="_blank">Profil</a>';
      })->filter(function ($builder, $request) {

        if ($request->jabatan)
            $builder->where('LEVEL_JABATAN', $request->jabatan);

        if ($request->jenis)
            $builder->where('STATUS_PEGAWAI', $request->jenis);

        if ($request->unit)
            $builder->like('KODE_SATUAN_KERJA', kodekepala($request->unit), 'after');

      })
      ->toJson(true);
    }

    public function getdataall()
    {
      $db = \Config\Database::connect('default', false);
      $builder = $db->table('TEMP_PEGAWAI')->select('NIP, NIP_BARU, NAMA_LENGKAP, TAMPIL_JABATAN, SATKER_2, SATKER_3');

      return DataTable::of($builder)
      ->add('action', function($row){
          return '<a href="'.site_url('manajemen/pegawai/profil/'.encrypt($row->NIP)).'" type="button" class="btn btn-primary btn-sm" target="_blank"><i class="ri-account-circle-fill"></i></a>';
      })->filter(function ($builder, $request) {

        if ($request->jabatan)
            $builder->where('LEVEL_JABATAN', $request->jabatan);

        if ($request->jenis)
            $builder->where('STATUS_PEGAWAI', $request->jenis);

        $unit = kodekepala($request->unit);
        if ($request->unit)
            $builder->like('KODE_SATUAN_KERJA', $unit, 'after');

      })
      ->toJson(true);
    }

    public function getCountSatker($kode)
    {
      $model = new PegawaiModel;
      $jumlah = $model->getCountSatker($kode);

      return $this->response->setJSON($jumlah);
    }
}
