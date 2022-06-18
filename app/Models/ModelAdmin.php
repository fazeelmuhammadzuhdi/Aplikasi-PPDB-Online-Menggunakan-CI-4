<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function detailSetting()
    {
        return $this->db->table('tbl_setting')
            ->where('id', '1')
            ->get()->getRowArray();
    }
    public function saveSetting($data)
    {
        $this->db->table('tbl_setting')
            ->where('id', '1')
            ->update($data);
    }

    public function totalJurusan()
    {
        return $this->db->table('tbl_jurusan')->countAllResults();
    }

    public function pekerjaan()
    {
        return $this->db->table('tbl_pekerjaan')->countAllResults();
    }
    public function pendidikan()
    {
        return $this->db->table('tbl_pendidikan')->countAllResults();
    }
    public function agama()
    {
        return $this->db->table('tbl_agama')->countAllResults();
    }
    public function penghasilan()
    {
        return $this->db->table('tbl_penghasilan')->countAllResults();
    }
    public function user()
    {
        return $this->db->table('tbl_user')->countAllResults();
    }

    public function masuk()
    {
        return $this->db->table('tbl_siswa')
            ->where('stat_pendaftaran', '1')
            ->where('stat_ppdb', '0')
            ->countAllResults();
    }
    public function diterima()
    {
        return $this->db->table('tbl_siswa')
            ->where('stat_ppdb', '1')
            ->countAllResults();
    }
    public function ditolak()
    {
        return $this->db->table('tbl_siswa')
            ->where('stat_ppdb', '2')
            ->countAllResults();
    }
}