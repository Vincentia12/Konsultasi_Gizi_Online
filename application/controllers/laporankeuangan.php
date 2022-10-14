<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporankeuangan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('modeltransaksi');
	}

	public function index()
	{
		$data['dataTransaksi'] = $this->modeltransaksi->printDataTransaksi()->result();
		$this->load->view('admin/header/header.php');
		$this->load->view('admin/laporankeuangan/laporan.php', $data);
		$this->load->view('admin/footer/footer.php');
	}
}
