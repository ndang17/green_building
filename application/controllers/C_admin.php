<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function temp($page){
        $data['page'] = $page;

        $data['include'] = $this->load->view('template/include','',true);

        $this->load->view('template/template_admin',$data);

    }

    public function index()
    {
        $data['dataJob'] = '';
        $page = $this->load->view('admin/question',$data,true);
        $this->temp($page);
    }

    public function addQuestion()
    {
        $data['dataJob'] = '';
        $page = $this->load->view('admin/add_question',$data,true);
        $this->temp($page);
    }

    public function title_label(){
        $data['dataJob'] = '';
        $page = $this->load->view('admin/title_label',$data,true);
        $this->temp($page);
    }

    public function users()
    {
        $data['dataJob'] = '';
        $page = $this->load->view('admin/users', $data, true);
        $this->temp($page);

    }

    public function statistik()
    {
        $data['dataJob'] = '';
        $page = $this->load->view('admin/statistik', $data, true);
        $this->temp($page);

    }

}
