<head>
	<meta charset="utf-8">
	<title>Belajar Midtrans Dasar</title>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
		integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- First include jquery js -->
	<script src="code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>

	<script src="code.jquery.com/jquery-1.12.4.min.js"
		integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

	<!-- 1. Ganti sesuai client key dashboard midtrans Anda -->
	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
		data-client-key="SB-Mid-client-Q6Gz6NV2VIcicDWO"></script>
	<!-- 2. Setelah itu, refresh ulang halaman dan coba melakukan transaksi dengan mengisi form yang ada, setelah itu tekan tombol Proses Checkout -->
	<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<section>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/banner-cos.css">
	<div class="banner_cos">
		<div class="jarak"></div>
		<h2 class="text-white text-center">Katering Diet</h2>
		<div class="banner banner_box_cos">
			<div class="jarak"></div>
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
							<li> <img class="img-fluid" src="<?php echo $data->foto ?>" alt="gambar alam"
									style="border-radius: 15px;"></li>
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
									<h5 name="inputBookName2" id="inputBookName2" style="margin-left: 0px;"><?php echo $data->nama_menu ?></h5>
									<h5 name="inputPrice2" id="inputPrice2" style="margin-left: 0px;"><?php echo $data->harga ?></h5>
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
					<a href="" id="pay-button" style="background-color: orange;" class="navbar-btn btn-light text-light">Beli</a></div>
			</div>
			<br>
         <form id="payment-form" method="post" action="<?=site_url()?>welcome/finish">

				<input type="hidden" name="result_type" id="result-type" value="">
		</div>
		<input type="hidden" name="result_data" id="result-data" value="">
	</div>

	<div class="form-group">
		<label for="inputID">ID</label>
		<input type="text" class="form-control" id="inputID" value="<?='BOOK'.rand(999,111)?>">
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
		<input type="text" class="form-control" id="inputFirstName" placeholder="Nama Depan" value="Customer">
	</div>
	<div class="form-group">
		<label for="inputLastName">Nama Belakang (Cust)</label>
		<input type="text" class="form-control" id="inputLastName" placeholder="Nama Belakang" value="Ganteng">
	</div>
	<div class="form-group">
		<label for="inputAddress">Alamat (Cust)</label>
		<input type="text" class="form-control" id="inputAddress" placeholder="Alamat" value="Indonesia">
	</div>
	<div class="form-group">
		<label for="inputCity">Kota (Cust)</label>
		<input type="text" class="form-control" id="inputCity" placeholder="Kota" value="Nusantara">
	</div>
	<div class="form-group">
		<label for="inputPostalCode">Kode Pos (Cust)</label>
		<input type="number" class="form-control" id="inputPostalCode" placeholder="Kode Pos" value="123456">
	</div>
	<div class="form-group">
		<label for="inputPhone">Telepon (Cust)</label>
		<input type="number" class="form-control" id="inputPhone" placeholder="Telepon" value="109940">
	</div>
	<div class="form-group">
		<label for="inputEmail">Email (Cust)</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="Email" value="cobain@gmail.com">
	</div>
	<button id="pay-button" class="btn btn-primary">Proses Checkout</button>
	</form>
	<script type="text/javascript">
		// Clue alur
		$('#pay-button').click(function (event) {
			event.preventDefault();
			$(this).attr("disabled", "disabled");
			var id_val = $("#inputID").val();
			var price_val = $("#inputPrice").val();
			var qty_val = $("#inputQty").val();
			var bookname_val = $("#inputBookName").val();
			var firstname_val = $("#inputFirstName").val();
			var lastname_val = $("#inputLastName").val();
			var address_val = $("#inputAddress").val();
			var city_val = $("#inputCity").val();
			var postalcode_val = $("#inputPostalCode").val();
			var phone_val = $("#inputPhone").val();
			var email_val = $("#inputEmail").val();

			$.ajax({
				url: 'welcome/token_',
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
		<br>
	</div>

</section>
