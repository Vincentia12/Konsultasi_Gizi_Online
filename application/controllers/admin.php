<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modeldashboard');
        $this->load->model('modeldatapengguna');
    }

    public function index()
    {
        $data['dataTransaksi'] = $this->modeldatapengguna->printDataTransaksiAll    ()->result();;
        $data['dataKonsultasi'] = $this->modeldashboard->printDataKonsultasi()->result();
        $data['dataIncome'] = $this->modeldashboard->printDataIncome()->result();
        $data['dataChart'] = $this->modeldashboard->printDataChart();
        $data['dataPasien'] = $this->modeldatapengguna->printCountDataPasien()->result();
        $data['dataDokter'] = $this->modeldatapengguna->printCountDataDokter()->result();
        $this->load->view('admin/header/header.php');
        $this->load->view('admin/home.php', $data);
        $this->load->view('admin/footer/footer.php');
    }
}
