<?php

class Penerbit extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('MLaporan_Penerbit');    
    }

    public function insert(){
        $data = array(
            'namabuku' => $this->input->post('namabuku'),
            'jumlahpesanan' => $this->input->post('jumlahpesanan'),
            'harga' => $this->input->post('harga'),
            'royalty' => $this->input->post('royalty')
         );

        $data = $this->MLaporan_Penerbit->Insert('laporan_penerbit', $data);
        redirect(base_url('penerbit'),'refresh');
    }

    function delete($id){
        $this->MLaporan_Penerbit->delete($id);
        redirect(base_url('penerbit'),'refresh');
    }

    public function index()
    {
        $data['judul'] = 'Oenta Web';
        $data['laporan'] = $this->MLaporan_Penerbit->getAllData();
        $this->load->view('templates2/header', $data);
        $this->load->view('penerbit/index', $data);
        $this->load->view('templates2/footer');
    }
}
