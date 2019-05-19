<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }
        $this->load->model('admin_model', 'admin');
    }

    public function index()
    {
        $data['data'] = $this->admin->getAllAdmin();
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "admin";
        $this->load->view('template/content', $data);
    }
    public function e404(){
          $data['title'] = "Not Found 404";
          $this->load->view('errors/html/error_404', $data);
    }
}
