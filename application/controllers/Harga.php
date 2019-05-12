<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }
    }

    public function index()
    {

        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "harga";
        $this->load->view('template/content', $data);
    }
}
