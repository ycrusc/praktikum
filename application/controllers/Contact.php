<?php

class Contact extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('WisataModel');
      $this->load->library('session');
   }


   public function index()
   {
      $data['judul'] = 'Contact Us';
      $data['email'] = $this->session->userdata('email');

      $this->load->view('templates/header', $data);
      $this->load->view('contact/body', $data);
      $this->load->view('templates/footer');
   }
}
