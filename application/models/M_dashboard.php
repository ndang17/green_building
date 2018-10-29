<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {


    public function __getQuestion($IDTitle){

        // Get Title
        $dataTitle = $this->db->query('SELECT * FROM green.q_title qt 
                                              WHERE qt.ID = "'.$IDTitle.'" LIMIT 1')->result_array();

        if(count($dataTitle)>0){
            $dataTitle[0]['Perpu'] = $this->db->query('SELECT * FROM green.perpu WHERE IDTitle = "'.$IDTitle.'" ')->result_array();
        }

        // Data Label
        $dataLabel = $this->db->query('SELECT * FROM green.q_label ql WHERE ql.IDTitle = "'.$IDTitle.'" ')->result_array();
        if(count($dataLabel)>0){
            for($i=0;$i<count($dataLabel);$i++){
                $DetailQustion = $this->db->query('SELECT * FROM green.q_question qq 
                                                                        WHERE qq.IDTitle = "'.$IDTitle.'"
                                                                         AND qq.IDLabel = "'.$dataLabel[$i]['ID'].'" 
                                                                         ORDER BY qq.Order ASC ')->result_array();

                if(count($DetailQustion)>0){
                    for($q=0;$q<count($DetailQustion);$q++){
                        $d = $DetailQustion[$q];
                        if($d['Type']==1 || $d['Type']=='1'){
                            $data_label = $this->db->query('SELECT * FROM green.q_type_1 qt 
                                      WHERE qt.IDQ = "'.$d['ID'].'" ')->result_array();

                            $data_point = $this->db->query('SELECT * FROM green.q_type_1_range qtr
                                      WHERE qtr.IDQ = "'.$d['ID'].'" ')->result_array();
                            $DetailQustion[$q]['dataLabel'] = $data_label;
                            $DetailQustion[$q]['dataRange'] = $data_point;
                        } else if($d['Type']==2 || $d['Type']=='2'){
                            $data_label = $this->db->query('SELECT * FROM green.q_type_2 qt 
                                      WHERE qt.IDQ = "'.$d['ID'].'" ')->result_array();
                            $DetailQustion[$q]['dataLabel'] = $data_label;
                        }
                    }
                }

                $dataLabel[$i]['DetailQustion'] = $DetailQustion;
            }
        }

        $result = array(
            'Title' => $dataTitle,
            'Label' => $dataLabel
        );

        return $result;
    }
}
