<?php

class Wisata extends CI_Model
{

    public function getAllWisata()
    {
        return $this->db->get('WISATA')->result_array();
    }
}
