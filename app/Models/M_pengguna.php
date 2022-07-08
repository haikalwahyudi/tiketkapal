<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_pengguna extends Model
{
	protected $table = "pengguna";	

	public function ambilData($id = false)
	{
		if($id === false){
		return $this->db->table($this->table)->get()->getResult();
		}else{
		return $this->getWhere(['id_pengguna' => $id]);
		}
	}
}