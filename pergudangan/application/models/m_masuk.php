<?php
class M_masuk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('brg_masuk');
    }
}
