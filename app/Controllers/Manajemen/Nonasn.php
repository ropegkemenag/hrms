<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\NonasnModel;
use App\Models\CrudModel;

class Nonasn extends BaseController
{
    public function index()
    {
      $model = new NonasnModel;
      $data = [
            'pegawai' => $model->paginate(10),
            'pager' => $model->pager,
        ];

      return view('nonasn/index', $data);
    }

    public function add()
    {
      $model = new CrudModel;

      return view('nonasn/add');
    }

    public function save()
    {
      if (! $this->validate([
        'nik' => "required"
      ])) {
          session()->setFlashdata('message', 'Harap isi dengan lengkap');
          return redirect()->back()->withInput();
      }

      $model = new NonasnModel;

      $nip = session('nip');
      $data = [
          'KODE_SATKER' => session('kodesatker'),
          'NIK' => $this->request->getVar('nik'),
          'NO_KK' => $this->request->getVar('nokk'),
          'K2_NOMOR_PESERTA' => $this->request->getVar('k2nomor'),
          'K2_STATUS' => $this->request->getVar('k2status'),
          'NAMA_LENGKAP' => $this->request->getVar('nama'),
          'TEMPAT_LAHIR_KODE' => $this->request->getVar('tempatlahirkode'),
          'TEMPAT_LAHIR_NAMA' => $this->request->getVar('tempatlahir'),
          'TANGGAL_LAHIR' => $this->request->getVar('tanggallahir'),
          'JENIS_KELAMIN' => $this->request->getVar('jeniskelamin'),
          'PD_KODE' => $this->request->getVar('prodi'),
          'PD_PRODI' => $this->request->getVar('namaprodi'),
          'PD_NOMOR_IJAZAH' => $this->request->getVar('ijazah'),
          'PD_NAMA_PT' => $this->request->getVar('sekolah'),
          'PD_TANGGAL_LULUS' => $this->request->getVar('lulus'),
          'CREATED_BY' => $nip,
      ];

      $insert = $model->insert($data);

      return redirect()->to('nonasn/detail/'.$insert);
    }
}
