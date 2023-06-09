<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('WisataModel');
        $this->load->model('EventModel');
        $this->load->model('UserModel');
        $this->load->model('ContactModel');
    }

    public function index()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['wisata'] = $this->WisataModel->getAllWisataOverview();
        $data['event'] = $this->EventModel->getAllEventOverview();
        $data['user'] = $this->UserModel->getAllUsersOverview();
        $data['pesan'] = $this->ContactModel->getAllMessagesOverview();

        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/home', $data);
    }

    public function user()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->UserModel->getAllUsersOverview();

        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/user', $data);
    }

    public function wisata()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['wisata'] = $this->WisataModel->getAllWisataOverview();

        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/wisata', $data);
    }

    public function event()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();
        $data['event'] = $this->EventModel->getAllEventOverview();

        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/event', $data);
    }

    public function profile()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/profile', $data);
    }
}
