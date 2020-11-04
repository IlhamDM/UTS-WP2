<?php
class Barang_Masuk extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_masuk');
        $data['brg_masuk'] = $this->m_masuk->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('masuk', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
