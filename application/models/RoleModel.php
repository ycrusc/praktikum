<?php

class RoleModel extends CI_Model
{

    public function getAllRoles()
    {
        return $this->db->get('ROLE')->result_array();
    }
}
