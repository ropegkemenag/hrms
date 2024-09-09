<?php

namespace App\Models;

use CodeIgniter\Model;

class KgbModel extends Model
{
  protected $db;

  public function __construct()
  {
    $this->db = \Config\Database::connect('kgb', false);

  }

  public function getRow($table,$where)
  {
    $builder = $this->db->table($table);
    $query = $builder->getWhere($where);

    return $query->getRow();
  }

  public function getArray($table,$where=false)
  {
    $builder = $this->db->table($table);

    if($where){
      $query = $builder->getWhere($where);
    }else{
      $query = $builder->get();
    }

    return $query->getResult();
  }

  public function getPegawai($kodesatker)
  {
    $query = $this->db->query("SELECT *
                              ,CASE WHEN B.KODE_PANGKAT >= 30
                              THEN DATEADD(MM, CASE WHEN MK_TAHUN % 2 <> 0 THEN 0 ELSE 12 END + CASE WHEN MK_BULAN <> 0 THEN 12 - MK_BULAN ELSE 12 END, tmt)
                              ELSE DATEADD(MM, CASE WHEN MK_TAHUN % 2 = 0 THEN 0 ELSE 12 END + CASE WHEN MK_BULAN <> 0 THEN 12 - MK_BULAN ELSE 12 END, tmt)
                              END	 tmt_lanjut
                            FROM TA_SATKER_KELOLA a
                            LEFT JOIN vw_data_pegawai b ON a.kode_kelola = b.KODE_SATUAN_KERJA
                            WHERE kode_satker = '$kodesatker'")->getResult();
    return $query;
  }

  public function getSetup($kodesatker)
  {
    $query = $this->db->query("SELECT * FROM TEMP_PEGAWAI WHERE NIP_BARU='$nip'")->getRow();
    return $query;
  }

  public function query_row($query)
  {
    $query = $this->db->query($query)->getRow();
    return $query;
  }

  public function query_array($query)
  {
    $query = $this->db->query($query)->getResult();
    return $query;
  }

  public function getCount($table,$where=false)
  {
    $builder = $this->db->table($table);

    if($where){
      $query = $builder->getWhere($where);
    }else{
      $query = $builder->get();
    }

    return $query->countAllResults();
  }

  public function getAuth($nip)
  {
    $query = $this->db->query("exec sp_usermanager @nip='".$nip."', @appid='1'")->getRow();
    return $query;
  }

  public function getInfoKP($year,$month)
  {
    $query = $this->db->query("SELECT SATKER2 AS SATKER, COUNT(*) AS JUMLAH FROM TEMP_PEGAWAI_PANGKAT WHERE TMT_KP <> CAST('$month/01/$year' AS DATE)
                              GROUP BY SATKER2")->getResult();
    return $query;
  }

  public function getCountKP($year,$month)
  {
    $query = $this->db->query("SELECT COUNT(*) AS JUMLAH FROM TEMP_PEGAWAI_PANGKAT
    WHERE TMT_KP <> CAST('$month/01/$year' AS DATE)")->getRow();
    return $query;
  }

  public function getJabatans()
  {
    $query = $this->db->query("SELECT * FROM TM_JABATAN")->getResult();
    return $query;
  }

  public function getParentSatker()
  {
    $query = $this->db->query("SELECT * FROM TM_SATUAN_KERJA WHERE JENIS_SATKER='PARENT'")->getResult();
    return $query;
  }

  public function convertnip($nip)
  {
    $query = $this->db->query("SELECT NIP FROM TEMP_PEGAWAI WHERE NIP_BARU='$nip'")->getRow();
    return $query->NIP;
  }

  function insertjabatan($nip,$kodesatker,$nomorsk,$tanggalsk,$tmt)
  {
    $niplama = $this->convertnip($nip);

    $query = $this->db->query("exec spINSERT_RW_JABATAN @NIP='".$niplama."',@NO_URUT='',@KODE_JABATAN='',@KODE_BIDANG_STUDI='',@KODE_SATUAN_KERJA='".$kodesatker."',@NO_SK='".$nomorsk."',@TEST_TGL_SK='',@TGL_SK='".$tanggalsk."',@TEST_TMT_SK='',@TMT_SK='".$tmt."',@KODE_JABATAN_2='',@KODE_SATUAN_KERJA_2='',@NO_SK_2='', @TEST_TGL_SK_2='',@TGL_SK_2='',@TEST_TMT_SK_2='',@TMT_SK_2='', @KETERANGAN='Silahkan disesuaikan',@KODE_PANGKAT='',@USERID=''");

    return $query;
  }
}
