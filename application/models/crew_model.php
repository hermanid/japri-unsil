<?php
class Crew_model extends CI_Model{
 
    function search_crew($title){
        $this->db->like('nama', $title , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('crew')->result();
    }
 
}