<?php

class UserModel extends CI_Model
{

    public function getAllUsers()
    {
        return $this->db->get('USERS')->result_array();
    }

    public function getCountAllUsers()
    {
        $query = $this->db->query('SELECT MAX(ID) as ID FROM USERS');
        $row = $query->row();
        $id = $row->ID;
        return  $id;
    }

    public function getAllUsersOverview()
    {
        $query = "SELECT U.ID, FULL_NAME,CITY, PHONE_NUMBER, USER_NAME, E_MAIL, CASE WHEN IS_ACTIVE = 1 THEN 'ACTIVE' 
                    ELSE 'NON ACTIVE' END AS STATUS, R.DESCRIPTION 
                    FROM USERS U
                    JOIN ROLE R ON R.ID = U.ROLE_ID";

        return $this->db->query($query)->result_array();
    }

    public function getDetailById($id)
    {
        $query = "SELECT * FROM USERS U
        WHERE ID = $id";
        $this->db->query($query)->result_array();
    }

    public function deleteUser($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('USERS');
    }
}
