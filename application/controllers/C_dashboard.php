<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function temp($page){
        $data['page'] = $page;
        $this->load->view('template/template',$data);
    }

    public function tempBlank($page){
        $data['page'] = $page;
        $data['include'] = $this->load->view('template/include','',true);
        $this->load->view('template/template_blank',$data);
    }

    public function index()
    {
        $data['dataJob'] = $this->db->order_by('ID','ASC')->get('green.jobs')->result_array();
        $data['dataCriteria'] = $this->db->order_by('ID','ASC')->get('green.eligibility_criteria')->result_array();
        $page = $this->load->view('page/dashboard',$data,true);
        $this->temp($page);
    }


    public function pengujian()
    {

        $tahap = $this->input->get('t');

        if(!isset($tahap)){
            $tahap = 1;
        }

        // Cek apakah tahap ini sudah diisi atau belum
//        $dataLog = $this->db->query('SELECT * FROM green.user_step_log usl WHERE usl.IDUser = 1 ')->result_array();

        $data['dataQuestion'] = $this->m_dashboard->__getQuestion($tahap);

        $page = $this->load->view('page/pengujian',$data,true);
        $this->tempBlank($page);
//        $this->temp($page);
    }

    public function ujian(){

        $email = $this->input->post('email');

        if(!isset($email)){
            $data['dataTitle'] = $this->db->order_by('ID','ASC')->limit(1)->get('green.q_title')->result_array()[0];
            $data['detailTitle'] = $this->db->order_by('ID','ASC')->get('green.q_title')->result_array();
            $page = $this->load->view('page/ujian',$data,true);
            $this->tempBlank($page);
        } else {

        }


    }

    public function insertDataUser(){
        $dataForm = $this->input->post('dataForm');

        $dataUser = $dataForm['dataUser'];
        $dataUser['Password'] = md5($dataUser['Password']);

        $this->db->insert('green.user', $dataUser);
        $insert_id = $this->db->insert_id();

        $dataAnsw = $dataForm['dataAnsw'];

        if(count($dataAnsw)>0){
            for($i=0;$i<count($dataAnsw);$i++){
                $dataAnsw[$i]['UserID']=$insert_id;
                $this->db->insert('green.eligibility_criteria_answ', $dataAnsw[$i]);
            }
        }

        return print_r(1);
    }
}
