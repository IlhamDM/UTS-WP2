<?php
class Biodata extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('biodata');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
}
