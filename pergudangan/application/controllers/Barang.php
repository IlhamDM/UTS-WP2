<?php
class Barang extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_barang');
        $data['barang'] = $this->m_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('barang', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
