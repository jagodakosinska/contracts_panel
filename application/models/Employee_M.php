<?php

class Employee_M extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function show_list()
    {
        $this->db->from('employee');
        $res = $this->db->get()->result();
        return $res;
    }





    
}
