<?php

class WisataModel extends CI_Model
{

    public function getAllWisata()
    {
        return $this->db->get('WISATA')->result_array();
    }

    public function getWisataPagination($limit, $start)
    {
        return $this->db->get('WISATA', $limit, $start)->result_array();
    }

    public function getCountAllWisata()
    {
        return $this->db->get('WISATA')->num_rows();
    }
}
