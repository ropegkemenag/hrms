<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

      protected $db;

      public function __construct()
      {
        $this->db = \Config\Database::connect('default', false);

      }

      public function getRow($table,$where)
      {
        $builder = $this->db->table($table);
        $query = $builder->getWhere($where);

        return $query->getRow();
      }

      public function getResult($table,$where=false)
      {
        $builder = $this->db->table($table);

        if($where){
          $query = $builder->getWhere($where);
        }else{
          $query = $builder->get();
        }

        return $query->getResult();
      }

      public function getKuota()
      {
        $satker = session('idsatker');
        $query = $this->db->query("SELECT a.kelompok, a.jumlah AS kuota,
                                  (SELECT SUM(b.jumlah) FROM formasi b WHERE b.kategori=a.kelompok AND b.idsatker='$satker') formasi
                                  FROM porsi a WHERE a.idsatker='$satker'")->getResult();
        return $query;
      }

      public function searchKabupaten($search)
      {
        $query = $this->db->query("SELECT TOP 20 id_kab AS id,nama AS text FROM TM_KABUPATEN WHERE nama LIKE '%$search%'")->getResult();
        return $query;
      }

      public function getAccess($kodesatker)
      {
        $query = $this->db->query("SELECT
                                    UM_USER.ID,
                                    UM_USER.KODE_SATKER,
                                    UM_USER.NIP,
                                    UM_USER.ROLE,
                                    UM_USER.APP_ID,
                                    UM_APP.APP_NAME,
                                    UM_ROLES.REMARK,
                                    TEMP_PEGAWAI.NAMA_LENGKAP,
                                    TEMP_PEGAWAI.NO_HP
                                  FROM
                                    dbo.UM_USER
                                    INNER JOIN
                                    dbo.UM_APP
                                    ON
                                      UM_USER.APP_ID = UM_APP.ID
                                    INNER JOIN
                                      dbo.UM_ROLES
                                    ON
                                      UM_USER.ROLE = UM_ROLES.ROLE AND UM_USER.APP_ID = UM_ROLES.APP_ID
                                    INNER JOIN
                                    dbo.TEMP_PEGAWAI
                                    ON
                                      UM_USER.NIP = TEMP_PEGAWAI.NIP_BARU
                                  WHERE
                                    KODE_SATKER LIKE '$kodesatker%' AND UM_USER.APP_ID !='2'")->getResult();
        return $query;
      }

      public function getAccessAll()
      {
        $query = $this->db->query("SELECT
                                    UM_USER.ID,
                                    UM_USER.KODE_SATKER,
                                    UM_USER.NIP,
                                    UM_USER.ROLE,
                                    UM_USER.APP_ID,
                                    UM_APP.APP_NAME,
                                    UM_ROLES.REMARK,
                                    TEMP_PEGAWAI.NAMA_LENGKAP,
                                    TEMP_PEGAWAI.SATKER_3,
                                    TEMP_PEGAWAI.NO_HP
                                  FROM
                                    dbo.UM_USER
                                    INNER JOIN
                                    dbo.UM_APP
                                    ON
                                      UM_USER.APP_ID = UM_APP.ID
                                    INNER JOIN
                                      dbo.UM_ROLES
                                    ON
                                      UM_USER.ROLE = UM_ROLES.ROLE AND UM_USER.APP_ID = UM_ROLES.APP_ID
                                    INNER JOIN
                                    dbo.TEMP_PEGAWAI
                                    ON
                                      UM_USER.NIP = TEMP_PEGAWAI.NIP_BARU
                                  ")->getResult();
        return $query;
      }

      public function getSatkerKelola($kelola)
      {
        $query = $this->db->query("SELECT * FROM TM_SATUAN_KERJA WHERE KODE_SATUAN_KERJA='$kelola' OR KODE_ATASAN='$kelola'")->getResult();
        return $query;
      }
}
