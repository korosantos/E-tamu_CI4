<?php 

namespace App\Models;

use CodeIgniter\Model;

class M_pegawai extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getPegawai()
    {
       return $this->db->table('pegawai')->get()->getResultArray();
    }
}

