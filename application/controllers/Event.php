<?php

class Event extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('EventModel');
      $this->load->library('session');
   }


   public function index()
   {
      $data['judul'] = 'Event';
      $data['event'] = $this->EventModel->getAllEvent();
      $data['email'] = $this->session->userdata('email');


      $this->load->view('templates/header', $data);
      $this->load->view('event/body', $data);
      $this->load->view('templates/footer');
   }
}
