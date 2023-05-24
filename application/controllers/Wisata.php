<?php

class Wisata extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('WisataModel');
      $this->load->library('session');
   }


   public function index()
   {
      $data['judul'] = 'Wisata';
      $data['wisata'] = $this->WisataModel->getAllWisata();
      $data['email'] = $this->session->userdata('email');


      $this->load->view('templates/header', $data);
      $this->load->view('wisata/body', $data);
      $this->load->view('templates/footer');
   }
}
