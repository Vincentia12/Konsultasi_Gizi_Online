<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konsultasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('modelkonsultasi');
		$this->load->model('modeldatapengguna');
	}

	public function index()
	{
		$data['konsultasiData'] = $this->modelkonsultasi->getJadwal()->result();
		$this->load->view('header/header.php');
		$this->load->view('konsultasi/konsultasi.php', $data);
		$this->load->view('footer/footer.php');
	}

	public function detailriwayatkonsultasi($id)
    {
        $data['dataTransaksi'] = $this->modeldatapengguna->printDataTransaksi($id)->result();
        //$data['dataKonsultasi'] = $this->modelkonsultasi->printDataKonsultasi($id)->result();
		$data['dataKonsultasi'] = $this->modelkonsultasi->printDataKonsultasi($id);
        $this->load->view('header/header.php');
        $this->load->view('konsultasi/detailriwayat.php', $data);
        $this->load->view('footer/footer.php');
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

	public function form()
	{
		$this->load->view('header/header.php');
		$this->load->view('konsultasi/form.php');
		$this->load->view('footer/footer.php');
	}

	public function checkout()
	{
		$data = array(
			'id_pasien' 			=> $this->input->post('id_pasien', TRUE),
			'id_platform'			=> $this->input->post('id_platform', TRUE),
			'berat_badan'			=> $this->input->post('berat_badan', TRUE),
			'tinggi_badan'			=> $this->input->post('tinggi_badan', TRUE),
			'gda'					=> $this->input->post('gda', TRUE),
			'kreatin_serum' 		=> $this->input->post('kreatin_serum', TRUE),
			'sgot'					=> $this->input->post('sgot', TRUE),
			'sgpt'					=> $this->input->post('sgpt', TRUE),
			'albumin'				=> $this->input->post('albumin', TRUE),
			'hb'					=> $this->input->post('hb', TRUE),
			'lain_lain' 			=> $this->input->post('lain_lain', TRUE),
			'tensi_darah'			=> $this->input->post('tensi_darah', TRUE),
			'oedema'				=> $this->input->post('oedema', TRUE),
			'keadaan_umum'			=> $this->input->post('keadaan_umum', TRUE),
			'mual'					=> $this->input->post('mual', TRUE),
			'muntah'				=> $this->input->post('muntah', TRUE),
			'diare'					=> $this->input->post('diare', TRUE),
			'nafsu_makan'			=> $this->input->post('nafsu_makan', TRUE),
			'kesulitan_mengunyah'	=> $this->input->post('kesulitan_mengunyah', TRUE),
			'alergi_makan'			=> $this->input->post('alergi_makan', TRUE),
			'jika_alergi'			=> $this->input->post('jika_alergi', TRUE),
			'pola_makan_sehari'		=> $this->input->post('pola_makan_sehari', TRUE),
			'pekerjaan'				=> $this->input->post('pekerjaan', TRUE),
			'agama'					=> $this->input->post('agama', TRUE),
			'pendidikan'			=> $this->input->post('pendidikan', TRUE),
			'merokok'				=> $this->input->post('merokok', TRUE),
			'riwayat_sakit_keluarga'=> $this->input->post('riwayat_sakit_keluarga', TRUE),
			'riwayat_sakit_dahulu'	=> $this->input->post('riwayat_sakit_dahulu', TRUE),
			'konsumsi_obat'			=> $this->input->post('konsumsi_obat', TRUE),
			'obat_apa'				=> $this->input->post('obat_apa', TRUE),
			'olahraga'				=> $this->input->post('olahraga', TRUE)
		);

		var_dump($data);
		echo $data['olahraga'];
		exit;
		$this->db->insert('detailkonsultasi', $data);
		

		// 

		// id_pasien	
		// id_platform	
		// berat_badan	
		// tinggi_badan	
		// gda	
		// kreatin_serum	
		// sgot	
		// sgpt	
		// albumin	
		// hb	
		// lain_lain	
		// tensi_darah	
		// oedema	
		// keadaan_umum	
		// mual	
		// muntah	
		// diare	
		// nafsu_makan	
		// kesulitan_mengunyah	
		// alergi_makan	
		// jika_alergi	
		// pola_makan_sehari	
		// pekerjaan	
		// agama	
		// pendidikan	
		// merokok	
		// riwayat_sakit_keluarga	
		// riwayat_sakit_dahulu	
		// konsumsi_obat	
		// obat_apa	
		// olahraga

		$this->load->view('header/header.php');
		$this->load->view('konsultasi/checkout.php', $data);
		$this->load->view('footer/footer.php');
	}
}
