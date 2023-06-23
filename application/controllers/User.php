<?php

use PSpell\Config;

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->library('session');
    }

    public function add()
    {
        /**
         * Set Form Validation Rule for Registration
         */
        $this->form_validation->set_rules('full_name', 'Name', 'required|trim');
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
            redirect('admin/user');
        } else {
            $this->addUser();
        }
    }

    private function addUser()
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
            'CITY' => htmlspecialchars($this->input->post('city', true))
        ];
        $this->db->insert('USERS', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
      role="alert"> Data Berhasil Ditambah.</div>');
        redirect('admin/user');
    }

    public function delete($id)
    {
        // $user = $this->UserModel->getDetailById($id);
        // if ($user > 0) {
        $isDelete = $this->UserModel->deleteUser($id);
        if ($isDelete) {
            $this->session->set_flashdata('delete', '<div class="alert alert-success" 
               role="alert">Data Berhasil dihapus</div>');
            redirect('admin/user');
        }
        $this->session->set_flashdata('delete', '<div class="alert alert-danger" 
            role="alert">Data gagal dihapus</div>');
        redirect('admin/user');
        // }
        // $this->session->set_flashdata('delete', '<div class="alert alert-success" 
        // role="alert">Data Tidak Ada</div>');
        // redirect('admin/user');
    }
}
