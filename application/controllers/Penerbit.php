<?php

class Penerbit extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Oenta Web';
        $this->load->view('templates2/header', $data);
        $this->load->view('penerbit/index');
        $this->load->view('templates2/footer');
    }
}
