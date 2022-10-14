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

	
</head>

<body>
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
							<li><img class="img-fluid" src="<?php echo $data->foto ?>" alt="gambar alam" style="border-radius: 15px;"></li>
						</ul>
					</div>
					<div class="col-2">
						<div style="color: black">
							<h5>Nama Menu : </h5>
							<h5>Harga Menu : </h5>
							<h5>Rating Menu : </h5>
							<h5>Menu Terjual : </h5>
						</div>
					</div>
					<div class="col-2">
						<ul class="img-list5">
							<li>
								<div style="color: black">
									<h5 name="inputBookName2" id="inputBookName2" style="margin-left: 0px;"><?php echo $data->nama_menu ?></h5>
									<h5 name="inputPrice2" id="inputPrice2" style="margin-left: 0px;"><?php echo $data->harga ?></h5>
									<h5 name="" id="" style="margin-left: 0px;">⭐⭐⭐⭐⭐</h5>
									<h5 name="" id="" style="margin-left: 0px;">5000 Porsi</h5>
								</div>
							</li>
						</ul>
					</div>
               
               <div class="col-3">
                  <!-- <div class="input-group">
                     <input type="number" id="inputQty2" class="form-control form-control-lg" placeholder="Jumlah">
                     <div class="input-group-append">
                     <span class="input-group-text">Pcs</span>
                  </div> -->
                  <div class="col-2">
   					   <a href="" id="pay-button" style="background-color: orange;" class="navbar-btn btn-light text-light">Beli</a>
                  </div>
               </div>
            </div>
					<?php
  											}		
										}		
										?>
				</div>
			</div>
			<br>

			<form id="payment-form" method="post" action="<?php echo base_url(); ?>Payment/finish?id_pasien=<?php echo $this->session->userdata('id') ?>">

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
		<input type="number" class="form-control" id="inputQty" value="1" hidden>
	</div>
	<div class="form-group">
		<label for="inputBookName" hidden>Deskripsi</label>
		<input type="text" class="form-control" id="inputBookName" value="Motivasi hidup nikmat dengan makan bakso mercon" hidden>
	</div>
	<div class="form-group">
		<label for="inputFirstName" hidden>Nama Depan (Cust)</label>
		<input type="text" class="form-control" id="inputFirstName" placeholder="Nama Depan" value="Customer" hidden>
	</div>
	<div class="form-group">
		<label for="inputLastName" hidden>Nama Belakang (Cust)</label>
		<input type="text" class="form-control" id="inputLastName" placeholder="Nama Belakang" value="<?php echo $this->session->userdata('name') ?>" hidden>
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
		<input type="number" class="form-control" id="inputPhone" placeholder="Telepon" value=" <?php if (!empty($this->session->userdata('no_telp'))) echo $this->session->userdata('no_telp'); ?>" hidden>
	</div>
	<div class="form-group">
		<label for="inputEmail" hidden>Email (Cust)</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $this->session->userdata('user') ?>" hidden>
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
			var bookname_val = 'Katering ' + $("#inputBookName2").text();
			var firstname_val = $("#inputFirstName").val();
			var lastname_val = $("#inputLastName").val();
			var address_val = $("#inputAddress").val();
			var city_val = $("#inputCity").val();
			var postalcode_val = $("#inputPostalCode").val();
			var phone_val = $("#inputPhone").val();
			var email_val = $("#inputEmail").val();

			$.ajax({
				url: '<?php echo base_url(); ?>Payment/token_',
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
</div>
</div>
</div>

</html>