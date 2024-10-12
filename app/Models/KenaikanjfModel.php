<?php

namespace App\Models;

use CodeIgniter\Model;

class KenaikanjfModel extends Model
{
    protected $DBGroup          = 'oss';
    protected $table            = 'tr_usul_jf';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = true;
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

    public function getActivities($id)
    {
      $query = $this->db->query("exec sp_get_aktifitas @usul='".$id."'")->getResult();
      return $query;
    }

    public function getRequest($kodesatker)
    {
      $query = $this->db->query("SELECT
                                	TR_USULAN.*,
                                	TM_LAYANAN.KELOLA,
                                	TM_LAYANAN.LAYANAN AS NAMALAYANAN,
                                	sk.SATUAN_KERJA,
                                	(SELECT COUNT(ID) FROM TR_USUL_BERKAS b WHERE b.USULAN=TR_USULAN.ID) AS jumlah
                                FROM
                                	dbo.TR_USULAN
                                	INNER JOIN dbo.TM_LAYANAN	ON TR_USULAN.LAYANAN = TM_LAYANAN.ID
                                	LEFT JOIN simpeg41.dbo.TM_SATUAN_KERJA sk ON TR_USULAN.KODE_SATKER= sk.KODE_SATUAN_KERJA
                                WHERE TR_USULAN.KODE_SATKER='$kodesatker'")->getResult();
      return $query;
    }

    public function getDetailRequest($id)
    {
      $query = $this->db->query("SELECT
                                	TR_USULAN.*,
                                	TM_LAYANAN.KELOLA,
                                	TM_LAYANAN.LAYANAN AS NAMALAYANAN,
                                	TM_LAYANAN.ROUTE,
                                	sk.SATUAN_KERJA,
                                	(SELECT COUNT(ID) FROM TR_USUL_BERKAS b WHERE b.USULAN=TR_USULAN.ID) AS jumlah
                                FROM
                                	dbo.TR_USULAN
                                	INNER JOIN dbo.TM_LAYANAN	ON TR_USULAN.LAYANAN = TM_LAYANAN.ID
                                	LEFT JOIN simpeg41.dbo.TM_SATUAN_KERJA sk ON TR_USULAN.KODE_SATKER= sk.KODE_SATUAN_KERJA
                                WHERE TR_USULAN.ID='$id'")->getRow();
      return $query;
    }

    public function getDetailUsulan($id)
    {
      $query = $this->db->query("SELECT
                                	TR_USULAN.*,
                                	TM_LAYANAN.LAYANAN AS NAMALAYANAN,
                                	TM_LAYANAN.ROUTE,
                                	TM_LAYANAN.KELOLA,
                                	p.NAMA_LENGKAP AS NAMA_ADMIN,
                                	sk.SATUAN_KERJA,
                                	(SELECT COUNT(ID) FROM TR_USUL_BERKAS b WHERE b.USULAN=TR_USULAN.ID) AS JUMLAH
                                FROM
                                	dbo.TR_USULAN
                                	LEFT JOIN
                                	dbo.TM_LAYANAN
                                	ON
                                		TR_USULAN.LAYANAN = TM_LAYANAN.ID
                                	LEFT JOIN
                                	simpeg41.dbo.TEMP_PEGAWAI AS p
                                	ON
                                		TR_USULAN.ADMIN = p.NIP_BARU
                                	LEFT JOIN
                                	simpeg41.dbo.TM_SATUAN_KERJA AS sk
                                	ON
                                		TR_USULAN.KODE_SATKER = sk.KODE_SATUAN_KERJA
                                WHERE
                                	TR_USULAN.ID = '$id'")->getRow();
      return $query;
    }

    public function getDokumen($idlayanan,$idusul)
    {
      $query = $this->db->query("SELECT a.*,b.lampiran,c.keterangan FROM tm_layanan_dokumen a
                                LEFT JOIN (SELECT id_dokumen,lampiran FROM tr_usul_dokumen WHERE id_usul='$idusul' AND id_layanan='$idlayanan') b
                                ON b.id_dokumen=a.dokumen
                                LEFT JOIN tm_dokumen c
                                ON c.id=a.dokumen
                                WHERE a.layanan='$idlayanan'")->getResult();
      return $query;
    }

    public function getJabatans()
    {
      $query = $this->db->query("SELECT * FROM temp_jabatan WHERE TIPE_JABATAN='Jabatan Fungsional Tertentu'")->getResult();
      return $query;
    }
}
