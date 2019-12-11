<?php

class Api extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Contract_M');
        
    }

    function change_year(){
        if($this->input->post('year')){
             $this->session->set_userdata('year',  $this->input->post('year'));
             $data['contract'] = $this->Contract_M->show_list();
             return $this->load->view('contract/contract_list', $data, false);
        }
}
    function change_month(){
        if($this->input->post('month')){
            $this->session->set_userdata('month',  $this->input->post('month'));
            $data['contract'] = $this->Contract_M->show_list();
            return $this->load->view('contract/contract_list', $data, false);
          
        } 
    
    }

}