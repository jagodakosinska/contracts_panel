<?php

class Contract extends MY_Controller{
    public function __construct()
    {
    parent:: __construct();
    $this->load->model('Contract_M');     
    }

    private function load_views($data, $page){
        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data);
        $this->load->view("contract/{$page}", $data);
        $this->load->view('templates/footer');
    }


}
