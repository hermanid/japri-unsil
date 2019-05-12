<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
	function __construct(){
		parent::__construct();
        $this->load->model('m_login');
    }
    
	public function index()
	{
        		
        if($this->session->has_userdata('status')){
			redirect(base_url("dashboard"));
        }
        $data['title'] = "Masuk | JAPRI";
        $data['page'] = "login";
        $this->load->view('template/content', $data);
        
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'pass' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
