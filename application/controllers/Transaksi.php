<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    
	function __construct(){
		parent::__construct();		
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
        }
    }
    
	public function index()
	{
        
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "transaksi";
        $this->load->view('template/content', $data);
        
    }
	public function tambah()
	{
        
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "tambah_transaksi";
        $this->load->view('template/content', $data);
        
    }
}
