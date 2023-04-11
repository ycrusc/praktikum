<?php

use PSpell\Config;

class Home extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('WisataModel');
   }


   public function index()
   {
      $data['judul'] = 'Halaman Home';



      $this->load->library('pagination');
      $config['base_url'] = 'http://localhost/praktikum/home/index';
      $config['total_rows'] = $this->WisataModel->getCountAllWisata();
      $config['per_page'] = 6;

      $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
      $config['full_tag_close'] = '</ul></nav>';

      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<li class="page-item">';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<li class="page-item">';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = '&raquo';
      $config['next_tag_open'] = '<li class="page-item">';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = '&laquo';
      $config['prev_tag_open'] = '<li class="page-item">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page-item">';
      $config['num_tag_close'] = '</li>';

      $config['attributes'] = array('class' => 'page-link');


      $this->pagination->initialize($config);
      $data['start'] = $this->uri->segment(3);
      $data['wisata'] = $this->WisataModel->getWisataPagination($config['per_page'], $data['start']);


      $this->load->view('templates/headerHome', $data);
      $this->load->view('home/index', $data);
      $this->load->view('templates/footer');
   }
}
