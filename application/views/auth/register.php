<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/animate.css">
	<!-- <link rel="stylesheet" href="<?php base_url() ?>assets/bootstarp/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/super-classes.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/mobile.css">
	<link rel="stylesheet" href="<?php base_url() ?>assets/css/banner-cos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<title>Medtexh</title>
</head>

<style>
	body {
		background-image: url("assets/image/Latar_Register.png");
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
		width: 90%;
		background-color: #FF8A00;
		color: white;
		font-style: white;
		font-size: large;
		font-weight: 800px;
	}

	form .input:hover {
  		color: darkgrey;
 		background-color: #e8e8e8;
  		transition: 0.3s;
	}

	form .inputpassword:hover {
  		color: darkgrey;
  		transition: 0.3s;
	}

	form .inputselect:hover {
  		color: darkgrey;
		background-color: #e8e8e8;
  		transition: 0.3s;
	}	

	form .input, .inputpassword {
	  font-family: "Roboto", sans-serif;
	  outline: 0;
	  color: grey;
	  background: #f2f2f2;
	  width: 100%;
	  border: 0;
	  margin: 0 0 5px;
	  padding: 15px;
	  box-sizing: border-box;
	  border-radius: 3px;
	  transition: 0.3s;
	}

	form .inputselect {
	  -webkit-appearance: none;
  	  -moz-appearance: none;
	  content: "▼";
	  font-family: "Roboto", sans-serif;
	  outline: 0;
	  color: grey;
	  background: #f2f2f2;
	  width: 100%;
	  border: 0;
	  margin: 0 0 5px;
	  padding: 15px;
	  box-sizing: border-box;
	  border-radius: 3px;
	  transition: 0.3s;

	  background-image:
    	linear-gradient(45deg, transparent 50%, grey 50%),
    	linear-gradient(135deg, grey 50%, transparent 50%);
    	
  	  background-position:
  	    calc(100% - 20px) calc(1em + 8px),
  	    calc(100% - 15px) calc(1em + 8px),
  	    100% 0;
  	  background-size:
  	    5px 5px,
  	    5px 5px,
  	    2.5em 2.5em;
  	  background-repeat: no-repeat;
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
				<div class="justify-content-center">
					<!-- <div class="jarak"></div> -->
					<!-- <br> -->
					<div class="banner banner_box_cos" style="border-radius: 5px 5px 5px 5px">
						<div class="jarak"></div>
						<center>
							<img src="<?php base_url() ?>assets/image/logo-sikozionb.png" alt="logo-img" class="img-fluid" width="200px">
						</center>
						<?php if(!empty($this->session->flashdata('failed'))){?>
                    		<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            	<span aria-hidden="true">&times;</span>
	                            <span class="sr-only">Close</span>
                        	</button>
                        	<?= $this->session->flashdata('failed');?>
                    		</div>
                    	<?php }?>
						<form action="<?php base_url() ?>auth/register" method="post">
							<div class="card-body">
								<div class="input-group mb-3">
									<input type="text" class="input" id="nama" name="nama" required placeholder="Nama"
										aria-describedby="basic-addon3">
								</div>
								<div class="input-group mb-3">
								<select class="inputselect" name="jeniskelamin" id="jeniskelamin">
									<option value="" disabled selected hidden>Jenis Kelamin</option>
                					<option value="Laki-Laki">Laki-Laki</option>
                					<option value="Perempuan">Perempuan</option>
								</select>
								</div>
								<div class="input-group mb-3">
									<input type="text" class="input" id="phone" name="phone" maxlength="13" onInput="this.value = phoneFormat(this.value)" placeholder="Nomor Telepon">
								</div>
								<div class="input-group mb-3">
									<input type="date" class="input" id="date" name="date" placeholder="Tanggal Lahir" required>
								</div>
								<div class="input-group mb-3">
									<input type="text" class="input" id="email" name="email" required placeholder="Email"
										aria-describedby="basic-addon3" required>
								</div>
								<div class="form-group">
									<div class="input-group" id="show_hide_password">
										<input class="inputpassword" type="password" id="password" name="password" placeholder="Password" style="border-radius: 3px 0px 0px 3px;">
										<center>
										<div class="inputpassword" style="width: 50px; border-radius: 0px 3px 3px 0px;">
											<a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="filter: grayscale(1) invert(1);"></i></a>
										</div>
										</center>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group" id="show_hide_confirm_password">
										<input class="inputpassword" type="password" placeholder="Konfirmasi Password" style="border-radius: 3px 0px 0px 3px;">
										<div class="inputpassword" style="width: 50px; border-radius: 0px 3px 3px 0px;">
											<a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="filter: grayscale(1) invert(1);"></i></a>
										</div>
									</div>
								</div>

								<div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
									<button type="submit" class="btn btn-login hover rounded-pill" name="login">Daftar</button>
								</div>

								<div class="text-center" style="color: black;">
									Sudah punya akun? <a href="login">Masuk</a>
								</div>

								<br>

								<div class="row pb-4 col-12 mx-auto justify-content-center">
									<a href="<?=base_url('auth/google_login')?>" class="" href="#" style="">
										<img src="https://img.icons8.com/color/16/000000/google-logo.png">
										<!-- <img src="<?php echo base_url(); ?>assets/image/google.svg" alt="logo-img"> -->
										Daftar dengan Google
									</a>
								</div>

								<div class="text-center">
									<a href="daftar.php">Lupa Password ?</a>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="jarak"></div>
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

				$("#show_hide_confirm_password a").on('click', function(event) {
			        event.preventDefault();
			        if($('#show_hide_confirm_password input').attr("type") == "text"){
			            $('#show_hide_confirm_password input').attr('type', 'password');
			            $('#show_hide_confirm_password i').addClass( "fa-eye-slash" );
			            $('#show_hide_confirm_password i').removeClass( "fa-eye" );
			        }else if($('#show_hide_confirm_password input').attr("type") == "password"){
			            $('#show_hide_confirm_password input').attr('type', 'text');
			            $('#show_hide_confirm_password i').removeClass( "fa-eye-slash" );
			            $('#show_hide_confirm_password i').addClass( "fa-eye" );
			        }
			    });
			});

			function phoneFormat(input) 
			{//returns (###) ###-####
    			input = input.replace(/\D/g,'');
    			var size = input.length;
    			// if (size>0) {input="("+input}
    			// if (size>2) {input=input.slice(0,3)+") "+input.slice(3,15)}
    			// if (size>6) {input=input.slice(0,8)+"-" +input.slice(8)}
    			// if (size>9) {input=input.slice(0,13)+"-" +input.slice(13)}
    			return input;
			}
		</script>
</body>

</html>


<!-- <a href="<?=base_url('login/logout')?>">Logout</a> -->
