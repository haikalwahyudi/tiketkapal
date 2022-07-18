<?php

namespace App\Models;

use CodeIgniter\Model;

class M_rekening extends Model
{
	protected $table = "rekening";

	public function ambilData()
	{
		return $this->db->table($this->table)->get()->getResult();
	}
	// public function simpan($data)
	// {
	// 	$simpan = $this->db->table($this->table);
	// 	return $simpan->insert($data);
	// }
	public function ubah($data, $id)
	{
		$ubah = $this->db->table($this->table);
		$ubah->where(['id_pembayaran' => $id]);
		return $ubah->update($data);
	}
}
