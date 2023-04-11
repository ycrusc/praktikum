<?php

class Wisata extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('WisataModel');
   }


   public function index()
   {
      $data['judul'] = 'Halaman Home';
      $data['wisata'] = $this->WisataModel->getAllWisata();


      $this->load->view('templates/header', $data);
      $this->load->view('wisata/body', $data);
      $this->load->view('templates/footer');
   }
}
