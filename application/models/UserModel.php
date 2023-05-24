<?php

class UserModel extends CI_Model
{

    public function getAllUsers()
    {
        return $this->db->get('USERS')->result_array();
    }

    // public function getWisataPagination($limit, $start)
    // {
    //     return $this->db->get('WISATA', $limit, $start)->result_array();
    // }

    public function getCountAllUsers()
    {
        $query = $this->db->query('SELECT MAX(ID)+1 as ID FROM USERS');
        $row = $query->row();
        $id = $row->ID;
        return  $id;
    }
}
