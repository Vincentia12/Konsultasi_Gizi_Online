<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// 1. Setiap transaksi bermula, pasti dimulai dari memasukkan data barang / jasa yang akan dilakukan pembayaran melalui payment gateway
	// 2. Jelaskan setiap alur atau rule, kodingan midtrans ini, cukup beri cuplikannya saja semisal : $params = array('server_key' => 'SERVER_KEY_ANDA', 'production' => false) untuk proses autentikasi dengan server nya midtrans, bahwa yang request memang benar-benar sesuai data di dashoard midtrans.
	// 3. Server Key - Client Key - Transaksi - Checkout - Invoice - Bayar - Notification - Done

	public function __construct()
  	{
        parent::__construct();
        // 4. Paste server_key dari dashboard midtrans Anda ke value array di bawah ini
        $params = array('server_key' => 'SB-Mid-server-RtwBZKS_Tg4cmaMt0jIKZbGA', 'production' => false);
        // 5. Past client_key dari dashboard midtrans Anda ke file views/first.php, cari dengan kata kunci : data-client-key="
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->library('veritrans');
		$this->veritrans->config($params);
  	}

	public function index()
	{
		$this->load->view('header/header.php');
		$this->load->view('home/sebelum');
		$this->load->view('footer/footer.php');
	}

	public function token()
	{
			$id      	= $this->input->get('id', TRUE);
			$price    	= $this->input->get('price', TRUE);
			$qty      	= $this->input->get('qty', TRUE);
			$bookname   = $this->input->get('bookname', TRUE);
			$firstname  = $this->input->get('firstname', TRUE);
			$lastname   = $this->input->get('lastname', TRUE);
			$address    = $this->input->get('address', TRUE);
			$city    	= $this->input->get('city', TRUE);
			$postalcode = $this->input->get('postalcode', TRUE);
			$phone      = $this->input->get('phone', TRUE);
			$email      = $this->input->get('email', TRUE);

			// Required
			$transaction_details = array(
			  	'order_id' => rand(),
			  	'gross_amount' => 810000, // no decimal allowed for creditcard
			);

			// Optional
			$item1_details = array(
			  'id' => $id,
			  'price' => $price,
			  'quantity' => $qty,
			  'name' => $bookname
			);

			// Optional
			$item_details = array ($item1_details);

			// Optional
			$billing_address = array(
			  'first_name'    => $firstname,
			  'last_name'     => $lastname,
			  'address'       => $address,
			  'city'          => $city,
			  'postal_code'   => $postalcode,
			  'phone'         => $phone,
			  'country_code'  => 'IDN'
			);

			// Optional
			$shipping_address = array(
			  'first_name'    => $firstname,
			  'last_name'     => $lastname,
			  'address'       => $address,
			  'city'          => $city,
			  'postal_code'   => $postalcode,
			  'phone'         => $phone,
			  'country_code'  => 'IDN'
			);

			// Optional
			$customer_details = array(
			  'first_name'    => $firstname,
			  'last_name'     => $lastname,
			  'email'         => $email,
			  'phone'         => $phone,
			  'billing_address'  => $billing_address,
			  'shipping_address' => $shipping_address
			);

			// Data yang akan dikirim untuk request redirect_url.
	    $credit_card['secure'] = true;

			//ser save_card true to enable oneclick or 2click
			//$credit_card['save_card'] = true;

			$time = time();
			$custom_expiry = array(
					'start_time' => date("Y-m-d H:i:s O",$time),
					'unit' => 'minute',
					'duration'  => 2
			);

			$transaction_data = array(
					'transaction_details'=> $transaction_details,
					'item_details'       => $item_details,
					'customer_details'   => $customer_details,
					'credit_card'        => $credit_card,
					'expiry'             => $custom_expiry
			);

			error_log(json_encode($transaction_data));

			$snapToken = $this->midtrans->getSnapToken($transaction_data);

			error_log($snapToken);
			echo $snapToken;
	}

	// Clue alur
	public function token_()
	{
		$id      	= $this->input->get('id_param', TRUE);
		$price    	= $this->input->get('price_param', TRUE);
		$qty      	= $this->input->get('qty_param', TRUE);
		$bookname   = $this->input->get('bookname_param', TRUE);
		$firstname  = $this->input->get('firstname_param', TRUE);
		$lastname  	= $this->input->get('lastname_param', TRUE);
		$address    = $this->input->get('address_param', TRUE);
		$city     	= $this->input->get('city_param', TRUE);
		$postalcode = $this->input->get('postalcode_param', TRUE);
		$phone      = $this->input->get('phone_param', TRUE);
		$email      = $this->input->get('email_param', TRUE);


		//Calculate the price with quantity
		$sum_gross_amount = $price * $qty;

		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $sum_gross_amount, // no decimal allowed for creditcard :: gross amount should equal with price * quantity
		);

	// Optional
	$item1_details = array(
		'id' 				=> $id,
		'price' 		=> $price,
		'quantity' 	=> $qty,
		'name' 			=> $bookname
	);

	// Optional
	$item_details = array ($item1_details);

	// Optional
	$billing_address = array(
		'first_name'    => $firstname,
		'last_name'     => $lastname,
		'address'       => $address,
		'city'          => $city,
		'postal_code'   => $postalcode,
		'phone'         => $phone,
		'country_code'  => 'IDN'
	);

	// Optional
	$shipping_address = array(
		'first_name'    => $firstname,
		'last_name'     => $lastname,
		'address'       => $address,
		'city'          => $city,
		'postal_code'   => $postalcode,
		'phone'         => $phone,
		'country_code'  => 'IDN'
	);

	// Optional
	$customer_details = array(
		'first_name'    => $firstname,
		'last_name'     => $lastname,
		'email'         => 'ghofur1317@gmail.com',
		'phone'         => $phone,
		'billing_address'  => $billing_address,
		'shipping_address' => $shipping_address
	);

	// Data yang akan dikirim untuk request redirect_url.
			$credit_card['secure'] = true;
			//ser save_card true to enable oneclick or 2click
			// $credit_card['save_card'] = true;

			$time = time();
			$custom_expiry = array(
					'start_time' => date("Y-m-d H:i:s O",$time),
					'unit' => 'minute',
					'duration'  => 2
			);

			$payment = [
						    "credit_card",
						    "gopay",
						    "shopeepay",
						    "permata_va",
						    "bca_va",
						    "bni_va",
						    "bri_va",
						    "echannel",
						    "other_va",
						    "danamon_online",
						    "mandiri_clickpay",
						    "cimb_clicks",
						    "bca_klikbca",
						    "bca_klikpay",
						    "bri_epay",
						    "xl_tunai",
						    "indosat_dompetku",
						    "kioson",
						    "Indomaret",
						    "alfamart",
						    "akulaku"
						];

			$transaction_data = array(
					'enabled_payments'   => $payment,
					'transaction_details'=> $transaction_details,
					'item_details'       => $item_details,
					'customer_details'   => $customer_details
			);

	error_log(json_encode($transaction_data));
	$snapToken = $this->midtrans->getSnapToken($transaction_data);
	error_log($snapToken);
	echo $snapToken;
	}

	public function cancel($kode)
	{
		try {
			$this->veritrans->cancel($kode);
		} finally {
			redirect('welcome');
		}
	}

	// Clue fitur
	public function finish()
	{
		// Jelaskan ini result data dari mana?
		$result = json_decode($this->input->post('result_data'), true);
		//echo 'RESULT <br><pre>';
		//var_dump($result['transaction_status']);
		var_dump($result);
		// echo "<br><br><br>";
		if($result['status_code'] == '200')
		{
			switch ($result['fraud_status'])
			{
				case "accept":
				{
					switch($result['transaction_status'])
					{
						case "capture":
													
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);

							$this->db->insert('tbl_transaksi', $data);
							//echo "<script>alert('Success!')</script>";
							//processTransaction();
							// $data = array(
							// 	'transaction_id'	 => $result['transaction_id'],
							// 	'order_id'			 => $result['order_id'],
							// 	'id_patient'		 => $result['id_patient'],
							// 	'card_type'			 => $result['card_type'],
							// 	'bank'				 => $result['bank'],
							// 	'masked_card'		 => $result['masked_card'],
							// 	'amount' 			 => $result['gross_amount'],
							// 	'payment_type'		 => $result['payment_type'] ,
							// 	'date' 				 => $result['transaction_time'], 
							// 	'fraud_status'		 => $result['fraud_status'],
							// 	'approval_code'		 => $result['approval_code'],
							// 	'transaction_status' => $result['transaction_status'],
							// 	'status_code'		 => $result['status_code'],
							// );
							
							// echo $data['transaction_id'];
							// echo '<br>';
							// echo $data['order_id'];
							// echo '<br>';
							// echo $data['card_type'];
							// echo '<br>';
							// echo $data['bank'];
							// echo '<br>';
							// echo $data['masked_card'];
							// echo '<br>';
							// echo $data['amount'];
							// echo '<br>';
							// echo $data['payment_type'];
							// echo '<br>';
							// echo $data['date'];
							// echo '<br>';
							// echo $data['fraud_status'];
							// echo '<br>';
							// echo $data['approval_code'];
							// echo '<br>';
							// echo $data['transaction_status'];
							// echo '<br>';
							// echo $data['status_code'];
							// echo '<br>';
							
							//$this->db->insert('tbl_transaksi', $data);
						break;
						case "pending":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Pending')";
						break;
						case "failure":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Failed!')";
						break;
						case "settlement":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Settlement Success!')";
						break;
						case "deny":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Transaction Denied!')";
						break;
						case "cancel":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Transaction Canceled.')";
						break;
						case "expire":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Transaction Expired.')";
						break;
						case "refund":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Transaction Refunded!')";
						break;
						case "partial_refund":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Transaction is Partially Refunded!')";
						break;
						case "authorize":
							$data = array(
								'transaction_id'	 => $result['transaction_id'],
								'order_id'			 => $result['order_id'],
								'id_patient'		 => $_GET['id_pasien'],
								'card_type'			 => $result['card_type'],
								'bank'				 => $result['bank'],
								'masked_card'		 => $result['masked_card'],
								'amount' 			 => $result['gross_amount'],
								'payment_type'		 => $result['payment_type'] ,
								'date' 				 => $result['transaction_time'], 
								'fraud_status'		 => $result['fraud_status'],
								'approval_code'		 => $result['approval_code'],
								'transaction_status' => $result['transaction_status'],
								'status_code'		 => $result['status_code'],
							);
							
							$this->db->insert('tbl_transaksi', $data);
							//echo "alert('Transaction Authorized!')";
						break;
					}
				}
				break;
				case "deny":
				break;
				case "challenge":
					echo "alert('Terdeteksi Aktivitas Mencurigakan, Investigasi Lebih lanjut akan dilakukan oleh Tim Sikozion RSUD Jombang.')";
				break;
			}
		}
		//echo '</pre>' ;
	}
}
