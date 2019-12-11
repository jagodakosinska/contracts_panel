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

function get_by_id($id)
{
    $this->db->from('contract')->where('id', $id);
    $res = $this->db->get()->result();
    return isset($res[0]) ? $res[0] : null;
}

function get_apendix_by_contract_id($id_contract){
    $this->db->from('apendix')->where('id_contract', $id_contract);
    $res = $this->db->get()->result();
    return isset($res) ? $res : null;
}

function get_by_uid($uid)
{
    $month = $this->session->month;
    $year = $this->session->year;
    $where = "`uid`=$uid AND MONTH(`bdate`)=$month AND YEAR(`bdate`)=$year";
    $this->db->from('contract')->where($where);
    $res = $this->db->get()->result();
    return isset($res[0]) ? $res[0] : null;
}
}