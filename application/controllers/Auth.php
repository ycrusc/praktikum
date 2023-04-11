<?php

class Auth extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Wisata');
   }


   public function index()
   {
      $data['judul'] = 'Login';
      $data['wisata'] = $this->Wisata->getAllWisata();

      $this->load->view('auth/headerAuth', $data);
      $this->load->view('auth/login');
      $this->load->view('auth/footerAuth');
   }


   public function registration()
   {
      $data['judul'] = 'Registration';

      $this->load->view('auth/registration');
   }
}
