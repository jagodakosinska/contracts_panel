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

}