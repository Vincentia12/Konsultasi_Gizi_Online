<?php
defined('BASEPATH') or exit('No direct script access allowed');

class programdiet extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('programdiet_model');
    }

    public function index()
    {
        $data['programdiet'] = $this->programdiet_model->ambil_data()->result();
        $this->load->view('header/header.php');
        $this->load->view('program_diet/program_diet.php', $data);
        $this->load->view('footer/footer.php');
    }

    public function detail($id)
    {
        $data['detail'] = $this->programdiet_model->detail($id)->result();
        $this->load->view('header/header.php');
        $this->load->view('program_diet/detail_program.php', $data);
        $this->load->view('footer/footer.php');
    }
}
