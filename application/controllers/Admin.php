<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $email = $this->session->userdata('email');
        if (!$email) {
            redirect('auth');
        }

        $this->load->model('WisataModel');
        $this->load->model('EventModel');
        $this->load->model('UserModel');
        $this->load->model('RoleModel');
        $this->load->model('ContactModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('ROLE', ['ID' => $this->session->userdata('role_id')])->row_array();
        $data['wisata'] = $this->WisataModel->getAllWisataOverview();
        $data['event'] = $this->EventModel->getAllEventOverview();
        $data['user'] = $this->UserModel->getAllUsersOverview();
        $data['pesan'] = $this->ContactModel->getAllMessagesOverview();

        $this->load->view('admin/headerAdmin', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footerAdmin');
    }

    public function user()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('ROLE', ['ID' => $this->session->userdata('role_id')])->row_array();
        $data['user'] = $this->UserModel->getAllUsersOverview();
        $data['allRole'] = $this->RoleModel->getAllRoles();

        $this->load->view('admin/headerAdmin', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('admin/footerAdmin');
    }

    public function wisata()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('ROLE', ['ID' => $this->session->userdata('role_id')])->row_array();
        $data['wisata'] = $this->WisataModel->getAllWisataOverview();

        $this->load->view('admin/headerAdmin', $data);
        $this->load->view('admin/wisata', $data);
        $this->load->view('admin/footerAdmin');
    }

    public function event()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('ROLE', ['ID' => $this->session->userdata('role_id')])->row_array();
        $data['event'] = $this->EventModel->getAllEventOverview();

        $this->load->view('admin/headerAdmin', $data);
        $this->load->view('admin/event', $data);
        $this->load->view('admin/footerAdmin');
    }

    public function profile()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('ROLE', ['ID' => $this->session->userdata('role_id')])->row_array();

        $this->load->view('admin/headerAdmin', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footerAdmin');
    }
}
