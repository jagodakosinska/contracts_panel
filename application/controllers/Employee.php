<?php


class Employee extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

        private function load_views($data, $page){
            $this->load->view('templates/header');
            $this->load->view('templates/menu', $data);
            $this->load->view("employee/{$page}", $data);
            $this->load->view('templates/footer');
        }    
    
}



