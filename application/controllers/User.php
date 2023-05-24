<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $data['login'] = $this->db->get_where('USERS', ['E_MAIL' =>
        $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['login']['FULL_NAME'];
        $this->load->view('admin/headerAdmin');
        $this->load->view('admin/home');
    }
}
