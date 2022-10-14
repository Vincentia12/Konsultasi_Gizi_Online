<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dataPasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modeldatapengguna');
    }

    public function index()
    {
        $data['dataPasien'] = $this->modeldatapengguna->printDataPasien()->result();
        $this->load->view('admin/header/header.php');
        $this->load->view('admin/dataPasien/data.php', $data);
        $this->load->view('admin/footer/footer.php');
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

        redirect('dataPasien');
    }

    public function togglePasien()
    {
        $id = $this->input->post('id_hapus', TRUE);
        $status = $this->input->post('status_hapus', TRUE);
        if ($status == 1)
        {
            $status == 0;
        }
        elseif ($status == 0)
        {
            $status == 1;
        }

        $this->modeldatapengguna->toggleStatusPasien($status, $id);
        return redirect('dataPasien');
    }
}