<?php

class MY_Controller extends  CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->helper('my_form');
        $this->load->model('Employee_M');


        if (!isset($_SESSION['year'])) {
            $this->session->set_userdata('year', date('Y'));
        }

        if (!isset($_SESSION['month'])) {
            $this->session->set_userdata('month', date('n'));
        }


        if (!isset($_SESSION['params'])) {
            $arr = [
                'start_year' => date('Y') - 2,
                'end_year' => date('Y') + 1,
                'cost_percent' => 20,
                'tax_rate' => 18,
                'months' => [
                    '1' => 'styczeń',
                    '2' => 'luty',
                    '3' => 'marzec',
                    '4' => 'kwiecień',
                    '5' => 'maj',
                    '6' => 'czerwiec',
                    '7' => 'lipiec',
                    '8' => 'sierpień',
                    '9' => 'wrzesień',
                    '10' => 'październik',
                    '11' => 'listopad',
                    '12' => 'grudzień'
                ]
            ];
            $this->session->set_userdata('params', $arr);
        }

        $this->data = [
            'year' =>  $this->session->year,
            'month' =>  $this->session->month,
            'params' => $this->session->params,
    
        ];
    }
}
