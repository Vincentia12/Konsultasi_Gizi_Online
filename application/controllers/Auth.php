<?php 
	use Google\Client as GoogleClient;
	use Google\Service\Oauth2;
    
	class Auth extends CI_Controller{
		
		public function __construct()
		{	
			parent::__construct();
			$this->load->database();
			$this->load->model('user_model');
			$this->load->model('modelartikel');
			$this->load->helper('url');
			$this->load->library('session');
		}

		public function index()
		{
			if($this->session->has_userdata('user'))
			{
				redirect('home');
			}
			else
			{
				//redirect('login');
				$this->load->view('auth/login_form');
			}
		}

		public function loginProcess()
		{
			$email = $this->input->post('email', TRUE);
			$pass = $this->input->post('password', TRUE);
	
			// echo $user . " | " . $pass;
			// echo "Passed";
			// exit;
			// select * from login where user = ?
			$query  = $this->db->get_where('user',['email' => $email]);


			// cek username 
			if($query->num_rows() > 0)
			{
				// kita ambil isi dari record
				$userdata = $query->row();
				if(password_verify($pass, $userdata->password))
				{
					// membuat session
					$this->session->set_userdata('id', $userdata->id_user);
					$this->session->set_userdata('user', $userdata->email);
					$this->session->set_userdata('name', $userdata->nama);
					$this->session->set_userdata('no_hp', $userdata->no_hp);
					$this->session->set_userdata('idlevel', $userdata->id_level);
					// $this->session->set_userdata('is_login', TRUE);
	
					// redirect ke admin
					redirect("home?status=success&user=$userdata->email");
				}
				else
				{
					// jika password salah
					$this->session->set_flashdata('failed','Password salah !');
					redirect(base_url('login'));
				}
	
			}
			else
			{
				// jika username salah
				$this->session->set_flashdata('failed','Username tidak Tersedia !');
				redirect(base_url('login'));
			}


			// $email = $this->input->post('email');
			// $password = $this->input->post('password');

			// if($user = $this->user_model->getUser($email))
			// {
			// 	if($password == $user->password)
			// 	{
			// 		$this->session->set_userdata('user',$user);
			// 		redirect('home');
			// 	}
			// 	else
			// 	{
			// 		$this->load->view('auth/login_form', array('message'=>'Invalid Login Credentials!'));
			// 	}
			// }
			// else
			// {
			// 	$this->load->view('auth/login_form', array('message'=>'No account exists!'));
			// }
		}

		public function register()
		{
			$nama = $this->input->post('nama', TRUE);
			$jkel = $this->input->post('jeniskelamin', TRUE);
			$phone = $this->input->post('phone', TRUE);
			$date = $this->input->post('date', TRUE);
			$email = $this->input->post('email', TRUE);
			$pass_raw = $this->input->post('password', TRUE);
			$pass = password_hash($pass_raw, PASSWORD_DEFAULT);
			
			// echo $nama;
			// echo "<br>";
			// echo $jkel;
			// echo "<br>";
			// echo $phone;
			// echo "<br>";
			// echo $date;
			// echo "<br>";
			// echo $email;
			// echo "<br>";
			// echo $pass_raw;
			// echo "<br>";
			// echo $pass;
			// echo "<br>";
			// exit;

			// select * from login where user = ?
			$query  = $this->db->get_where('user',['email' => $email]);
			
			// cek username 
			if($query->num_rows() > 0)
			{
				// jika username salah
				$this->session->set_flashdata('failed_account_exist','Username / Email sudah terdaftar Silahkan Login.');
				redirect(base_url('login'));
			}
			else
			{
				// kita ambil isi dari record
					
					$userdata = $query->row();
					// membuat session

					$data['nama'] = $nama;
					$data['jk'] = $jkel;
					$data['no_hp'] = $phone;
					$data['tgl_lahir'] = $date;
					$data['email'] = $email;
					$data['username'] = $email;
					$data['password'] = $pass;
					$data['kode_unik'] = str_replace(" ", "", $nama) . strstr($email, '@', true);
					$data['id_level'] = '5';

					$this->user_model->createUser($data);

					// $this->session->set_userdata('user', $data['email']);
					// $this->session->set_userdata('name', $data['nama']);
					// $this->session->set_userdata('idlevel', $data['id_level']);

					// echo "Rows = 0";
					// exit;
					// redirect ke admin
					$this->session->set_flashdata('success','Akun anda berhasil didaftarkan!, Silahkan Login.');
					redirect(base_url('login'));
			}


			// $email = $this->input->post('email');
			// $password = $this->input->post('password');

			// if($user = $this->user_model->getUser($email))
			// {
			// 	if($password == $user->password)
			// 	{
			// 		$this->session->set_userdata('user',$user);
			// 		redirect('home');
			// 	}
			// 	else
			// 	{
			// 		$this->load->view('auth/login_form', array('message'=>'Invalid Login Credentials!'));
			// 	}
			// }
			// else
			// {
			// 	$this->load->view('auth/login_form', array('message'=>'No account exists!'));
			// }
		}

		public function dashboard()
		{
			if($this->session->has_userdata('user'))
			{
				//$user = $this->session->userdata('user');
				//$this->load->view('home', array('user' => $user));
				redirect('home');
			}
			else
			{
				redirect('login');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('home');
		}

		public function google_login()
		{
			$client = new GoogleClient();
			$client->setApplicationName('Sikozion RSUD Jombang');
			$client->setClientId('1005486759785-ufhn75ckeifnqcgs3av44gktcgrh27du.apps.googleusercontent.com');
			$client->setClientSecret('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');
			$client->setRedirectUri('https://ba63-104-28-215-133.ap.ngrok.io/Gizi_online/auth/google_login');
			$client->addScope(
				[
					'https://www.googleapis.com/auth/userinfo.email',
					'https://www.googleapis.com/auth/userinfo.profile'
					//'https://www.googleapis.com/auth/user.gender.read'
					//'https://www.googleapis.com/auth/user.birthday.read',
					//'https://www.googleapis.com/auth/user.addresses.read',
					//'https://www.googleapis.com/auth/user.phonenumbers.read'
				]);


			if($code = $this->input->get('code'))
			{
				$token = $client->fetchAccessTokenWithAuthCode($code);
				$client->setAccessToken($token);
				$oauth = new Oauth2($client);
				
				$user_info = $oauth->userinfo->get();
				$data['nama'] = $user_info->name;
				$data['username'] = $user_info->email;
				$data['email'] = $user_info->email;
				$data['kode_unik'] = str_replace(" ", "", $user_info->name) . $user_info->email;
				$data['id_level'] = 5;

				//$data['email'] = $user_info->email;
				//echo $user_info->name . " | " . $user_info->gender;
				//var_dump($data);
				//exit;

				//$data['image'] = $user_info->picture;
				
				if($user = $this->user_model->getUser($user_info->email))
				{
					$this->session->set_userdata('id', $user->id_user);
					$this->session->set_userdata('user', $data['email']);
					$this->session->set_userdata('name', $data['nama']);
					$this->session->set_userdata('idlevel', $data['id_level']);
				
				}
				else
				{
					$this->user_model->createUser($data);
					
					//$this->load->view('register', $data);	
				}
				redirect("home?status=success&user=$user_info->email");
			}
			else
			{
				$url = $client->createAuthUrl();
				header('Location:'.filter_var($url, FILTER_SANITIZE_URL));
			}
		}

		public function registration_success($data)
		{
			$this->user_model->createUser($data);

			if($user = $this->user_model->getUser($this->user_info->email))
			{
				$this->session->set_userdata('user', $user);
			}

			$data['katering'] = $this->modelkatering->printData()->result();
			$data['hargakatering'] = $this->modelkatering->printHarga()->result();
	
			$this->load->view('admin/header/header.php');
			$this->load->view('admin/kateringAdmin/katering.php', $data);
			$this->load->view('admin/footer/footer.php');
		}

		public function daftar()
		{
			if($this->session->has_userdata('user'))
			{
				$this->load->view('home.php');
			}
			else
			{
				$this->load->view('auth/register.php');
			}
		}
	}
