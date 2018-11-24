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

    public function dash_menu($content){
        $data['content'] = $content;
        $page = $this->load->view('page/dashboard_menu',$data,true);
        $this->temp($page);
    }

    public function index()
    {
        $data['dataJob'] = $this->db->order_by('ID','ASC')->get('apgt1743_green.jobs')->result_array();
        $data['dataCriteria'] = $this->db->order_by('ID','ASC')->get('apgt1743_green.eligibility_criteria')->result_array();
        $page = $this->load->view('page/dashboard',$data,true);
        $this->dash_menu($page);
    }

    public function pengguna(){
        $dataPengguna = $this->db->order_by('ID','ASC')->get('apgt1743_green.user')->result_array();

        for($i=0;$i<count($dataPengguna);$i++){
            $perc = $this->m_dashboard->getPercentage($dataPengguna[$i]['ID']);
            $dataPengguna[$i]['Percentage'] = $perc;
        }

        $data['dataPengguna'] = $dataPengguna;

        $page = $this->load->view('page/pengguna',$data,true);
        $this->dash_menu($page);
    }

    public function pengujian()
    {

        $tahap = $this->input->get('t');

        if(!isset($tahap)){
            $tahap = 1;
        }

        // Cek apakah tahap ini sudah diisi atau belum
//        $dataLog = $this->db->query('SELECT * FROM apgt1743_green.user_step_log usl WHERE usl.IDUser = 1 ')->result_array();

        $data['dataQuestion'] = $this->m_dashboard->__getQuestion($tahap);

        $page = $this->load->view('page/pengujian',$data,true);
        $this->tempBlank($page);
//        $this->temp($page);
    }

    public function ujian(){



        $email = $this->input->post('email');

//        print_r($email);

        if(isset($email)){
            $data['dataTitle'] = $this->db->order_by('ID','ASC')->limit(1)->get('apgt1743_green.q_title')->result_array()[0];
            $data['detailTitle'] = $this->db->order_by('ID','ASC')->get('apgt1743_green.q_title')->result_array();
            $page = $this->load->view('page/ujian',$data,true);
            $this->tempBlank($page);
        } else {

        }

    }

    public function finish(){
        $data = '';
        $page = $this->load->view('page/finish',$data,true);
        $this->temp($page);
    }


    public function insertDataUser(){
        $dataForm = $this->input->post('dataForm');

        $dataUser = $dataForm['dataUser'];
        $dataUser['Password'] = md5($dataUser['Password']);

        $this->db->insert('apgt1743_green.user', $dataUser);
        $insert_id = $this->db->insert_id();

        $dataAnsw = $dataForm['dataAnsw'];

        if(count($dataAnsw)>0){
            for($i=0;$i<count($dataAnsw);$i++){
                $dataAnsw[$i]['UserID']=$insert_id;
                $this->db->insert('apgt1743_green.eligibility_criteria_answ', $dataAnsw[$i]);
            }
        }

        $dataUser['ID'] = $insert_id;

        $ArrEx = explode(' ',$dataUser['CreateAt']);
        $dataUser['StartAt'] = trim($ArrEx[1]);

        $this->session->set_userdata($dataUser);

        return print_r(1);
    }


    public function authLogin(){

        $data_arr = $this->input->post('dataForm');

        $Username = $data_arr['Username'];
        $Password = md5($data_arr['Password']);

        $dataUser = $this->db->query('SELECT * FROM apgt1743_green.admin
                                          WHERE Username LIKE "'.$Username.'" 
                                           AND Password = "'.$Password.'"')
            ->result_array();

        $result = array(
            'Status' => (count($dataUser)>0) ? 1 : 0
        );


        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');

        $this->session->set_userdata('login','true');

        return print_r(json_encode($result));

    }
}
