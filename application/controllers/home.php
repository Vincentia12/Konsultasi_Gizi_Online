<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->view('header/header.php');
        $this->load->view('home/homepage.php');
        $this->load->view('footer/footer.php');
    }

    public function about()
    {
        $this->load->view('header/header.php');
        $this->load->view('about/about.php');
        $this->load->view('footer/footer.php');
    }
}
