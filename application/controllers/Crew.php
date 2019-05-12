<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crew extends CI_Controller {

    
	function __construct(){
		parent::__construct();		        
        $this->load->model('crew_model');
    }
    
	public function index()
	{
        
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "crew";
        $this->load->view('template/content', $data);

        
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->crew_model->search_crew($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama;
                echo json_encode($arr_result);
            }
        }
    }
}
