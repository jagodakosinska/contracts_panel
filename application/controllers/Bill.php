<?php

class Bill extends MY_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('Bill_M');
        $this->load->model('Contract_M');
        $this->load->model('Employee_M');
    }

    private function load_views($data, $page){
        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data);
        $this->load->view("bill/{$page}", $data);
        $this->load->view('templates/footer');
    }

    function index($id){
        $data = $this->data;
        $data['bill'] = $this->Bill_M->get_by_id($id);
        $data['contract'] = $this->Contract_M->show_by_bill_id($id);
        $uid = $data['contract']->uid;
        $data['employee'] = $this->Employee_M->get_by_id($uid);
        $this->load_views($data, 'item');
    }

}