<?php
defined('BASEPATH') or exit('No direct script access allowed');

class katering extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('katering_model');
		$this->load->model('modeldatapengguna');
	}

	public function index()
	{
		$data['katering'] = $this->katering_model->ambil_data()->result();
		$this->load->view('header/header.php');
		$this->load->view('katering/katering.php', $data);
		$this->load->view('footer/footer.php');
	}

	public function detail($id)
	{
		$data['detail'] = $this->katering_model->detail($id)->result();
		$this->load->view('header/header.php');
		$this->load->view('katering/detail_menu.php', $data);
		$this->load->view('footer/footer.php');
	}
}
