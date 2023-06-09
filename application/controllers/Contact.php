<?php

class Contact extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('WisataModel');
      $this->load->library('session');
      $this->load->library('form_validation');
      $this->load->model('ContactModel');
   }


   public function index()
   {
      $data['judul'] = 'Contact Us';
      $data['email'] = $this->session->userdata('email');

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


      if ($this->form_validation->run() == false) {

         $this->load->view('templates/header', $data);
         $this->load->view('contact/body', $data);
         $this->load->view('templates/footer');
      } else {
         $this->saveMessage();
      }
   }

   private function saveMessage()
   {

      $config['total'] = $this->ContactModel->getCountAllMessage();
      $data = [
         'ID' => $config['total'] + 1,
         'USER_NAME' => htmlspecialchars($this->input->post('nama', true)),
         'E_MAIL' => htmlspecialchars($this->input->post('email', true)),
         'PESAN' => htmlspecialchars($this->input->post('pesan', true))
      ];
      $this->db->insert('MESSAGES', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert"> Pesan Berhasil Ditambah. Terima Kasih</div>');
      redirect('contact');
   }
}
