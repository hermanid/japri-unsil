<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

    
	function __construct(){
		parent::__construct();		
    }
    
	public function index()
	{
        
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "harga";
        $this->load->view('template/content', $data);
        
    }


}
