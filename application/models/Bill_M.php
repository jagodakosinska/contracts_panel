<?php
use Knp\Snappy\Pdf;

class Bill_M extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contract_M');
    }

    function get_by_id($id)
    {
        $this->db->from('bill')->where('id', $id);
        $res = $this->db->get()->result();
        return isset($res[0])  ? $res[0] : null;
    }

    function valid_data()
    {
        $this->form_validation->set_rules('bill[bill_date]', 'Data wystawienia', 'required|trim');
        $this->form_validation->set_rules('bill[netto]', 'Kwota netto', 'required|trim');
        $this->form_validation->set_rules('bill[uid]', '', 'required|numeric');
        $this->form_validation->set_rules('bill[cost_pcent]', '', 'required|numeric');
        $this->form_validation->set_rules('bill[bank_transfer]', '', 'required|numeric');
        if ($this->form_validation->run() !== false) {
            $data['form_data'] = $this->input->post('bill');
            $form_data = $data['form_data'];
            $arr = [
                'bill_date' => $form_data['bill_date'],
                'netto' => $form_data['netto'],
                'cost_pcent' => $form_data['cost_pcent'],
                'bank_transfer' => $form_data['bank_transfer'],
            ];
            return $arr;
        }
        return null;
    }


    function insert($arr){
        $this->db->insert('bill', $arr);
        $id = $this->db->insert_id();
        return $id;
    }

}