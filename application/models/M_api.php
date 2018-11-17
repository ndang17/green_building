<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {




    public function __getQuestion($IDTitle){

        // Get Label
        $data = $this->db->query('SELECT * FROM apgt1743_green.q_label WHERE IDTitle = "'.$IDTitle.'" ORDER BY Code ASC ')->result_array();


        if(count($data)>0){
            for($l=0;$l<count($data);$l++){
                $d = $data[$l];
                // Get Question dari label
                $data_l = $this->db->query('SELECT * FROM apgt1743_green.q_question q 
                                            WHERE q.IDTitle = "'.$IDTitle.'" AND q.IDLabel = "'.$d['ID'].'"
                                             ORDER BY q.Order ASC')
                    ->result_array();

                if(count($data_l)>0){
                    for($i=0;$i<count($data_l);$i++){
                        $d = $data_l[$i];
                        if($d['Type']==1 || $d['Type']=='1'){
                            $data_label = $this->db->query('SELECT * FROM apgt1743_green.q_type_1 qt 
                                      WHERE qt.IDQ = "'.$d['ID'].'" ')->result_array();

                            $data_point = $this->db->query('SELECT * FROM apgt1743_green.q_type_1_range qtr
                                      WHERE qtr.IDQ = "'.$d['ID'].'" ')->result_array();
                            $data_l[$i]['dataLabel'] = $data_label;
                            $data_l[$i]['dataRange'] = $data_point;
                        } else if($d['Type']==2 || $d['Type']=='2'){
                            $data_label = $this->db->query('SELECT * FROM apgt1743_green.q_type_2 qt 
                                      WHERE qt.IDQ = "'.$d['ID'].'" ')->result_array();
                            $data_l[$i]['dataLabel'] = $data_label;
                        }
                    }
                }

                $data[$l]['Detail'] = $data_l;

            }
        }

        return $data;


    }

}
