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

    function get_by_id($id)
    {
        $this->db->from('employee')->where('id', $id);
        $res =  $this->db->get()->result();
        return isset($res[0]) ? $res[0] : null;
    }




}
