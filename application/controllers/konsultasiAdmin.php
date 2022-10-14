<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konsultasiAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelkonsultasi');
    }

    public function index()
    {
        if($this->session->userdata('idlevel') == 0 || $this->session->userdata('idlevel') == 1)
        {
            $data['dataKonsultasi'] = $this->modelkonsultasi->printDataAdmin()->result();
        }
        
        if($this->session->userdata('idlevel') == 2)
        {
            $data['dataKonsultasi'] = $this->modelkonsultasi->printDataDokter($this->session->userdata('id'))->result();
        }   

        $this->load->view('admin/header/header.php');
        $this->load->view('admin/konsultasiAdmin/data.php', $data);
        $this->load->view('admin/footer/footer.php');
    }

	public function finish($transaction_id)
    {
        $this->modelkonsultasi->finish($transaction_id);
        redirect('konsultasiAdmin');
    }

    public function riwayatkonsultasi($id)
    {
        $data['dataTransaksi'] = $this->modeldatapengguna->printDataTransaksi($id)->result();
		$data['dataKonsultasi'] = $this->modelkonsultasi->printDataKonsultasi();
        $this->load->view('header/header.php');
        $this->load->view('konsultasi/riwayat.php', $data);
        $this->load->view('footer/footer.php');
    }

    public function updatedata()
    {

        $user_id = $this->input->post('id', TRUE);
        $level  = $this->input->post('level', TRUE);

        $data = array(
            'id_level' => $level
        );

        // $this->db->where('id_user', $user_id);
        // $this->db->update('user', $data);
        $this->modeldatapengguna->updateData($user_id, $data);

        redirect('dataDokter');
    }
}
