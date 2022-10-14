<?php
defined('BASEPATH') or exit('No direct script access allowed');

class artikel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('modelartikel');
	}

	public function index()
	{
		$data['dataArtikel'] = $this->modelartikel->getArticle()->result();
		$this->load->view('header/header.php');
		$this->load->view('artikel/artikel.php', $data);
		$this->load->view('footer/footer.php');
	}

	public function detail($id)
	{
		$data['detailArtikel'] = $this->modelartikel->detail($id)->result();
		$this->load->view('header/header.php');
		$this->load->view('artikel/detail_artikel.php', $data);
		$this->load->view('footer/footer.php');
	}
}
