<?php
defined('BASEPATH') or exit('No direct script access allowed');

class programAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelprogramdiet');
        $this->load->library('upload');
        $this->load->library('pagination');
    }

    // fungsi untuk mengambil data
    public function index()
    {

        // $cari = $this->input->get('cari');
        // $page = $this->input->get('per_page');

        // $search = array('konversi_gizi' => $cari);

        // $batas =  9; // 9 data per page
        // if (!$page) :
        //     $offset = 0;
        // else :
        //     $offset = $page;
        // endif;

        // $config['page_query_string'] = TRUE;
        // $config['base_url']          = base_url() . 'index.php/home/?cari=' . $cari;
        // $config['total_rows']        = $this->modelkatering->jumlah_row($search);

        // $config['per_page']          = $batas;
        // $config['uri_segment']        = $page;

        // $config['full_tag_open']     = '<ul class="pagination">';
        // $config['full_tag_close']   = '<ul>';

        // $config['first_link']       = 'first';
        // $config['first_tag_open']   = '<li><a>';
        // $config['first_tag_close']   = '</a></li>';

        // $config['last_link']         = 'last';
        // $config['last_tag_open']     = '<li><a>';
        // $config['last_tag_close']   = '</a></li>';

        // $config['next_link']         = '&raquo;';
        // $config['next_tag_open']     = '<li><a>';
        // $config['next_tag_close']   = '</a></li>';

        // $config['prev_link']         = '&laquo;';
        // $config['prev_tag_open']     = '<li><a>';
        // $config['prev_tag_close']   = '</a></li>';

        // $config['cur_tag_open']     = '<li class="active"><a>';
        // $config['cur_tag_close']     = '</a></li>';

        // $config['num_tag_open']     = '<li><a>';
        // $config['num_tag_close']     = '</a></li>';

        // $this->pagination->initialize($config);
        // $data['pagination']   = $this->pagination->create_links();
        // $data['jumlah_page'] = $page;


        //$data['data'] = $this->modelkatering->get($batas, $offset, $search);

        $data['programdiet'] = $this->modelprogramdiet->printData()->result();
        $data['hargaprogram'] = $this->modelprogramdiet->printHarga()->result();

        $this->load->view('admin/header/header.php');
        $this->load->view('admin/programAdmin/program.php', $data);
        $this->load->view('admin/footer/footer.php');

        // $this->load->view('templates/header');
        // $this->load->view('konversi/index', $data);
        // $this->load->view('templates/footer');
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
                    'konversi_gizi' => $konversi_gizi,
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
                $this->modelkatering->insert($data);
                redirect('');
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
        $this->modelkatering->delete($where);
        return redirect('');
    }

    // edit
    public function edit($id_konversi_gizi)
    {
        $kondisi = array('id_konversi_gizi' => $id_konversi_gizi);

        $data['data'] = $this->modelkatering->get_by_id($kondisi);
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

                $this->modelkatering->update($data, $kondisi);
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

    public function add()
    {
        $this->load->view('admin/header/header.php');
        $this->load->view('admin/programAdmin/add.php');
        $this->load->view('admin/footer/footer.php');
    }
}
