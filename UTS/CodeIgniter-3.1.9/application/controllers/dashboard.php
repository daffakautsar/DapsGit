<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }


    function index(){
        redirect('beranda/index');
  }
}
