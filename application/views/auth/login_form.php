<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/animate.css">
	<!-- <link rel="stylesheet" href="<?php base_url() ?>assets/bootstarp/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/super-classes.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/mobile.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/banner-cos.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<title>Medtexh</title>
</head>

<style>
	body {
		background-image: url("assets/image/Latar_Login.png");
		height: 100vh;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: right;
		/* overflow: hidden; */

		/* position: absolute; */
		width: 100%;

		background-size: cover;
		background-repeat: no-repeat;
		/* background-size: 100%; */
		/* position: relative; */
		z-index: 1;
	}

	/* img {
		size: 2%;
		margin-left: -30px;
		cursor: pointer;
	} */

	.card-header {
		background-color: #FF8A00;
	}

	.btn-login {
		background-color: #FF8A00;
		color: white;
		font-style: white;
		font-size: large;
		font-weight: 800px;
	}

	.hover:hover
	{
		background: var(--secondary--color);
		transform: translateY(-5px);
	}

</style>

<body>
	<div class="container pt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="banner_cos justify-content-center" style="border-radius: 5px 5px 5px 5px">
					<!-- <div class="jarak"></div> -->
					<center>
						<img src="<?php base_url() ?>assets/image/logo-sikozionb.png" alt="logo-img" class="img-fluid" width="200px">
					</center>
					<!-- <br> -->
					<div class="banner banner_box_cos">
						<div class="jarak"></div>
						<?php 
							if(!empty($this->session->flashdata('success')))
							{
						?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            	<span aria-hidden="true">&times;</span>
	                            <span class="sr-only">Close</span>
                        	</button>
							<?= $this->session->flashdata('success');?>
							</div>
						<?php
							}
						?>
						
						<?php
							if(!empty($this->session->flashdata('failed')))
							{
						?>
                    		<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            	<span aria-hidden="true">&times;</span>
	                            <span class="sr-only">Close</span>
                        	</button>
                        	<?= $this->session->flashdata('failed');?>
                    		</div>
                    	<?php 
							}
						?>

						<?php
							if(!empty($this->session->flashdata('failed_account_exist')))
							{
						?>
                    		<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            	<span aria-hidden="true">&times;</span>
	                            <span class="sr-only">Close</span>
                        	</button>
                        	<?= $this->session->flashdata('failed_account_exist');?>
                    		</div>
                    	<?php 
							}
						?>
						<form action="<?php base_url() ?>auth/loginProcess" method="post">
							<div class="card-body">
								<div class="input-group mb-3">
									<input type="text" class="form-control" id="email" name="email" required placeholder="Email"
										aria-describedby="basic-addon3">
								</div>
								<div class="form-group">
									<div class="input-group" id="show_hide_password">
										<input class="form-control" type="password" id="password" name="password" placeholder="Password">
										<div class="input-group-addon">
											<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>

								<div class="row mb-3 pt-4 col-6 mx-auto justify-content-center">
									<button type="submit" class="btn btn-login hover rounded-pill" name="login">Login</button>
								</div>

								<div class="text-center" style="color: black;">
									Belum punya akun? <a href="daftar">Daftar</a>
								</div>

								<br>

								<div class="row pb-4 col-12 mx-auto justify-content-center">
									<a href="<?=base_url('auth/google_login')?>" class="" href="#" style="">
										<img src="https://img.icons8.com/color/16/000000/google-logo.png">
										<!-- <img src="<?php echo base_url(); ?>assets/image/google.svg" alt="logo-img"> -->
										Login dengan Google
									</a>
								</div>

								<div class="text-center">
									<a href="forgetpassword">Lupa Password ?</a>
								</div>

							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/custom-script.js"> </script>
		<script>
			$(document).ready(function() {
			    $("#show_hide_password a").on('click', function(event) {
			        event.preventDefault();
			        if($('#show_hide_password input').attr("type") == "text"){
			            $('#show_hide_password input').attr('type', 'password');
			            $('#show_hide_password i').addClass( "fa-eye-slash" );
			            $('#show_hide_password i').removeClass( "fa-eye" );
			        }else if($('#show_hide_password input').attr("type") == "password"){
			            $('#show_hide_password input').attr('type', 'text');
			            $('#show_hide_password i').removeClass( "fa-eye-slash" );
			            $('#show_hide_password i').addClass( "fa-eye" );
			        }
			    });
			});
		</script>
</body>

</html>


<!-- <a href="<?=base_url('login/logout')?>">Logout</a> -->
