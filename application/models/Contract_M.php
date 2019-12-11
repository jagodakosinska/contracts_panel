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

function valid_data()
{
    $this->form_validation->set_rules('cont[bdate]', 'Data rozpoczęcia umowy', 'required|trim');
    $this->form_validation->set_rules('cont[edate]', 'Data zakończenia umowy', 'required|trim');
    $this->form_validation->set_rules('cont[title]', 'Tytuł', 'required|trim');
    $this->form_validation->set_rules('cont[uid]', '', 'required|trim');
    $this->form_validation->set_rules('cont[task]', '', 'required|trim');
    if ($this->form_validation->run() !== false) {
        $data['form_data']  = $this->input->post('cont');
        $form_data = $data['form_data'];
        $arr = [
            'bdate' => $form_data['bdate'],
            'edate' => $form_data['edate'],
            'title' => $form_data['title'],
            'uid' => $form_data['uid']
        ];
        return $arr;
    }
    return null;
}

function insert($arr, $task)
{

    $month = $this->check_periot($arr['bdate']);
    $number = $this->set_number($month);
    $num = $number->number + 1;
    $arr['number'] = $num;
    $arr['full_number'] = $task . '/' . $num . '/' . $month . '/' .  date('Y');
    $this->db->insert('contract', $arr);
    $id = $this->db->insert_id();
    return $id;
}
}