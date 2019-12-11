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

    function add_new($uid, $bank_transfer, $cost_pcent)
    {
        $data = $this->data;
        $data['form_data'] = $this->input->post('bill');
        $data['uid'] = $uid;
        $data['cost_pcent'] = $cost_pcent;
        $data['bank_transfer'] = $bank_transfer;
        $this->load_views($data, 'form');
    }

    function insert()
    {
        $data = $this->data;
        $data['form_data'] = $this->input->post('bill');
        $data['uid'] =  $this->input->post('bill[uid]');
        $data['cost_pcent'] =  $this->input->post('bill[cost_pcent]');
        $data['bank_transfer'] =  $this->input->post('bill[bank_transfer]');

        if ($this->input->post('add_bill')) {
            $arr = $this->Bill_M->valid_data();
            if (!is_null($arr)) {
                $id = $this->Bill_M->insert($arr);
                $this->Contract_M->update_contract_bill($id, $data['uid']);
                $this->Bill_M->update_bill_number($id);
                $this->create_pdf($id);
                $this->session->set_flashdata('info', 'Utworzono nowy rachunek');
                redirect('home');
            }
            $this->session->set_flashdata('error', "Nie udało się dodać rachunku!");
        }
        $this->load_views($data, 'form');
    }
    function create_pdf($id)
    {
        $this->Bill_M->update_bill_pdf($id);
    }


    function delete($id){
        $res = $this->Bill_M->delete($id);
        $this->session->set_flashdata('info', "Usunięto rachunek nr {$res->full_number}");
        redirect('home');
    }
}