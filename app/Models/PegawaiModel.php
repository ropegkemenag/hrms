<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'TEMP_PEGAWAI';
    protected $primaryKey       = 'NIP_BARU';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // protected $db;
    //
    // public function __construct()
    // {
    //   $this->db = \Config\Database::connect('default', false);
    // }

    public function getJabatan()
    {
      $query = $this->db->query("SELECT DISTINCT(LEVEL_JABATAN) FROM TEMP_PEGAWAI WHERE LEVEL_JABATAN IS NOT NULL");

      return $query->getResult();
    }

    public function getJabatanSatker($satker)
    {
      $query = $this->db->query("SELECT DISTINCT(LEVEL_JABATAN) FROM TEMP_PEGAWAI WHERE KODE_SATKER_4='$satker' AND LEVEL_JABATAN IS NOT NULL");

      return $query->getResult();
    }

    public function getUnitSatker($satker)
    {
      $query = $this->db->query("SELECT DISTINCT(SATKER_3) FROM TEMP_PEGAWAI WHERE KODE_SATKER_4='$satker' AND SATKER_3 IS NOT NULL");

      return $query->getResult();
    }

    public function cariPegawai($nama,$satker)
    {
      $query = $this->db->query("SELECT NIP,NIP_BARU,NAMA_LENGKAP,KETERANGAN FROM TEMP_PEGAWAI WHERE NAMA_LENGKAP LIKE '%$nama%' AND KETERANGAN LIKE '%$satker%'");
      $result = $query->getResult();

      return $result;
    }

    public function cariProfil($nip)
    {
      $query = $this->db->query("SELECT * FROM vwDATA_PEGAWAI WHERE NIP='$nip'");
      $result = $query->getRow();

      return $result;
    }

    public function getCountSatker($kode)
    {
      $kode = kodekepala($kode);
      $query = $this->db->query("SELECT COUNT(NIP) AS jumlah FROM TEMP_PEGAWAI WHERE KODE_SATUAN_KERJA LIKE '$kode%'");
      return $query->getRow()->jumlah;
    }
}
