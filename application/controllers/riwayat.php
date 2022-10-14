<?php
defined('BASEPATH') or exit('No direct script access allowed');

class riwayat extends CI_Controller
{

    public function index()
    {
        $this->load->view('header/header.php');
        $this->load->view('riwayat.php');
        $this->load->view('footer/footer.php');
    }
}
