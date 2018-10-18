<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_api extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
    }

    public function getTitle(){
        $data = $this->db->order_by('ID','ASC')->get('green.q_title')->result_array();

        return print_r(json_encode($data));
    }

    public function crudQuestion(){
        $data_arr = $this->input->post('dataForm');


        if($data_arr['action']=='loadLabel'){

            $data = $this->db->order_by('ID','ASC')->get_where('green.q_label',
                array('IDTitle',$data_arr['IDTitle']))->result_array();

            return print_r(json_encode($data));
        }

    }

}
