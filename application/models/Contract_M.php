<?php

class Contract_M extends CI_Model{
public function __construct()
{
    parent::__construct();
}


function show_list()
{
    $month = $this->session->month;
    $year = $this->session->year;
    $where = "MONTH(`bdate`)=$month AND YEAR(`bdate`)=$year";
    $this->db->from('contract')->where($where);
    $res = $this->db->get()->result();
    return $res;
}


}