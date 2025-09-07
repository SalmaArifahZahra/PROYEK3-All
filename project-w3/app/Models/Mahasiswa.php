<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    
    public function getMahasiswa(){
        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM mahasiswa");
        return $query->getResultArray();
    }

    public function detail_mahasiswa($nim)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM mahasiswa WHERE nim = ?", [$nim]);
        return $query->getRowArray(); 
    }
}
