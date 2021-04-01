<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $table = 'warga';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik','namaWarga','jenisKelamin','status','foto'];

    public function getWarga($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}