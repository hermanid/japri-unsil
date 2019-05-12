<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
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
    public function add()
    {
        $nama = $this->input->post('nama');
        $cetakhp = $this->input->post('cetakhp');
        $cetaksw = $this->input->post('cetaksw');
        $cetakfw = $this->input->post('cetakfw');

        $query = $this->db->query('SELECT * FROM `harga`');
        $row = $query->result();
        $hp = $row[0]->harga;
        $sw = $row[1]->harga;
        $fw = $row[2]->harga;

        $data['terakhir'] = $nama . " telah mencetak cetak normal sebanyak " . $cetakhp . "cetak setengah warna " . $cetaksw . " cetak warna" .
            $cetakfw . " dengan harga " . number_format(($cetakhp * $hp) + ($cetaksw * $sw) + ($cetakfw * $fw));
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "sukses";
        $this->load->view('template/content', $data);
    }
}
