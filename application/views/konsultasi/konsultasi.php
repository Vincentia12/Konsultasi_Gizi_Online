<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Belajar Midtrans Dasar</title>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
		integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

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

	<style>
	body {
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

	form .input {
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

	.hover:hover
	{
		background: var(--secondary--color);
		transform: translateY(-5px);
	}
</style>
</head>

<body>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/banner-cos.css">
	<!-- <div class="banner_cos"> -->
		<!-- <center>
            <h1 class="text-dark">Konsultasi</h1>
        </center> -->
		<center>
            <h2 class="text-light">Jadwal Konsultasi</h2>
        </center>
            <section>
                <div class="container">
                <!-- <div class="jarak"></div> -->
                    <div class="row pt-5">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="tableKonversi" style="color: grey;">
                                            <thead>
                                                <tr class="table-success">
                                                    <th>
                                                        <center>Jenis Layanan</center>
                                                    </th>
                                                    <th>
                                                        <center>Hari</center>
                                                    </th>
                                                    <th>
                                                        <center>Pukul</center>
                                                    </th>
                                                    <th>
                                                        <center>Kuota</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($konsultasiData as $data) : ?>
                                                    <tr>
                                                        <td>
                                                            <center><?php echo $data->jenis_layanan ?></center>
                                                        </td>
                                                        <td>
                                                            <center><?php echo $data->hari ?></center>
                                                        </td>
                                                        <td>
                                                            <center><?php echo $data->jam_mulai ?> S/D <?php echo $data->jam_selesai ?></center>
                                                        </td>
                                                        <td>
                                                            <center><?php echo $data->kuota ?></center>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<div class="jarak"></div>
			
			<div class="banner_cos">
				<div class="jarak"></div>
				<h2 class="text-white text-center"></h2>
				<div class="banner banner_box_cos">
					<div class="jarak"></div>
					<div class="container">
						<center>
            				<h2 class="text-dark">Pilih Jadwal Konsultasi</h2>
							<div class="col-md-6">
							<form action="<?php base_url() ?>konsultasi/form" method="post">
								<div class="card-body">
									<div class="input-group mb-3">
										<input type="datetime-local" class="input" id="tanggal_konsultasi" name="tanggal_konsultasi" placeholder="Tanggal Lahir" required>
									</div>
								</div>
								<div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
									<button type="submit" class="btn btn-login hover rounded-pill" name="login">Selanjutnya</button>
								</div>
							</form>
							</div>
        				</center>
						<div class="jarak"></div>
					</div>
				</div>
			</div>

            </div>
			
            </div>
		</div>

	
	<br>

			<form id="payment-form" method="post" action="<?php echo base_url(); ?>welcome/finish">

				<input type="hidden" name="result_type" id="result-type" value="">
		<!-- </div> -->
		<input type="hidden" name="result_data" id="result-data" value="">
	<!-- </div> -->

	<div class="form-group">
		<label for="inputID" hidden>ID</label>
		<input type="text" class="form-control" id="inputID" value="<?='BOOK'.rand(999,111)?>" hidden>
	</div>
	<div class="form-group">
		<label for="inputPrices" hidden>Harga</label>
		<input type="text" class="form-control" id="inputPrice" value="270000" hidden>
	</div>
	<div class="form-group">
		<label for="inputQty" hidden>Kuantiti</label>
		<input type="number" class="form-control" id="inputQty" value="3" hidden>
	</div>
	<div class="form-group">
		<label for="inputBookName" hidden>Deskripsi</label>
		<input type="text" class="form-control" id="inputBookName"
			value="Motivasi hidup nikmat dengan makan bakso mercon" hidden>
	</div>
	<div class="form-group">
		<label for="inputFirstName" hidden>Nama Depan (Cust)</label>
		<input type="text" class="form-control" id="inputFirstName" placeholder="Nama Depan" value="Customer" hidden>
	</div>
	<div class="form-group">
		<label for="inputLastName" hidden>Nama Belakang (Cust)</label>
		<input type="text" class="form-control" id="inputLastName" placeholder="Nama Belakang" value="Ganteng" hidden>
	</div>
	<div class="form-group">
		<label for="inputAddress" hidden>Alamat (Cust)</label>
		<input type="text" class="form-control" id="inputAddress" placeholder="Alamat" value="Indonesia" hidden>
	</div>
	<div class="form-group">
		<label for="inputCity" hidden>Kota (Cust)</label>
		<input type="text" class="form-control" id="inputCity" placeholder="Kota" value="Nusantara" hidden>
	</div>
	<div class="form-group">
		<label for="inputPostalCode" hidden>Kode Pos (Cust)</label>
		<input type="number" class="form-control" id="inputPostalCode" placeholder="Kode Pos" value="123456" hidden>
	</div>
	<div class="form-group">
		<label for="inputPhone" hidden>Telepon (Cust)</label>
		<input type="number" class="form-control" id="inputPhone" placeholder="Telepon" value="109940" hidden>
	</div>
	<div class="form-group">
		<label for="inputEmail" hidden>Email (Cust)</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="Email" value="cobain@gmail.com" hidden>
	</div>
	<!-- <button id="pay-button" class="btn btn-primary">Proses Checkout</button> -->
	</form>
	<script type="text/javascript">
		// Clue alur
		$('#pay-button').click(function (event) {
			event.preventDefault();
			$(this).attr("disabled", "disabled");
			var id_val = $("#inputID").val();
			//var price_val = $("#inputPrice").val();
			var price_val = $("#inputPrice2").text();
			var qty_val = $("#inputQty").val();
			//var qty_val = $("#inputQty2").val();
			//var bookname_val = $("#inputBookName").val();
			var bookname_val = $("#inputBookName2").text();
			var firstname_val = $("#inputFirstName").val();
			var lastname_val = $("#inputLastName").val();
			var address_val = $("#inputAddress").val();
			var city_val = $("#inputCity").val();
			var postalcode_val = $("#inputPostalCode").val();
			var phone_val = $("#inputPhone").val();
			var email_val = $("#inputEmail").val();

			$.ajax({
				url: '<?php echo base_url(); ?>welcome/token_',
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
	</div>
</body>

</html>