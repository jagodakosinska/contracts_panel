<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_M');
    }


    private function load_views($data)
    {
        $this->load->view('templates/header');
        $this->load->view('login_form', $data);
        $this->load->view('templates/footer');
    }

  
}
