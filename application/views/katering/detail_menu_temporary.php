<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Belajar Midtrans Dasar</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
		integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- First include jquery js -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"
		integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

	<!-- 1. Ganti sesuai client key dashboard midtrans Anda -->
	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
		data-client-key="SB-Mid-client-Q6Gz6NV2VIcicDWO"></script>
	<!-- 2. Setelah itu, refresh ulang halaman dan coba melakukan transaksi dengan mengisi form yang ada, setelah itu tekan tombol Proses Checkout -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div class="container">
		<div class="overlay-img">
			<!-- navbar-start -->

			<!-- navbar-end -->
			<section>
				<link rel="stylesheet" href="http://localhost/Gizi_online/assets/css/banner-cos.css">
				<div class="banner_cos">
					<div class="jarak"></div>
					<h2 class="text-white text-center">Katering Diet</h2>
					<div class="banner banner_box_cos">
						<div class="jarak"></div>
						<div class="container">
							<div class="row">

								<div class="container">
									<div class="row">
										<?php
  										if(!empty($detail))
  										{
    									 	foreach($detail as $data)
    										{
										?>
										<div class="col-4">
											<ul class="img-list4">
												<li> <img class="img-fluid" src="<?php echo $data->foto ?>"
														alt="gambar alam" style="border-radius: 15px;"></li>
											</ul>
										</div>
										<div class="col-2">
											<div style="color: black">
												<h5>Nama Menu : </h5>
												<h5>Harga Menu : </h5>
											</div>
										</div>
										<div class="col-2">
											<ul class="img-list5">
												<li>
													<div style="color: black">
														<h5 name="inputBookName2" id="inputBookName2" style="margin-left: 0px;">
															<?php echo $data->nama_menu ?></h5>
														<h5 name="inputPrice2" id="inputPrice2" style="margin-left: 0px;">
															<?php echo $data->harga ?>
														</h5>
													</div>
												</li>
											</ul>
										</div>
										<?php
  											}		
										}		
										?>
									</div>
									<div class="col-2">
										<a href="#" style="background-color: orange;"
											class="navbar-btn btn-light text-light">Beli</a></div>
								</div>



							</div>
						</div>
						<br>
					</div>
					<br>
				</div>

				<div class="w-100 generic-banner-con text-xl-left text-lg-left text-center">
					<div class="container-fluid">
						<div class="generic-banner-content text-white text-center position-relative w-100" s>
							<div class="wrapper">
								<div class="Schedule-box-title" style="border-radius: 10px; background-color: #FF8A00;">
									<br></br>
									<h2 class="text-white">Katering Diet</h2>
								</div>
								<div class="Schedule-box text-center">

									<div class="Schedule-box-item position-relative w-100 float-center"
										style="right: 10px;">

										<div class="container">

											<form id="payment-form" method="post"
												action="<?=base_url()?>welcome/finish">
												<input type="hidden" name="result_type" id="result-type" value="">
										</div>
										<input type="hidden" name="result_data" id="result-data" value="">
									</div>

									<div class="form-group">
										<label for="inputID">ID</label>
										<input type="text" class="form-control" id="inputID"
											value="<?='BOOK'.rand(999,111)?>">
									</div>
									<div class="form-group">
										<label for="inputPrices">Harga</label>
										<input type="text" class="form-control" id="inputPrice" value="270000">
									</div>
									<div class="form-group">
										<label for="inputQty">Kuantiti</label>
										<input type="number" class="form-control" id="inputQty" value="3">
									</div>
									<div class="form-group">
										<label for="inputBookName">Deskripsi</label>
										<input type="text" class="form-control" id="inputBookName"
											value="Motivasi hidup nikmat dengan makan bakso mercon">
									</div>
									<div class="form-group">
										<label for="inputFirstName">Nama Depan (Cust)</label>
										<input type="text" class="form-control" id="inputFirstName"
											placeholder="Nama Depan" value="Customer">
									</div>
									<div class="form-group">
										<label for="inputLastName">Nama Belakang (Cust)</label>
										<input type="text" class="form-control" id="inputLastName"
											placeholder="Nama Belakang" value="Ganteng">
									</div>
									<div class="form-group">
										<label for="inputAddress">Alamat (Cust)</label>
										<input type="text" class="form-control" id="inputAddress" placeholder="Alamat"
											value="Indonesia">
									</div>
									<div class="form-group">
										<label for="inputCity">Kota (Cust)</label>
										<input type="text" class="form-control" id="inputCity" placeholder="Kota"
											value="Nusantara">
									</div>
									<div class="form-group">
										<label for="inputPostalCode">Kode Pos (Cust)</label>
										<input type="number" class="form-control" id="inputPostalCode"
											placeholder="Kode Pos" value="123456">
									</div>
									<div class="form-group">
										<label for="inputPhone">Telepon (Cust)</label>
										<input type="number" class="form-control" id="inputPhone" placeholder="Telepon"
											value="109940">
									</div>
									<div class="form-group">
										<label for="inputEmail">Email (Cust)</label>
										<input type="email" class="form-control" id="inputEmail" placeholder="Email"
											value="cobain@gmail.com">
									</div>
									<button id="pay-button" class="btn btn-primary">Proses Checkout</button>
									</form>

								</div>
								<p class="text-muted mb-0">Perhitungan Gizi menggunakan Rumus BMI ( Body Mass Index )
								</p>
							</div>

						</div>
					</div>
			</section>
		</div>
	</div>

	<script type="text/javascript">
		// Clue alur
		$('#pay-button').click(function (event) {
			event.preventDefault();
			$(this).attr("disabled", "disabled");
			var id_val 		   = $("#inputID").val();
			var price_val	   = $("#inputPrice2").text();
			//var price_val = $("#inputPrice").val();
			var qty_val 	   = $("#inputQty").val();
			var bookname_val   = $("#inputBookName2").text();
			//var bookname_val   = $("#inputBookName").val();
			var firstname_val  = $("#inputFirstName").val();
			var lastname_val   = $("#inputLastName").val();
			var address_val    = $("#inputAddress").val();
			var city_val       = $("#inputCity").val();
			var postalcode_val = $("#inputPostalCode").val();
			var phone_val 	   = $("#inputPhone").val();
			var email_val      = $("#inputEmail").val();

			$.ajax({
				url: '<?=site_url()?>welcome/token_',
				cache: false,
				data: {
					id_param: id_val,
					price_param: price_val,
					qty_param: qty_val,
					bookname_param: bookname_val,
					firstname_param: firstname_val,
					lastname_param: lastname_val,
					address_param: address_val,
					city_param: city_val,
					postalcode_param: postalcode_val,
					phone_param: phone_val,
					email_param: email_val
				},
				success: function (data) {
					//location = data;

					console.log('token = ' + data);

					var resultType = document.getElementById('result-type');
					var resultData = document.getElementById('result-data');

					function changeResult(type, data) {
						$("#result-type").val(type);
						$("#result-data").val(JSON.stringify(data));
						//resultType.innerHTML = type;
						//resultData.innerHTML = JSON.stringify(data);
					}

					snap.pay(data, {

						onSuccess: function (result) {
							changeResult('success', result);
							console.log(result.status_message);
							console.log(result);
							$("#payment-form").submit();
						},
						onPending: function (result) {
							changeResult('pending', result);
							console.log(result.status_message);
							$("#payment-form").submit();
						},
						onError: function (result) {
							changeResult('error', result);
							console.log(result.status_message);
							$("#payment-form").submit();
						}
					});
				},
				error: function () {
					alert('Cek kembali Server Key / Client Key Anda, sepertinya ada yang kurang sesuai!');
				}
			});
		});
	</script>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
		<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
	</div>
</body>

</html>