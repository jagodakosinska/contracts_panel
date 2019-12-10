<?php

class Home extends MY_Controller {

	public function index()
	{
        $data = $this->data;
        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data);
        $this->load->view('templates/footer');

    }
}