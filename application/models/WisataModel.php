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

    public function getAllWisataOverview()
    {
        $query = "SELECT NAME, QUOTA, TICKET_PRICE, CASE WHEN IS_ACTIVE = 1 THEN 'OPEN'
                ELSE 'CLOSE' END AS STATUS
                FROM WISATA W";
        return $this->db->query($query)->result_array();
    }

    public function getMaxIdWisata()
    {
        $query = "SELECT MAX(ID) AS ID FROM WISATA W";
        return $this->db->query($query)->result_array();
    }
}
