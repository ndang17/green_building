<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_api extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');

        $this->load->model('m_api');
    }

    public function getTitle(){
        $data = $this->db->order_by('ID','ASC')->get('green.q_title')->result_array();

        return print_r(json_encode($data));
    }

    public function crudQuestion(){
        $data_arr = $this->input->post('dataForm');

        if($data_arr['action']=='loadLabel'){

            $data = $this->db->query('SELECT * FROM green.q_label ql 
                                                WHERE ql.IDTitle = "'.$data_arr['IDTitle'].'" ')->result_array();

            return print_r(json_encode($data));
        }
        else if($data_arr['action']=='addQType3'){
            $dataInsert = (array) $data_arr['dataInsert'];
            $this->db->insert('green.q_question',$dataInsert);
            return print_r(1);
        }
        else if($data_arr['action']=='addQType2'){
            $dataInsert = (array) $data_arr['dataInsert'];
            $this->db->insert('green.q_question',$dataInsert);
            $insert_id = $this->db->insert_id();

            $ArrMulty = (array) $data_arr['ArrMulty'];
            for($i=0;$i<count($ArrMulty);$i++){
                $ArrMulty[$i]['IDQ'] = $insert_id;
                $this->db->insert('green.q_type_2',$ArrMulty[$i]);
            }

            return print_r(1);
        }
        else if($data_arr['action']=='addQType1'){

            $dataInsert = (array) $data_arr['dataInsert'];
            $this->db->insert('green.q_question',$dataInsert);
            $IDQ = $this->db->insert_id();

            $ArrLabel = (array) $data_arr['ArrLabel'];
            for($i=0;$i<count($ArrLabel);$i++){
                $ArrLabel[$i]['IDQ'] = $IDQ;
                $this->db->insert('green.q_type_1',$ArrLabel[$i]);
            }

            $ArrRange = (array) $data_arr['ArrRange'];
            for($r=0;$r<count($ArrRange);$r++){
                $ArrRange[$r]['IDQ'] = $IDQ;
                $this->db->insert('green.q_type_1_range',$ArrRange[$r]);
            }

            return print_r(1);
        }

        else if($data_arr['action']=='readQuestion'){
            $IDTitle = $data_arr['IDTitle'];
            $data = $this->m_api->__getQuestion($IDTitle);

            return print_r(json_encode($data));
        }

        else if($data_arr['action']=='deleteQuestion'){
            $IDQ = $data_arr['IDQ'];
            $this->db->where('ID', $IDQ);
            $this->db->delete('green.q_question');

            $this->db->where('IDQ', $IDQ);
            $this->db->delete(array('green.q_type_1','green.q_type_1_range','green.q_type_2'));

            return print_r(1);
        }

        else if($data_arr['action']='deleteLableInQuestion'){
            $IDLable = $data_arr['IDLabel'];
            $this->db->where('ID', $IDLable);
            $this->db->delete('green.q_label');

            //get IDQ in label
            $dataQ = $this->db->query('SELECT ID FROM green.q_question q 
                                                WHERE q.IDLabel = "'.$IDLable.'" ')->result_array();

            if(count($dataQ)>0){
                for($i=0;$i<count($dataQ);$i++){
                    $this->db->where('IDQ', $dataQ[$i]['ID']);
                    $this->db->delete(array('green.q_type_1','green.q_type_1_range','green.q_type_2'));
                    $this->db->reset_query();
                }
            }

            $this->db->where('IDLabel', $IDLable);
            $this->db->delete('green.q_question');

            return print_r(1);

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
            $dataForm = (array) $data_arr['dataForm'];
            $this->db->insert('green.q_label', $dataForm);
            return print_r(1);
        }
    }

    public function crudPurpose(){
        $data_arr = $this->input->post('dataForm');

        if($data_arr['action']=='readPerpu'){
            $data = $this->db->order_by('ID','ASC')
                ->get('green.q_title')->result_array();

            if(count($data)>0){
                for($i=0;$i<count($data);$i++){
                    $dataPerpu = $this->db->select('ID as IDPerpu,Perpu')->get_where('green.perpu',
                        array('IDTitle' => $data[$i]['ID']))->result_array();
                    $data[$i]['Perpu'] = $dataPerpu;
                }
            }

            return print_r(json_encode($data));
        }
        else if($data_arr['action']=='addPerpu'){
            $formInsert = (array) $data_arr['formInsert'];
            $this->db->insert('green.perpu',$formInsert);
            return print_r(1);
        }
        else if($data_arr['action']=='editPerpu'){
            $formInsert = (array) $data_arr['formInsert'];
            $this->db->where('ID', $data_arr['ID']);
            $this->db->update('green.perpu',$formInsert);
            return print_r(1);
        }
        else if($data_arr['action']=='loadPerpu'){
            $ID = $data_arr['ID'];
            $data = $this->db->get_where('green.perpu',array('ID' => $ID),1)->result_array();
            return print_r(json_encode($data));
        }
        else if($data_arr['action']=='deletePerpu'){
            $this->db->where('ID', $data_arr['ID']);
            $this->db->delete('green.perpu');
            return print_r(1);
        }
    }

}
