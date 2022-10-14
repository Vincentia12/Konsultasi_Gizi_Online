<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konversiAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelkonversi');
        $this->load->library('upload');
        $this->load->library('pagination');
    }

    // fungsi untuk mengambil data
    public function index()
    {
        $data['data'] = $this->modelkonversi->get();

        $this->load->view('admin/header/header.php');
        $this->load->view('admin/konversiAdmin/konversi.php', $data);
        $this->load->view('admin/footer/footer.php');
    }

    // untuk menampilkan halaman tambah data
    public function tambah()
    {
        return $this->load->view('tambah_data');
    }

    // untuk memasukan data ke database
    public function insertdata()
    {
        $konversi_gizi   = $this->input->post('konversi_gizi');
        $protein = $this->input->post('protein');
        $lemak = $this->input->post('lemak');
        $karbo = $this->input->post('karbo');
        $kalori = $this->input->post('kalori');
        $vitamin = $this->input->post('vitamin');
        $mineral = $this->input->post('mineral');
        $createdby = '1';
        $waktu = date("Y-m-d");

        // get foto
        $config['upload_path'] = './assets/picture';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'konversi_gizi'       => $konversi_gizi,
                    'protein'     => $protein,
                    'lemak'     => $lemak,
                    'karbo'     => $karbo,
                    'kalori'     => $kalori,
                    'vitamin'     => $vitamin,
                    'mineral'     => $mineral,
                    'foto'       => $foto['file_name'],
                    'created_at' => $waktu,
                    'created_by' => $createdby,
                );
                $this->modelkonversi->insert($data);
                redirect(base_url('konversiAdmin'));
            } else {
                die("gagal upload");
            }
        } else {
            echo "tidak masuk";
        }
    }

    // delete
    public function deletedata($id_konversi_gizi, $foto)
    {
        $path = './assets/picture/';
        @unlink($path . $foto);

        $where = array('id_konversi_gizi' => $id_konversi_gizi);
        $this->modelkonversi->delete($where);
        return redirect(base_url('admin/konversiAdmin'));
    }

    // edit
    public function edit($id_konversi_gizi)
    {
        $kondisi = array('id_konversi_gizi' => $id_konversi_gizi);

        $data['data'] = $this->modelkonversi->get_by_id($kondisi);
        return $this->load->view('konversi/edit', $data);
    }

    // update
    public function updatedata()
    {
        $id_konversi_gizi   = $this->input->post('id_konversi_gizi');
        $konversi_gizi = $this->input->post('konversi_gizi');
        $protein = $this->input->post('protein');
        $lemak = $this->input->post('lemak');
        $karbo = $this->input->post('karbo');
        $kalori = $this->input->post('kalori');
        $vitamin = $this->input->post('vitamin');
        $mineral = $this->input->post('mineral');
        $updateby = '1';
        $waktu = date("Y-m-d");

        $path = './assets/picture/';

        $kondisi = array('id_konversi_gizi' => $id_konversi_gizi);

        // get foto
        $config['upload_path'] = './assets/picture';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['fotopost']['name'])) {
            if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'konversi_gizi'       => $konversi_gizi,
                    'protein'     => $protein,
                    'lemak'     => $lemak,
                    'karbo'     => $karbo,
                    'kalori'     => $kalori,
                    'vitamin'     => $vitamin,
                    'mineral'     => $mineral,
                    'foto'       => $foto['file_name'],
                    'update_at' => $waktu,
                    'update_by' => $updateby,
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->modelkonversi->update($data, $kondisi);
                redirect('');
            } else {
                die("gagal update");
            }
        } else {
            echo "tidak masuk";
        }
    }

    public function tampilan()
    {
    }
}
