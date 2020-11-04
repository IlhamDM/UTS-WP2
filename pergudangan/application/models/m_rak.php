<?php
class M_rak extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('rak.*, brg_masuk.jumlah as jumlah_masuk, brg_keluar.jumlah as jumlah_keluar');
        $this->db->from('rak');
        $this->db->join('brg_masuk', 'brg_masuk.id_rak = rak.id_rak');
        $this->db->join('brg_keluar', 'brg_keluar.id_rak = rak.id_rak');
        return $this->db->get();
    }
}
