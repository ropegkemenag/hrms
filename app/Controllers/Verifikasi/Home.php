<?php

namespace App\Controllers\Verifikasi;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;
use App\Models\PegawaiModel;
use App\Models\SatkerModel;

class Home extends BaseController
{
    public function index()
    {
      $model = new PegawaiModel;
      $smodel = new SatkerModel;
      $data['satker'] = $smodel->find(session('kelola'));
      $data['jabatan'] = $model->getJabatanSatker(session('kodesatker4'));

      return view('verifikasi/index', $data);
    }

    public function getlist()
    {
      $db = \Config\Database::connect('default', false);
      $builder = $db->table('TR_LIST')
                  ->select('TK, AN, PD, DK, PK, JB, PA, TJ, PG, OR, KT, KG, KI, PP, PN, SR, NAMA_LENGKAP, NIP_BARU, SATKER_3, SATKER_1, TAMPIL_JABATAN, PANGKAT AS PANGKAT_SKRG, GOL_RUANG AS GOL_RUANG_SKRG')
                  ->join('TEMP_PEGAWAI b', 'TR_LIST.NIP = b.NIP')
                  ->like('b.KODE_SATUAN_KERJA', kodekepala(session('kelola')), 'after');

      return DataTable::of($builder)
      ->add('action', function($row){
          return '<a href="'.site_url('manajemen/pegawai/profil/'.encrypt($row->NIP_BARU)).'" type="button" class="btn btn-primary btn-sm" target="_blank">Profil</a>';
      })->filter(function ($builder, $request) {

        if ($request->jabatan)
            $builder->where('b.LEVEL_JABATAN', $request->jabatan);

        if ($request->unit)
            $builder->like('b.KODE_SATUAN_KERJA', kodekepala($request->unit), 'after');

      })
      ->toJson(true);
    }

    public function inbox()
    {
      $model = new PegawaiModel;
      $smodel = new SatkerModel;
      $data['jabatan'] = $model->getJabatanSatker(session('kodesatker4'));
      $data['unit'] = $smodel->where('KODE_ATASAN',session('kelola'))->findAll();

      return view('verifikasi/inbox', $data);
    }

    public function riwayat()
    {
      return view('verifikasi/riwayat');
    }
}
