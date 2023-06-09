<?php

class ContactModel extends CI_Model
{
    public function getCountAllMessage()
    {
        $query = $this->db->query('SELECT MAX(ID) as ID FROM MESSAGES');
        $row = $query->row();
        $id = $row->ID;
        return  $id;
    }

    public function getAllMessages()
    {
        return $this->db->get('MESSAGES')->result_array();
    }

    public function getAllMessagesOverview()
    {
        $query = " SELECT ID, USER_NAME, E_MAIL, PESAN, TO_CHAR(CREATE_AT, 'YYYY-MON-DD') AS CREATE_AT
                    FROM MESSAGES m";
        return $this->db->query($query)->result_array();
    }
}
