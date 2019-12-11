<?php

class Employee_M extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function show_list()
    {
        $this->db->from('employee');
        $res = $this->db->get()->result();
        return $res;
    }

    function get_by_id($id)
    {
        $this->db->from('employee')->where('id', $id);
        $res =  $this->db->get()->result();
        return isset($res[0]) ? $res[0] : null;
    }

    function valid_data()
    {
        $this->form_validation->set_rules('emp[fname]', 'Imię', 'required|trim');
        $this->form_validation->set_rules('emp[lname]', 'Nazwisko', 'required|trim');
        $this->form_validation->set_rules('emp[birth_place]', 'Miejsce urodzenia', 'required|trim');
        $this->form_validation->set_rules('emp[birth_date]', 'Data urodzenia', 'required|trim');
        $this->form_validation->set_rules('emp[father_fname]', 'Imię ojca', 'trim');
        $this->form_validation->set_rules('emp[mother_fname]', 'Imię matki', 'trim');
        $this->form_validation->set_rules('emp[pesel]', 'PESEL', 'required|numeric');
        $this->form_validation->set_rules('emp[nip]', 'NIP', 'trim');
        $this->form_validation->set_rules('emp[city]', 'Miejscowość', 'required|trim');
        $this->form_validation->set_rules('emp[district]', 'Dzielnica / Gmina', 'required|trim');
        $this->form_validation->set_rules('emp[street]', 'Ulica', 'trim');
        $this->form_validation->set_rules('emp[street_nr]', 'Nr domu', 'required|trim');
        $this->form_validation->set_rules('emp[home_nr]', 'Nr mieszkania', 'trim');
        $this->form_validation->set_rules('emp[zip]', 'Kod pocztowy', 'required|trim');
        $this->form_validation->set_rules('emp[post]', 'Poczta', 'required|trim');
        $this->form_validation->set_rules('emp[address]', 'Adres koresp.', 'trim');
        $this->form_validation->set_rules('emp[us_address]', 'Urząd Skarbowy', 'trim');
        $this->form_validation->set_rules('emp[task_contract]', 'Urząd Skarbowy', 'required|trim');
        $this->form_validation->set_rules('emp[cost_pcent]', 'Koszty', 'required|trim');
        $this->form_validation->set_rules('emp[bank_transfer]', 'Forma zapłaty', 'required|trim');
        $this->form_validation->set_rules('emp[bank_acc]', 'Nr konta', 'trim');
        if ($this->form_validation->run() !== false) {
            $data['form_data']  = $this->input->post('emp');
            $form_data = $data['form_data'];
            $arr = [
                'fname' => $form_data['fname'],
                'lname' => $form_data['lname'],
                'birth_place' => $form_data['birth_place'],
                'birth_date' => $form_data['birth_date'],
                'father_fname' => $form_data['father_fname'],
                'mother_fname' => $form_data['mother_fname'],
                'pesel' => $form_data['pesel'],
                'nip' => $form_data['nip'],
                'city' => $form_data['city'],
                'district' => $form_data['district'],
                'street' => $form_data['street'],
                'street_nr' => $form_data['street_nr'],
                'home_nr' => $form_data['home_nr'],
                'zip' => $form_data['zip'],
                'post' => $form_data['post'],
                'address' => $form_data['address'],
                'us_address' => $form_data['us_address'],
                'task_contract' => $form_data['task_contract'],
                'cost_pcent' => $form_data['cost_pcent'],
                'bank_transfer' => $form_data['bank_transfer'],
                'bank_acc' => $form_data['bank_acc']
            ];
         
            return $arr;
        }
        return null;
    }


}
