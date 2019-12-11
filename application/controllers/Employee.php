<?php


class Employee extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_M');
    }

        private function load_views($data, $page){
            $this->load->view('templates/header');
            $this->load->view('templates/menu', $data);
            $this->load->view("employee/{$page}", $data);
            $this->load->view('templates/footer');
        }    
        function index()
        {
            $data = $this->data;
            $data['employee'] = $this->Employee_M->show_list();
            $this->load_views($data, 'list');
        }

        function show_details($id)
        {
            $data = $this->data;
            // $data['contract'] = $this->Contract_M->get_list_by_uid($id);
            $data['employee'] = $this->Employee_M->get_by_id($id);
            if (is_null($data['employee'])) {
                $this->session->set_flashdata('error', "Nie ma takiego pracownika!");
                redirect('home');
            }
            $this->load_views($data, 'item');
        }

}



