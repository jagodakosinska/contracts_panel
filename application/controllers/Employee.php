<?php


class Employee extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_M');
        $this->load->model('Contract_M');
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
            $data['contract'] = $this->Contract_M->get_list_by_uid($id);
            $data['employee'] = $this->Employee_M->get_by_id($id);
            if (is_null($data['employee'])) {
                $this->session->set_flashdata('error', "Nie ma takiego pracownika!");
                redirect('home');
            }
            $this->load_views($data, 'item');
        }

        function add_new()
    {
        $data = $this->data;
        $data['id'] = '';
        $data['action'] = 'add_new';
        $data['form_data']  = $this->input->post('emp');
        if ($this->input->post('add_employee')) {
            $arr = $this->Employee_M->valid_data();
            if (!is_null($arr)) {
                $res = $this->Employee_M->insert($arr);
                $this->session->set_flashdata('info', "Dodano nowego klienta $res->fname $res->lname");
                redirect('home');
            }
            $this->session->set_flashdata('error', "Nie udało się dodać pracownika!");
        }
        $this->load_views($data, 'form');
    }

    function edit($id){
        $data = $this->data;
        $data['id'] = $id;
        $data['action'] = 'edit';
        $data['form_data'] = $this->Employee_M->get_by_id($id);
            if ($this->input->post('add_employee')) {
            $arr = $this->Employee_M->valid_data();
            if (!is_null($arr)) {
                $res = $this->Employee_M->update($id, $arr);
                $this->session->set_flashdata('info', "Zmieniono dane klienta $res->fname $res->lname");
                redirect('home');
            }
            $this->session->set_flashdata('error', "Coś poszło nie tak spróbuj ponownie");
        }
        $this->load_views($data, 'form');
    }
}



