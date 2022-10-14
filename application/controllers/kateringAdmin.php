<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kateringAdmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelkatering');
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

        $data['katering'] = $this->modelkatering->printData()->result();
        $data['hargakatering'] = $this->modelkatering->printHarga()->result();

        $this->load->view('admin/header/header.php');
        $this->load->view('admin/kateringAdmin/katering.php', $data);
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
        $nama_menu   = $this->input->post('nama_menu');
        $deskripsi = $this->input->post('deskripsi');
        $foto_url = $this->input->post('foto_url');
        $hari = $this->input->post('hari');
        $created_by = $this->input->post('created_by');
        $waktu = date("Y-m-d");

        // get foto
        // $config['upload_path'] = base_url().'assets/picture';
        // $config['allowed_types'] = 'jpg|png|jpeg|gif';
        // $config['max_size'] = '2048';  //2MB max
        // $config['max_width'] = '4480'; // pixel
        // $config['max_height'] = '4480'; // pixel
        // $config['file_name'] = $_FILES['fotopost']['name'];

        // $this->upload->initialize($config);

        // if (!empty($_FILES['fotopost']['name'])) {
            // if ($this->upload->do_upload('fotopost')) {
                $foto = $this->upload->data();
                $data = array(
                    'id_katering_diet' => $hari,
                    'nama_menu'     => $nama_menu,
                    'deskripsi'     => $deskripsi,
                    'is_aktif'     => 1,
                    'is_katering_diet' => 1,
                    'created_by'    => $created_by,
                    //'foto'       => $foto['file_name'],
                    'foto'       => $foto_url,
                    'created_at' => $waktu
                );
                $this->modelkatering->insert($data);

                redirect('kateringAdmin');
            // } else {
            //     die("gagal upload");
            // }
        // } else {
        //     echo "tidak masuk";
        // }
    }

    public function insertdataHarga()
    {
        $id_menu = $this->input->post('id_menu_tambah');
        $harga = $this->input->post('harga');

            // if ($this->upload->do_upload('fotopost')) {
                $data = array(
                    'id_katering_diet_menu' => $id_menu,
                    'harga'     => $harga,
                );
                
                $this->modelkatering->insertHarga($data);
                
                redirect('kateringAdmin');

    }

    // delete
    public function deletedata($id_konversi_gizi, $foto)
    {
        $path = base_url().'assets/picture/';
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

    public function riwayatkonsultasi($id)
    {
        $data['dataTransaksi'] = $this->modeldatapengguna->printDataTransaksi($id)->result();
        //$data['dataKonsultasi'] = $this->modelkonsultasi->printDataKonsultasi($id)->result();
		$data['dataKonsultasi'] = $this->modelkonsultasi->printDataKonsultasi($id);
        $this->load->view('header/header.php');
        $this->load->view('konsultasi/riwayat.php', $data);
        $this->load->view('footer/footer.php');
    }

    // update
    public function updateDataMenu()
    {
        $id_update   = $this->input->post('id_update');
        $nama_menu_update = $this->input->post('nama_menu_update');
        $deskripsi_update = $this->input->post('deskripsi_update');
        $foto_url_update = $this->input->post('foto_url_update');
        $hari_update = $this->input->post('hari_update');
        $updateby = $this->session->userdata('id');
        $waktu = date("Y-m-d");

        $path = base_url().'assets/picture/';

        $kondisi = array('id_katering_diet_menu' => $id_update);

        // get foto
        // $config['upload_path'] = base_url().'assets/picture';
        // $config['allowed_types'] = 'jpg|png|jpeg|gif';
        // $config['max_size'] = '2048';  //2MB max
        // $config['max_width'] = '4480'; // pixel
        // $config['max_height'] = '4480'; // pixel
        // $config['file_name'] = $_FILES['fotopost_update']['name'];

        // $this->upload->initialize($config);

        // if (!empty($_FILES['fotopost_update']['name'])) {
            // if ($this->upload->do_upload('fotopost')) {
                // $foto = $this->upload->data();
                $data = array(
                    'id_katering_diet' => $hari_update,
                    'nama_menu'     => $nama_menu_update,
                    'deskripsi'     => $deskripsi_update,
                    'foto'       => $foto_url_update,
                    'updated_at' => $waktu,
                    'updated_by' => $updateby,
                );
                // hapus foto pada direktori
                @unlink($path . $this->input->post('filelama'));

                $this->modelkatering->updateMenu($data, $kondisi);
                redirect('kateringAdmin');
            // } else {
            //     die("gagal update");
            // }
        // }
        // else 
        // {
        //     echo "tidak masuk";
        // }
    }

    public function updatedataHarga()
    {
        $id_menu   = $this->input->post('id_harga_update');
        $harga = $this->input->post('harga_update');

        $this->modelkatering->updateHarga($id_menu, $harga);

        return redirect('kateringAdmin');
    }

    public function tampilan()
    {
    }

    public function add()
    {
        $this->load->view('admin/header/header.php');
        $this->load->view('admin/kateringAdmin/add.php');
        $this->load->view('admin/footer/footer.php');
    }
}
