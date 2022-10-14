<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstarp/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/super-classes.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<title>Medtexh</title>
	<style>
		.navbar-login
		{
			padding: 12px 28px 11px 28px;
			background: var(--accent-color);
			font-size: 18px;
			font-weight: 600;
			border-radius: 30px;
			box-shadow: 0px 20px 30px 0px rgb(0 0 0 / 20%);
		    display: inline-block;
			transition-duration: .3s;
		    transition-property: transform;
		    transition-timing-function: ease-out;
		}

		.navbar-login:hover
		{
			background: var(--secondary--color);
			transform: translateY(-8px);
		}

		@media screen and (min-width: 700px) 
		{
			.navbar-login
			{
				/* */
			}
		}
	</style>
</head>

<body>
	<?php
	if (!empty($_GET['status']) && !empty($_GET['user']))
	{
		$status = $_GET['status'];
		$user = $_GET['user'];
	?>
	<script>
		Swal.fire({
			title: 'Logged in as <?php echo $user; ?>',
			// showDenyButton: true,
			// showCancelButton: true,
			confirmButtonText: 'OK',
			//denyButtonText: `Don't save`,
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				window.location.href = "<?php echo base_url(); ?>home";
			}
		})
		// Swal.fire
		// (
		// 	'Logged in as',
		// 	'',
		// 	'<?php echo $status; ?>'
		// )

	</script>

	<?php
	}
	?>
	<!-- top-bar-section-->
	<div class="w-100 float-left top-bar-main-con text-white text-xl-left text-lg-left text-md-left text-center"><br>
	</div>
	<!-- top-bar-section-->
	<!-- header-and-banner-section -->
	<div class="w-100 float-left header-and-banner-con banner-overlay-img">
		<div class="container">
			<div class="overlay-img">
				<!-- navbar-start -->
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="<?php echo base_url(); ?>home">
						<img src="<?php echo base_url(); ?>assets/image/logo-sikozionb.png" alt="logo-img" class="img-fluid" width="200px">
					</a>
					<button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto mr-auto">
							<li class="nav-item active ">
								<a class="nav-link p-0 text-white" href="<?php echo base_url(); ?>home">Beranda<span
										class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-0 text-white" href="about.html">Tentang</a>
							</li>
							<li class="nav-item dropdown pr-lg-0">
								<a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown"
									role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Produk
								</a>
								<div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo base_url(); ?>bmi">Kalkulator Gizi</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>tanyaahli">Tanya Ahli Gizi</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>artikel">Artikel Gizi</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>konversi">Konversi Nilai Gizi</a>
								</div>
							</li>
							<li class="nav-item dropdown pr-lg-0">
								<a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown"
									role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Layanan
								</a>
								<div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo base_url(); ?>katering">Katering</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>konsultasi">Konsultasi</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>programdiet">Program Diet</a>
								</div>
							</li>
							<li class="nav-item pr-0">
								<a class="nav-link p-0 text-white" href="contact.html"> Kontak </a>
							</li>
						</ul>
						<?php
                     if($this->session->has_userdata('user'))
                     {
                  ?>
						<li class="nav-item dropdown pr-lg-0" style="list-style-type: none;">
							<!-- <a href="#" style="background-color: white;" class="navbar-btn btn-light text-dark"> -->
							<!-- dropdown-toggle -->
							<a class="navbar-login btn-light text-dark" href="#" id="navbarDropdown2" 
								role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
								style="background-color: white;">
								<img src="<?php echo base_url(); ?>assets/image/icon-pasien.svg" alt="logo-img"
									width="30px">
								<!-- Akun -->
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="navbarDropdown2">
								<h4 class="dropdown-item"><?php echo $this->session->userdata('id') . " | " . $this->session->userdata('name') . " | " . $this->session->userdata('idlevel'); ?></h4>
								<a class="dropdown-item ai-icon">
                                        <strong><hr></strong>
                                </a>
								<?php 
								if($this->session->userdata('idlevel') == 1 || $this->session->userdata('idlevel') == 2 || $this->session->userdata('idlevel') == 3 || $this->session->userdata('idlevel') == 4)
								{
								?>
									<a class="dropdown-item" href="<?php echo base_url(); ?>admin">Admin Panel</a>
								<?php 
								}
								?>
								<!-- <a class="dropdown-item" href="faq.html">Pengaturan</a> -->
								<?php if ($this->session->userdata('idlevel') == 5) { ?>
									<a class="dropdown-item" href="<?php echo base_url(); ?>riwayattransaksi/<?php echo $this->session->userdata('id'); ?>">Riwayat Transaksi</a>
								<?php } ?>
								<a class="dropdown-item" href="<?php echo base_url(); ?>auth/logout">Logout</a>
							</div>
						</li>
						<?php
                     }
                     else
                     {
                  ?>
				  		<li class="nav-item pr-0" style="list-style-type: none;">
							<a href="<?php echo base_url() ?>login" style="background-color: white;" class="navbar-login btn-light text-dark">
								<i class="fas fa-user"></i>
								Login
							</a>
						</li>
						
						<!-- <li class="nav-item pr-0" style="list-style-type: none;">
							<a class="nav-link text-white " href="contact.html"> Kontak </a>
					 	</li> -->
						<?php
                     }
                  ?>
					</div>
				</nav>
				<!-- navbar-end -->
