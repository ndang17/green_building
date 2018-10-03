<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

    public function temp($page){
        $data['page'] = $page;
        $this->load->view('template/template',$data);

    }

    public function index()
    {
        $page = $this->load->view('page/dashboard','',true);
        $this->temp($page);
    }
}
