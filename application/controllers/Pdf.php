<?php

class Pdf extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contract_M');
        $this->load->model('Employee_M');
        $this->load->model('Bill_M');
    }
    function create_contract_pdf($id)
    {
        $data['contract'] = $this->Contract_M->get_by_id($id);
        $uid = $data['contract']->uid;
        $data['employee'] = $this->Employee_M->get_by_id($uid);
        $this->load->view('templates/header');
        $this->load->view('contract/pdf_contract', $data);
    }

    function display_contract_pdf($id)
    {
        $pdf = $this->Contract_M->get_by_id($id);
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="file.pdf"');
        echo $pdf->pdf;
        exit();
    }
    
    function create_bill_pdf($id)
    {
        $data['bill'] = $this->Bill_M->get_by_id($id);
        $data['contract'] = $this->Contract_M->show_by_bill_id($id);
        $uid = $data['contract']->uid;
        $data['employee'] = $this->Employee_M->get_by_id($uid);
        $this->load->view('templates/header');
        $this->load->view('bill/pdf_bill', $data);
    }

    function display_bill_pdf($id)
    {
        $pdf = $this->Bill_M->get_by_id($id);
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="file.pdf"');
        echo $pdf->pdf;
        exit();
    }


}
