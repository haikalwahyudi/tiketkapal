<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pesantiket extends Model
{
    protected $table = "pesantiket";

    public function ambilData($id = false)
    {
        if ($id === false) {
            return $this->db->table($this->table)->get()->getResult();
        } else {
            return $this->getWhere(['id_pemesanan' => $id]);
        }
    }
    public function cariId($id)
    {
        return $this->db->table($this->table)
            ->join('rekening', 'rekening.id_pembayaran=pesantiket.id_pembayaran')
            ->where(['id_pengguna' => $id])->get()->getResult();
    }
    public function simpan($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }
    public function hapus($id)
    {
        $hapus = $this->db->table($this->table);
        return $hapus->delete(['id_pemesanan' => $id]);
    }
    public function ubah($data, $id)
    {
        $ubah = $this->db->table($this->table);
        $ubah->where(['id_pemesanan' => $id]);
        return $ubah->update($data);
    }
    public function filter($tanggal)
    {
        return $this->db->table($this->table)
            ->join('rekening', 'rekening.id_pembayaran=pesantiket.id_pembayaran')
            ->where(['tgl_pemesanan >=' => $tanggal['awal']])
            ->where(['tgl_pemesanan <=' => $tanggal['akhir']])
            ->get()->getResult();
    }
}
