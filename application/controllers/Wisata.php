<?php

class Wisata extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
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

   public function add()
   {
      /**
       * Set Form Validation Rule for Registration
       */
      $this->form_validation->set_rules('name', 'Name', 'required|trim');
      // $this->form_validation->set_rules('user_name', 'userName', 'required|trim|is_unique[USERS.USER_NAME]', [
      //    'is_unique' => 'This username has already exist'
      // ]);
      // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[USERS.E_MAIL]', [
      //    'is_unique' => 'This email has already registred'
      // ]);
      // $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{10,12}$/]');
      // $this->form_validation->set_rules(
      //    'password1',
      //    'Password',
      //    'required|trim|min_length[6]|matches[password2]',
      //    [
      //       'matches' => 'Password dont match!',
      //       'min_length' => 'Password to short!'
      //    ]
      // );
      // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      /**
       * Save Registration Input from Form to DataBase
       */
      if ($this->form_validation->run() == false) {
         $this->session->set_flashdata('failled', '<div class="alert alert-danger" 
            role="alert"> Data Gagal Ditambahkan. Periksa kembali data anda</div>');
         redirect('admin/wisata');
      } else {
         $this->addUser();
      }
   }

   private function addUser()
   {

      $config['total_wisata'] = $this->WisataModel->getCountIdWisata();
      $data = [
         'ID' => $config['total_wisata'] + 1,
         'NAME' => htmlspecialchars($this->input->post('name', true)),
         'TICKET_PRICE' => htmlspecialchars($this->input->post('ticket', true)),
         'QUOTA' => htmlspecialchars($this->input->post('quota', true)),
         'IS_ACTIVE' => htmlspecialchars($this->input->post('active', true)),
      ];
      $this->db->insert('WISATA', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert"> Data Berhasil Ditambah.</div>');
      redirect('admin/wisata');
   }

   public function editWisata()
   {
      /**
       * Set Form Validation Rule for Registration
       */
      $this->form_validation->set_rules('name', 'Name', 'required|trim');
      // $this->form_validation->set_rules('user_name', 'userName', 'required|trim|is_unique[USERS.USER_NAME]', [
      //     'is_unique' => 'This username has already exist'
      // ]);
      // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[USERS.E_MAIL]', [
      //     'is_unique' => 'This email has already registred'
      // ]);
      // $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{10,12}$/]');
      // $this->form_validation->set_rules(
      //     'password1',
      //     'Password',
      //     'required|trim|min_length[6]|matches[password2]',
      //     [
      //         'matches' => 'Password dont match!',
      //         'min_length' => 'Password to short!'
      //     ]
      // );
      // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      /**
       * Save Registration Input from Form to DataBase
       */
      if ($this->form_validation->run() == false) {
         $this->session->set_flashdata('edit', '<div class="alert alert-success" 
            role="alert"> Data Gagal Diubah.</div>');
         redirect('admin/wisata');
      } else {
         $this->editSave();
      }
   }

   private function editSave()
   {


      $data = [
         'NAME' => htmlspecialchars($this->input->post('name', true)),
         'TICKET_PRICE' => htmlspecialchars($this->input->post('ticket', true)),
         'QUOTA' => htmlspecialchars($this->input->post('quota', true)),
         'IS_ACTIVE' => htmlspecialchars($this->input->post('active', true)),
      ];
      $id = $this->input->post('id');

      $this->db->where('ID', $id);
      $this->db->update('WISATA', $data);
      $this->session->set_flashdata('edit', '<div class="alert alert-success" 
      role="alert"> Data Berhasil Diubah.</div>');
      redirect('admin/wisata');
   }

   public function delete($id)
   {

      $isDelete = $this->wisataModel->deleteWisata($id);
      if ($isDelete) {
         $this->session->set_flashdata('delete', '<div class="alert alert-success" 
               role="alert">Data Berhasil dihapus</div>');
         redirect('admin/wisata');
      }
      $this->session->set_flashdata('delete', '<div class="alert alert-danger" 
            role="alert">Data gagal dihapus</div>');
      redirect('admin/wisata');
   }
}
