<?php

class EventModel extends CI_Model
{

    public function getAllEvent()
    {
        return $this->db->get('EVENT')->result_array();
    }

    public function getAllEventOverview()
    {
        $query = "SELECT EVENT_TITLE, QUOTA, EVENT_DATE,CASE WHEN (to_date('1970-01-01','yyyy-mm-dd') +
                    (EVENT_DATE)/60/60/24) >= trunc(sysdate) THEN 'OPEN' ELSE 'CLOSE' END AS STATUS
                    FROM EVENT E";
        return $this->db->query($query)->result_array();
    }
}
