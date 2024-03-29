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

   function sing_up()
    {
        $data['action'] = 'sing_up';
        $data['submit'] = 'register';
        if ($this->input->post('register')) {
            $arr = $this->Login_M->valid_data();
            if (!is_null($arr)) {
                $res = $this->Login_M->check_user($arr);
                //var_dump($res);
                if(is_null($res)){
                    $this->Login_M->add_user($arr);
                    $this->session->set_flashdata('info', "Dodano nowego użytkownika");
                    redirect('home');
                }
                $this->session->set_flashdata('info', "Taki użytkownik już istnieje!");
               
            }
            $this->session->set_flashdata('error', "Nie udało się dodać użytkownika!");
        }
        $this->load_views($data);
    }

    function login()
    {
        $data['action'] = 'login';
        $data['submit'] = 'login';
        if ($this->input->post('login')) {
            $arr = $this->Login_M->valid_data();
            if (!is_null($arr)) {
                $res = $this->Login_M->check_user($arr);
                if (!is_null($res)) {
                    $res['logged_in'] =  TRUE;
                    $this->session->set_userdata('user', $res);
                    $this->session->set_flashdata('info', "Jesteś zalogowany");
                    redirect('home');
                }
            }
            $this->session->set_flashdata('error', "Nie udało się zalogować!");
        }
        $this->load_views($data);
    }

    function logout(){
        $this->session->unset_userdata('user');
           redirect('home');
       }
}
