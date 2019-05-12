<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crew extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login" && $this->session->userdata('status') == 'logout') {
            redirect('login');
        }
    }

    public function index()
    {

        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "crew";
        $this->load->view('template/content', $data);
    }

    public function tambah()
    { }
}
