<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diskon extends CI_Controller {

    
	function __construct(){
		parent::__construct();		
    }
    
	public function index()
	{
        
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "diskon";
        $this->load->view('template/content', $data);
        
    }

    function tambah(){
		$nama = $this->input->post('nama');
		$potongan = $this->input->post('potongan');
		$data = array(
			'nama' => $nama,
			'potongan' => $potongan
            );
            $this->db->insert('discount', $data);
			redirect(base_url("diskon"));
    }
    
    function hapus($id){
        $data = array(
			'id_discount' => $id
            );
            $this->db->delete('discount', $data);
            redirect(base_url("diskon"));
    }

}
