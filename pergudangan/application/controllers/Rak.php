<?php
class Rak extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_rak');
        $data['rak'] = $this->m_rak->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('rak', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
