<?php

class Contract extends MY_Controller{
    public function __construct()
    {
    parent:: __construct();
    $this->load->model('Contract_M');  
    $this->load->model('Employee_M');   
    }

    private function load_views($data, $page){
        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data);
        $this->load->view("contract/{$page}", $data);
        $this->load->view('templates/footer');
    }

    function index()
    {
        $data = $this->data;
        $data['contract'] = $this->Contract_M->show_list();
        $this->load_views($data, 'list');
    }

    function get_by_id($id)
    {
        $data = $this->data;
        $data['contract'] = $this->Contract_M->get_by_id($id);
        $uid = $data['contract']->uid;
        $data['employee'] = $this->Employee_M->get_by_id($uid);
        $data['apendix'] = $this->Contract_M->get_apendix_by_contract_id($id);
        $this->load_views($data, 'item');
    }

}
