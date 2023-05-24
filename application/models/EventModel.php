<?php

class EventModel extends CI_Model
{

    public function getAllEvent()
    {
        return $this->db->get('EVENT')->result_array();
    }
}
