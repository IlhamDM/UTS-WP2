<?php
class M_keluar extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('brg_keluar');
    }
}
