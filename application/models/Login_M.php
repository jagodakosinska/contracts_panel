<?php
class Login_M extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    function valid_data()
    {
        $this->form_validation->set_rules('username', 'Nazwa użytkownika', 'required|trim');
        $this->form_validation->set_rules('password', 'Hasło', 'required|trim');
        if ($this->form_validation->run() !== false) {
            $password = hash('sha1', $this->input->post('password'));
            $username = $this->input->post('username');
            $arr = [
                'username'  => $username,
                'password'     => $password,
            ];
         return $arr;
        }
        return null;
    }

    function  add_user($arr)
    {
        $this->db->insert('users', $arr);
    }

    function check_user($arr)
    {

        $this->db->select('username, password')->from('users')->where('username', $arr['username']);
        $res = $this->db->get()->result();
        if ($res[0]->password === $arr['password']) {
            return $res;
        }
        return null;
    }
}