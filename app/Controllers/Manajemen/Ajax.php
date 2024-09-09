<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use App\Models\SimpegModel;
use \Hermawan\DataTables\DataTable;

class Ajax extends BaseController
{
    public function index()
    {
        //
    }

    public function getpegawai($nip)
    {
      $model = new CrudModel();

      if(session('role') == 1){
        $json = $model->getResult('TEMP_PEGAWAI',['NIP_BARU'=>$nip]);
      }else{
        $json = $model->getResult('TEMP_PEGAWAI',['NIP_BARU'=>$nip,'KODE_SATKER_4'=>session('kodesatker4')]);
      }
      return $this->response->setJSON($json);
    }

    public function kabupaten()
    {
      $model = new CrudModel();
      $query = $this->request->getVar('searchTerm');
      $json = $model->searchKabupaten($query);
      return $this->response->setJSON($json);
    }

    public function pensiun()
    {
      $model = new SimpegModel;

      $eselon3 = kodekepala(session('kodesatker3'));
      $year = date('Y');
      $pensiun = $model->query_array("SELECT * FROM TEMP_PEGAWAI WHERE YEAR(TMT_PENSIUN)='$year' AND KODE_SATUAN_KERJA LIKE '$eselon3%' ORDER BY TMT_PENSIUN ASC");
      foreach ($pensiun as $row) {?>
        <div class="d-flex mb-4">
            <div class="flex-shrink-0">
                <img src="https://ropeg.kemenag.go.id/api/webview/avatar/image/<?= $row->NIP;?>" alt="" height="50" class="rounded">
            </div>
            <div class="flex-grow-1 ms-3 overflow-hidden">
                <a href="javascript:void(0);">
                    <h6 class="text-truncate fs-14"><?= $row->NAMA_LENGKAP;?></h6>
                </a>
                <p class="text-muted mb-0"><?= $row->NIP_BARU;?></p>
                <p class="text-muted mb-0">TMT Pensiun: <?= date('d-m-Y',strtotime($row->TMT_PENSIUN));?></p>
            </div>
        </div>
      <?php }
    }

    public function birthday()
    {
      $model = new SimpegModel;

      $eselon3 = kodekepala(session('kodesatker3'));
      $month = date('m');
      $birthday = $model->query_array("SELECT * FROM TEMP_PEGAWAI WHERE MONTH(TANGGAL_LAHIR)='$month' AND KODE_SATUAN_KERJA LIKE '$eselon3%'");

      foreach ($birthday as $row) {?>
        <div class="d-flex mb-4">
                  <div class="flex-shrink-0">
                      <img src="https://ropeg.kemenag.go.id/api/webview/avatar/image/<?= $row->NIP;?>" alt="" height="50" class="rounded">
                  </div>
                  <div class="flex-grow-1 ms-3 overflow-hidden">
                      <a href="javascript:void(0);">
                          <h6 class="text-truncate fs-14"><?= $row->NAMA_LENGKAP;?></h6>
                      </a>
                      <p class="text-muted mb-0"><?= $row->NIP_BARU;?></p>
                      <p class="text-muted mb-0"><?= $row->KETERANGAN;?></p>
                      <p class="text-muted mb-0">Tanggal Lahir: <?= date('d-m-Y',strtotime($row->TANGGAL_LAHIR));?></p>
                  </div>
              </div>
      <?php }
    }

    public function getlokasi($kode)
    {
      $satker = decrypt($kode);

      $model = new CrudModel();
      $json = $model->getResult('TM_SATUAN_KERJA',['KODE_SATUAN_KERJA'=>$satker]);
      return $this->response->setJSON($json);
    }

    public function getAccess()
    {
      $db = \Config\Database::connect('default', false);
      $builder = $db->table('UM_USER')
                    ->select('UM_USER.ID as ID,UM_USER.KODE_SATKER as KODE_SATKER,UM_USER.NIP as NIP,UM_USER.ROLE as ROLE,UM_USER.APP_ID as APP_ID,UM_APP.APP_NAME as APP_NAME,UM_ROLES.REMARK as REMARK,TEMP_PEGAWAI.NAMA_LENGKAP as NAMA_LENGKAP,TEMP_PEGAWAI.NO_HP as NO_HP')
                    ->join('UM_APP','UM_APP.ID = UM_USER.APP_ID')
                    ->join('UM_ROLES','UM_USER.ROLE = UM_ROLES.ROLE AND UM_USER.APP_ID = UM_ROLES.APP_ID')
                    ->join('TEMP_PEGAWAI','UM_USER.NIP = TEMP_PEGAWAI.NIP_BARU');
                    // ->like('UM_USER.KODE_SATKER', kodekepala(session('kelola')), 'after');

      return DataTable::of($builder)
      ->add('action', function($row){
          return '<a href="'.site_url('access/delete/'.encrypt($row->ID)).'" class="btn btn-danger btn-sm" onclick="return confirm(\'Akses akan dihapus?\')">Delete</a>';
      })
      ->toJson(true);
    }

    public function updateuser($nip)
    {
      $simpeg = new SimpegModel;

      $pegawai = $simpeg->getRow('TEMP_PEGAWAI',['NIP_BARU'=>$nip]);
      $server = $simpeg->getRow('TM_SATKER_MAP',['KODE_SATUAN_KERJA'=>$pegawai->KODE_SATKER_4]);

      $client = \Config\Services::curlrequest();
      $get = $client->get($server->SERVER2.'/redis/updateuser/'.$nip, ['debug' => true]);
      $get = $client->get($server->SERVER2.'/redis/updatepegawai/'.$nip, ['debug' => true]);

      print_r($get);
    }
}
