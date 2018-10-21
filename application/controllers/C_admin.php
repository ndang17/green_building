<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function temp($page){
        $data['page'] = $page;

        $data['include'] = $this->load->view('template/include','',true);

        $this->load->view('template/template_admin',$data);

    }

    // ==== MASTER ====
    public function menu_master($subpage){
        $data['subpage'] = $subpage;
        $page = $this->load->view('admin/master/menu_master',$data,true);
        $this->temp($page);
    }

    public function addQuestion()
    {
        $data['dataJob'] = '';
        $subpage = $this->load->view('admin/master/add_question',$data,true);
        $this->menu_master($subpage);
    }

    public function label(){
        $data['dataJob'] = '';
        $subpage = $this->load->view('admin/master/label',$data,true);
        $this->menu_master($subpage);
    }

    public function title(){
        $data['dataJob'] = '';
        $subpage = $this->load->view('admin/master/title',$data,true);
        $this->menu_master($subpage);
    }

    public function perpu(){
        $data['dataJob'] = '';
        $subpage = $this->load->view('admin/master/perpu',$data,true);
        $this->menu_master($subpage);
    }

    // ==== PENUTUP MASTER ====

    // ==== QUESTION ====
    public function index()
    {
        $data['dataJob'] = '';
        $subpage = $this->load->view('admin/question/list_question',$data,true);
        $this->menu_question($subpage);
    }
    public function menu_question($subpage){
        $data['subpage'] = $subpage;
        $page = $this->load->view('admin/question/menu_question',$data,true);
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
