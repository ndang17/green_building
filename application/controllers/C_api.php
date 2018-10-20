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

    public function crudTitle(){
        $data_arr = $this->input->post('dataForm');

        if($data_arr['action']=='readTitle'){
            $data = $this->db->order_by('ID','ASC')->get('green.q_title')->result_array();

            return print_r(json_encode($data));
        }
        else if($data_arr['action']=='deleteTitle'){
            $this->db->where('ID', $data_arr['ID']);
            $this->db->delete('green.q_title');
            return print_r(1);
        }
        else if($data_arr['action']=='editTitle'){
            $ID = $data_arr['ID'];
            $dataForm = array('Code' => $data_arr['Code'],'Title'=>$data_arr['Title']);
            $this->db->where('ID', $ID);
            $this->db->update('green.q_title',$dataForm);

            return print_r(1);
        }
        else if($data_arr['action']=='addTitle'){
            $dataForm = array('Code' => $data_arr['Code'],'Title'=>$data_arr['Title']);
            $this->db->insert('green.q_title', $dataForm);
            return print_r(1);
        }

    }

    public function crudLabel(){
        $data_arr = $this->input->post('dataForm');

        if($data_arr['action']=='readLabel'){

            $dataT = $this->db->order_by('ID','ASC')->get('green.q_title')->result_array();

            if(count($dataT)>0){
                for($i=0;$i<count($dataT);$i++){
                    $data = $this->db->query('SELECT ql.* FROM green.q_label ql
                                                WHERE ql.IDTitle = "'.$dataT[$i]['ID'].'" ORDER BY ql.IDTitle, ql.Code ASC 
                                                ')->result_array();

                    $dataT[$i]['Label'] = $data;
                }
            }

            return print_r(json_encode($dataT));
        }
        else if($data_arr['action']=='editLabel'){
            $ID = $data_arr['ID'];
            $dataForm = (array) $data_arr['dataForm'];

            $this->db->where('ID', $ID);
            $this->db->update('green.q_label',$dataForm);

            return print_r(1);

        }
        else if($data_arr['action']=='addLabel'){

        }
    }

}
