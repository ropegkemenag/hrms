<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SatkerModel;
use App\Models\SimpegModel;
use App\Models\PegawaiLatModel;

class Satker extends BaseController
{
    public function index()
    {
        //
    }

    public function getchild($parent)
    {
      $model = new SatkerModel;
      $satker = $model->where('KODE_ATASAN',$parent)->findAll();

      return $this->response->setJSON($satker);
    }

    public function lokasi($satker=false)
    {
        $satker = ($satker)?decrypt($satker):session('kelola');

        $simpeg = new SimpegModel;
        $data['satker'] = $simpeg->subsatker($satker);
        return view('master/satker/lokasi', $data);
    }

    public function lokasipegawai()
    {
        $satker = session('kelola');

        $simpeg = new SimpegModel;
        $data['pegawai'] = $simpeg->temppegawailat($satker);
        return view('master/satker/lokasipegawai', $data);
    }

    public function lokasisave()
    {
        $satker = decrypt($this->request->getVar('kode'));
        $lat = $this->request->getVar('latitude');
        $lon = $this->request->getVar('longitude');

        $simpeg = new SimpegModel;
        $update = $simpeg->updatekoordinat($satker,$lat,$lon);

        return redirect()->back()->with('message', 'Lokasi berhasil diubah.');
    }

    public function lokasipegawaisave()
    {
        if (! $this->validate([
            'nip' => "required",
            'nama' => "required",
            'latitude' => "required",
            'longitude' => "required",
          ])) {
              return redirect()->back()->with('message','Harap isi dengan lengkap.');
          }

        if (! $this->validate([
        'nip' => "is_unique[TEMP_PEGAWAI_LATLON.NIP_BARU]",

        ])) {
        session()->setFlashdata('message', 'NIP Sudah terdaftar!');
        return redirect()->to('usulan');
        }

        $model = new PegawaiLatModel;

            $nip = session('nip');
            $data = [
                'NIP_BARU' => $this->request->getVar('nip'),
                'NAMA' => $this->request->getVar('nama'),
                'KODE_SATKER' => session('kelola'),
                'NAMA_GEDUNG' => $this->request->getVar('gedung'),
                'LAT' => $this->request->getVar('latitude'),
                'LON' => $this->request->getVar('longitude'),
                'CREATED_BY' => $nip,
            ];

            $insert = $model->insert($data);

            return redirect()->back()->with('message','Data telah ditambahkan.');

    }

    public function lokasipegawaidelete($nip)
    {
        $model = new PegawaiLatModel;

        $delete = $model->delete(decrypt($nip));
        return redirect()->back()->with('message','Data telah dihapus.');
    }
}
