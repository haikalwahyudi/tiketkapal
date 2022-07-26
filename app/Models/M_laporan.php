<?php

namespace App\Models;

use CodeIgniter\Model;

class M_laporan extends Model
{
    protected $table = "pesantiket";

    public function filter($email)
    {
        return $this->db->table($this->table)
            ->where(['email' => $email])->get()->getRowArray();
    }
}
