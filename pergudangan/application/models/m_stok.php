<?php
class M_stok extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('barang.*, brg_masuk.jumlah as jumlah_masuk, brg_keluar.jumlah as jumlah_keluar');
        $this->db->from('barang');
        $this->db->join('brg_masuk', 'brg_masuk.id_barang = barang.id_barang');
        $this->db->join('brg_keluar', 'brg_keluar.id_barang = barang.id_barang');
        return $this->db->get();
    }
}
