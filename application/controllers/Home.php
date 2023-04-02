<?php

class Home extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Wisata');
   }


   public function index()
   {
      $data['judul'] = 'Halaman Home';
      $data['wisata'] = $this->Wisata->getAllWisata();

      $this->load->view('templates/header', $data);
      $this->load->view('home/index', $data);
      $this->load->view('templates/footer');
   }
}
