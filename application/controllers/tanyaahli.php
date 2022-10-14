<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tanyaahli extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('katering_model');
		$this->load->model('modelpost');
		$this->load->model('modeldatapengguna');
	}

	public function index()
	{
		$data['commentData'] = $this->modelpost->printPostReplies()->result();
		$data['postData'] = $this->modelpost->printPost()->result();
		$this->load->view('header/header.php');
		$this->load->view('tanyaahli/tanyapage.php', $data);
		$this->load->view('footer/footer.php');
	}

	public function submitpost()
	{
		$author = $this->input->post('author_id');
		$question = $this->input->post('postQuestion', TRUE);
		$this->modelpost->insertPost($question, $author);
		redirect('tanyaahli');
	}

	public function detail($id)
	{
		$data['detail'] = $this->katering_model->detail($id)->result();
		$this->load->view('header/header.php');
		$this->load->view('katering/detail_menu.php', $data);
		$this->load->view('footer/footer.php');
	}
}
