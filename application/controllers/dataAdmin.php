<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dataAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modeldatapengguna');
    }

    public function index()
    {
        $data['dataDokter'] = $this->modeldatapengguna->printDataAdmin()->result();
        $this->load->view('admin/header/header.php');
        $this->load->view('admin/dataDokter/data.php', $data);
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

        redirect('dataDokter');
    }
}
