<?php

use PSpell\Config;

class Auth extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('UserModel');
      $this->load->library('session');
   }

   public function index()
   {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == false) {
         $data['judul'] = 'Login';

         $this->load->view('auth/login', $data);
      } else {

         $this->_login();
      }
   }

   private function _login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('USERS', ['E_MAIL' => $email])->row_array();
      // var_dump($user);
      // die;
      if ($user) {
         if ($user['IS_ACTIVE'] == 1) {
            if (password_verify($password, $user['PASSWORD'])) {
               $data = [
                  'email' => $user['E_MAIL'],
                  'role_id' => $user['ROLE_ID']
               ];
               $this->session->set_userdata($data);
               redirect('admin');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                     role="alert"> Password Salah</div>');
               redirect('auth');
            }
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" 
            role="alert"> Email Tidak aktif</div>');
            redirect('auth');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" 
         role="alert"> Email Tidak ada</div>');
         redirect('auth');
      }
   }


   public function registration()
   {

      /**
       * Set Form Validation Rule for Registration
       */
      $this->form_validation->set_rules('full_name', 'Name', 'required|trim');
      $this->form_validation->set_rules('user_name', 'userName', 'required|trim|is_unique[USERS.USER_NAME]', [
         'is_unique' => 'This username has already exist'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[USERS.E_MAIL]', [
         'is_unique' => 'This email has already registred'
      ]);
      $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{10,12}$/]');
      $this->form_validation->set_rules(
         'password1',
         'Password',
         'required|trim|min_length[6]|matches[password2]',
         [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
         ]
      );
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      /**
       * Save Registration Input from Form to DataBase
       */
      if ($this->form_validation->run() == false) {
         $data['judul'] = 'Registration';
         $this->load->view('auth/registration', $data);
      } else {

         $this->saveUser();
      }
   }

   private function saveUser()
   {

      $config['total_users'] = $this->UserModel->getCountAllUsers();
      $data = [
         'ID' => $config['total_users'] + 1,
         'PASSWORD' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
         'USER_NAME' => htmlspecialchars($this->input->post('user_name', true)),
         'FULL_NAME' => htmlspecialchars($this->input->post('full_name', true)),
         'PHONE_NUMBER' => $this->input->post('phone'),
         'E_MAIL' => htmlspecialchars($this->input->post('email', true)),
         'IS_ACTIVE' => 1,
         'ROLE_ID' => 4,
      ];
      $this->db->insert('USERS', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert"> Data Berhasil Ditambah. Silahkan Login</div>');
      redirect('auth');
   }


   /**
    * Logout and Delete Session Data
    * Return to Login Page
    */
   public function logout()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert">Anda Berhasil Logout</div>');
      redirect('auth');
   }
}
