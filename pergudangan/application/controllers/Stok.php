<?php
class Stok extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_stok');
        $data['barang'] = $this->m_stok->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('stok', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
