<?php
class Barang_Keluar extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_keluar');
        $data['brg_keluar'] = $this->m_keluar->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('keluar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
