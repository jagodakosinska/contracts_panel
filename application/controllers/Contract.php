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

    function add_new($uid, $task)
    {
        $data = $this->data;
        $data['action'] = 'add_new';
        $data['uid'] = $uid;
        $data['task'] = $task;
        $data['id_contract'] = '';
        $data['form_data']  = $this->input->post('cont');
        if ($this->input->post('add_contract')) {
            $arr = $this->Contract_M->valid_data();
            if (!is_null($arr)) {
                $id = $this->Contract_M->insert($arr, $data['task'] );
                $res = $this->Contract_M->get_by_id($id);
                $this->create_pdf($res->id);
                $this->session->set_flashdata('info', "Dodano nową umowę $res->number");
                redirect('home');
            }
            $this->session->set_flashdata('error', "Nie udało się dodać umowy!");
        }
        $this->load_views($data, 'form');
    }

    function create_pdf($id)
    {
        $this->Contract_M->update_contract_pdf($id);
    }

    function edit($id_contract, $task, $uid){
        $data = $this->data;
        $data['action'] = 'edit';
        $data['uid'] = $uid;
        $data['task'] = $task;
        $data['id_contract'] = $id_contract;
        $data['form_data']  =  $this->Contract_M->get_array_by_id($id_contract);
        if ($this->input->post('add_contract')) {
            $arr = $this->Contract_M->valid_data();
            if (!is_null($arr)) {
                $this->Contract_M->insert_apendix($id_contract, $arr);
                $this->session->set_flashdata('info', "Dodano anex do umowy!");
                redirect('home');
            }
            $this->session->set_flashdata('error', "Nie udało się zmienić umowy!");
        }
        $this->load_views($data, 'form');
    }
}
