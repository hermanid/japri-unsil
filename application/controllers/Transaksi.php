<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect('login');
        }

        // load model diskon
        $this->load->model('diskon_model', 'diskon');
        $this->load->model('harga_model', 'harga');
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
        $data['diskon'] = $this->diskon->getAllDiskon();
        $data['harga'] = $this->harga->getAllHarga();

        // //form validation
        // $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('crew', 'Crew', 'required|trim');
        // $this->form_validation->set_rules('cetakhp', 'Cetak Hitam Putih', 'required|numeric|trim');
        // $this->form_validation->set_rules('cetaksw', 'Cetak 50% Warna', 'required|numeric|trim');
        // $this->form_validation->set_rules('cetakhp', 'Cetak 100% Warna', 'required|numeric|trim');
        // $this->form_validation->set_rules('jilid', 'Jumlah jilid', 'required|numeric|trim');
        // $this->form_validation->set_rules('diskon', 'Potongan', 'required|numeric|trim');

        $this->load->view('template/content', $data);

    }

    public function ledger()
    {
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "ledger";
        $this->load->view('template/content', $data);
    }

    function add()
    {
        $data['nama'] = $this->input->post('nama');
        $data['cetakhp'] = $this->input->post('cetakhp');
        $data['cetaksw'] = $this->input->post('cetaksw');
        $data['cetakfw'] = $this->input->post('cetakfw');
        $jns = $this->input->post('jenis');
        $data['crew'] = $this->input->post('crew');
        $disk = $this->input->post('diskon');
        $data['jilid'] = $this->input->post('jilid');
        $q = $this->db->query('SELECT * FROM `discount` WHERE `id_discount` =  ' . (int)$disk);
        $row = $q->result();
        $data['iddiskon'] = $row[0]->id_discount;
        $data['ndiskon'] = $row[0]->nama;
        $data['vdiskon'] = $row[0]->potongan;

        $query = $this->db->query('SELECT * FROM `harga` WHERE id_harga = 4');
        $row = $query->result();
        $data['jl'] = $row[0]->harga;
        $query = $this->db->query('SELECT * FROM `harga`');
        $row = $query->result();
        $data['hp'] = $row[0]->harga;
        $data['sw'] = $row[1]->harga;
        $data['fw'] = $row[2]->harga;
        $data['jl'] = $row[3]->harga;

        $nlogin = $this->session->userdata("nama");
        $query = $this->db->query('SELECT * FROM `admin` WHERE username ="' . $nlogin . '"');
        $row = $query->result();

        $data['admin'] = $row[0]->nama;
        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "sukses";

        $this->load->view('template/content', $data);
    }

    function badmin($jbarang, $jilid)
    {
        return ($jbarang *  50) + ($jilid * 1000);
    }

    function all()
    {
        $nama = $this->input->post('namapb');
        $data['nama'] = $nama;
        $admin = $this->input->post('admin');
        $iddiskon = $this->input->post('iddiskon');
        $crew = $this->input->post('crew');
        $bayar = $this->input->post('bayar');
        $jkertas = $this->input->post('jkertas');
        $jilid = $this->input->post('jilid');
        $bonusadmin = $this->badmin($jkertas, $jilid);
        $bonuscrew = $this->input->post('hawal') * 0.3;
        $hawal = $this->input->post('hawal');
        $hdiskon = $this->input->post('hdiskon');
        $query = $this->db->query('SELECT * FROM `ledger`');
        $row = $query->last_row();

        if ($row != NULL) {
            $saldo = $row->saldo;
        } else {
            $saldo = 0;
        }
        $query = $this->db->query("SELECT `id_admin`,`bonus` FROM `admin` WHERE nama =  '" . $admin . "'");
        $row = $query->row();
        $bnsadmin = $row->bonus;
        $idadmin = $row->id_admin;

        $query = $this->db->query('SELECT * FROM `crew` WHERE nama ="' . $this->input->post('crew') . '"');
        $row = $query->result();
        $idcrew = $row[0]->id_crew;
        $query = $this->db->query("SELECT `bagihasil` FROM `crew` WHERE id_crew =   " . $idcrew);
        $row = $query->row();
        $bagihasil = $row->bagihasil;
        if($bayar !== 'yes'){
            $query = $this->db->query("SELECT `piutang` FROM `crew` WHERE id_crew =   " . $idcrew);
            $row = $query->row();
            $piutang = $row->piutang;
            $this->db->query('UPDATE `crew` SET `bagihasil`= ' . (int)($bagihasil + $bonuscrew) . ', `piutang`= ' . (int)($piutang + $hdiskon) . ' WHERE id_crew =' . $idcrew);
            $this->db->query('INSERT INTO `ledger`(`id_ledger`, `keterangan`, `debit`,`kredit`, `saldo`, `tanggal`) VALUES (NULL,"PIUTANG PRINT '.strtoupper($crew).'"  ,0, ' . $hdiskon . ',   ' . (int)($saldo) . ',now())');
        }else{
            $this->db->query('INSERT INTO `ledger`(`id_ledger`, `keterangan`, `debit`, `saldo`, `tanggal`) VALUES (NULL,"PENDAPATAN PRINT", ' . $hdiskon . ',   ' . (int)($hdiskon + $saldo) . ',now())');
        }
        $this->db->query('UPDATE `crew` SET `bagihasil`= ' . (int)($bagihasil + $bonuscrew) . ' WHERE id_crew =' . $idcrew);

        //query
        $this->db->query('INSERT INTO `detil_print`(`id_print`, `nama`, `harga`, `tanggal`) VALUES (NULL,  "' . $nama . '" , ' . $hdiskon . ',now())');


        $this->db->query('UPDATE `admin` SET `bonus`= ' . (int)($bnsadmin + $bonusadmin) . ' WHERE id_admin =' . $idadmin);

        $data['bonuscrew'] =  $this->input->post('hawal') * 0.3;
        $data['bonusadmin'] = $bonusadmin;
        $data['crew'] = $crew;
        $query = $this->db->query('SELECT * FROM `ledger`');
        $row = $query->last_row();
        $idledger = $row->id_ledger;
        $query = $this->db->query('SELECT * FROM `detil_print`');
        $row = $query->last_row();
        $idprint = $row->id_print;

        $this->db->query('INSERT INTO `transaksi`(`id_transaksi`, `crew`, `discount`, `admin`, `print`, `ledger`, `jumlah`, `jilid`, `tanggal`, `harga_awal`, `harga_diskon`)
        VALUES (NULL,' . $idcrew . ' ,' . $iddiskon . ' ,' . $idadmin . ' ,' . $idprint . ',' . $idledger . ',' . $jkertas . ',' . $jilid . ',now(),' . $hawal . ',' . $hdiskon . ')');

        $data['title'] = "Dashboard | JAPRI";
        $data['page'] = "dashboard";
        $data['sesi'] = "trans_sukses";
        $this->load->view('template/content', $data);    }
}
