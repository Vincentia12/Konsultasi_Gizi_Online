<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BMI extends CI_Controller {

	public function index()
	{
		$this->load->view('header/header.php');
        $this->load->view('BMI/BMI.php');
		$this->load->view('footer/footer.php');
	}
}
