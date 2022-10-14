		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body" style="background-color: #24A677;">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-white font-w600">Dashboard Admin</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600"><?php foreach($dataKonsultasi as $data) { echo $data->totalKonsultasi; };?></h2>
										<span>Appointment</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
											<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64" />
											<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64" />
											<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64" />
											<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64" />
										</g>
										<defs>
											<clipPath id="clip0">
												<rect width="40" height="40" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600"><?php foreach($dataPasien as $data) { echo $data->totalPasienCount; };?></h2>
										<span>Total Patient</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28.0053 2.00495C25.0652 1.92104 22.2028 2.90688 20.0059 4.76001C17.8089 2.90688 14.9465 1.92104 12.0064 2.00495C10.2879 1.99938 8.58941 2.3549 7.03328 3.04589C5.47716 3.73689 4.10208 4.74618 3.00704 6.00112C1.10117 8.19152 -0.89469 12.1574 0.427219 18.6225C2.53907 28.9417 18.358 37.4115 19.0259 37.7601C19.3237 37.9174 19.659 38 19.9999 38C20.3408 38 20.676 37.9174 20.9738 37.7601C21.6478 37.4058 37.4667 28.936 39.5725 18.6225C40.8944 12.1574 38.9006 8.201 36.9947 6.00112C35.9009 4.74722 34.5275 3.73852 32.9732 3.04756C31.4188 2.35659 29.7222 2.00052 28.0053 2.00495ZM35.6608 17.9006C34.1709 25.1899 23.3456 31.9715 20.0099 33.908C16.6741 31.9715 5.84885 25.1918 4.35895 17.9006C3.33302 12.8869 4.73692 9.97454 6.09683 8.41322C6.81663 7.59033 7.71988 6.92874 8.74167 6.47597C9.76346 6.0232 10.8784 5.79049 12.0064 5.79458C13.2101 5.70905 14.4167 5.9205 15.5084 6.40832C16.6002 6.89614 17.5399 7.64369 18.236 8.57806C18.4065 8.87653 18.6585 9.12614 18.9656 9.3008C19.2727 9.47546 19.6237 9.56876 19.9819 9.57095H20.0059C20.3619 9.56861 20.7109 9.47734 21.0178 9.30634C21.3247 9.13534 21.5786 8.89067 21.7537 8.59701C22.4489 7.65541 23.391 6.90174 24.4873 6.4103C25.5836 5.91887 26.7961 5.70665 28.0053 5.79458C29.1347 5.78937 30.2512 6.02153 31.2744 6.47434C32.2977 6.92716 33.2022 7.58934 33.9229 8.41322C35.2788 9.97454 36.6827 12.8869 35.6568 17.9006H35.6608Z" fill="#007A64" />
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600"><?php foreach($dataDokter as $data) { echo $data->totalDokterCount; };?></h2>
										<span>Total Doctor</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M38.3334 16.6667C38.3384 15.7489 38.0907 14.8474 37.6174 14.061C37.1441 13.2746 36.4635 12.6337 35.6501 12.2084C34.8368 11.7832 33.9221 11.59 33.0062 11.6501C32.0904 11.7101 31.2087 12.0211 30.4579 12.5489C29.707 13.0768 29.116 13.8011 28.7494 14.6426C28.3829 15.484 28.2551 16.4101 28.3799 17.3194C28.5047 18.2287 28.8774 19.0861 29.4572 19.7976C30.0369 20.5092 30.8014 21.0474 31.6667 21.3534V26.6667C31.6667 28.8768 30.7887 30.9964 29.2259 32.5592C27.6631 34.122 25.5435 35 23.3334 35C21.1232 35 19.0036 34.122 17.4408 32.5592C15.878 30.9964 15 28.8768 15 26.6667V24.8667C17.7735 24.4643 20.3097 23.0778 22.1456 20.9604C23.9815 18.8429 24.9947 16.1359 25 13.3334V3.33335C25 2.89133 24.8244 2.4674 24.5119 2.15484C24.1993 1.84228 23.7754 1.66669 23.3334 1.66669H18.3334C17.8913 1.66669 17.4674 1.84228 17.1548 2.15484C16.8423 2.4674 16.6667 2.89133 16.6667 3.33335C16.6667 3.77538 16.8423 4.1993 17.1548 4.51186C17.4674 4.82443 17.8913 5.00002 18.3334 5.00002H21.6667V13.3334C21.6667 15.5435 20.7887 17.6631 19.2259 19.2259C17.6631 20.7887 15.5435 21.6667 13.3334 21.6667C11.1232 21.6667 9.0036 20.7887 7.4408 19.2259C5.87799 17.6631 5.00002 15.5435 5.00002 13.3334V5.00002H8.33335C8.77538 5.00002 9.1993 4.82443 9.51186 4.51186C9.82442 4.1993 10 3.77538 10 3.33335C10 2.89133 9.82442 2.4674 9.51186 2.15484C9.1993 1.84228 8.77538 1.66669 8.33335 1.66669H3.33335C2.89133 1.66669 2.4674 1.84228 2.15484 2.15484C1.84228 2.4674 1.66669 2.89133 1.66669 3.33335V13.3334C1.67205 16.1359 2.68517 18.8429 4.52109 20.9604C6.357 23.0778 8.89322 24.4643 11.6667 24.8667V26.6667C11.6667 29.7609 12.8959 32.7283 15.0838 34.9163C17.2717 37.1042 20.2392 38.3334 23.3334 38.3334C26.4275 38.3334 29.395 37.1042 31.5829 34.9163C33.7709 32.7283 35 29.7609 35 26.6667V21.3534C35.9723 21.0132 36.8152 20.3797 37.4122 19.5403C38.0093 18.7008 38.3311 17.6968 38.3334 16.6667Z" fill="#007A64" />
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 30%; height:4px;" role="progressbar">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 id="rupiah" name="rupiah" class="fs-34 text-black font-w600"><?php foreach($dataIncome as $data) { echo $data->totalIncome; };?></h2>
										<span>Hospital Earning</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.7 39.9993C15.8603 40.0123 18.0017 39.5921 20 38.763C21.9962 39.5991 24.139 40.0196 26.3 39.9993C32.861 39.9993 38 36.463 38 31.9467V24.4159C38 19.8996 32.861 16.3633 26.3 16.3633C25.9958 16.3633 25.697 16.3779 25.4 16.3943V7.87804C25.4 3.45448 20.261 0 13.7 0C7.139 0 2 3.45448 2 7.87804V32.1213C2 36.5448 7.139 39.9993 13.7 39.9993ZM34.4 31.9467C34.4 34.0358 31.0736 36.363 26.3 36.363C21.5264 36.363 18.2 34.0358 18.2 31.9467V30.2649C20.6376 31.7624 23.4476 32.5262 26.3 32.4667C29.1524 32.5262 31.9624 31.7624 34.4 30.2649V31.9467ZM26.3 19.9996C31.0736 19.9996 34.4 22.3269 34.4 24.4159C34.4 26.505 31.0736 28.8304 26.3 28.8304C21.5264 28.8304 18.2 26.5032 18.2 24.4159C18.2 22.3287 21.5264 19.9996 26.3 19.9996ZM13.7 3.6363C18.4736 3.6363 21.8 5.87262 21.8 7.87804C21.8 9.88346 18.4736 12.1216 13.7 12.1216C8.9264 12.1216 5.6 9.88528 5.6 7.87804C5.6 5.87081 8.9264 3.6363 13.7 3.6363ZM5.6 13.6034C8.04776 15.0717 10.8538 15.8181 13.7 15.7579C16.5462 15.8181 19.3522 15.0717 21.8 13.6034V16.9633C19.8383 17.4628 18.0392 18.4698 16.58 19.8851C15.6336 20.092 14.6683 20.198 13.7 20.2015C8.9264 20.2015 5.6 17.9651 5.6 15.9597V13.6034ZM5.6 21.6851C8.04828 23.1519 10.854 23.8976 13.7 23.8378C14.0204 23.8378 14.33 23.7978 14.645 23.7814C14.6182 23.9919 14.6032 24.2037 14.6 24.4159V28.2068C14.2976 28.225 14.006 28.2831 13.7 28.2831C8.9264 28.2831 5.6 26.0468 5.6 24.0396V21.6851ZM5.6 29.7649C8.04776 31.2332 10.8538 31.9796 13.7 31.9194C14.0024 31.9194 14.2994 31.8958 14.6 31.8813V31.9467C14.6258 33.4944 15.2146 34.9784 16.2542 36.1157C15.412 36.2763 14.5571 36.3591 13.7 36.363C8.9264 36.363 5.6 34.1267 5.6 32.1213V29.7649Z" fill="#007A64" />
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 94%; height:4px;" role="progressbar">
									<span class="sr-only">94% Complete</span>
								</div>
							</div>
						</div>
					</div>
				</div>
            <div class="mr-auto">
                <h2 class="text-white font-w600">Laporan Keuangan</h2>
            </div>
        </div>

        <div class="row">
            <!-- <center> -->
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="stacked-bar-chart2" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>
            </div>
			<br>
            <!-- </center> -->
        </div>

		<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="tableKonversi">
								<thead>
									<tr class="table-success">
										<th>
											<center></center>
										</th>
										<th>
											<center>Nama</center>
										</th>
										<th>
											<center>Order ID</center>
										</th>
										<th>
											<center>Amount</center>
										</th>
										<th>
											<center>Payment</center>
										</th>
										<th>
											<center>Bank</center>
										</th>
										<th>
											<center>Tanggal</center>
										</th>
										<th>
											<center>Status</center>
										</th>
										<?php if ($this->session->userdata('idlevel') != 5) { ?>
										<th>
											<center>Action</center>
										</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($dataTransaksi as $data) : ?>
                                        <tr class="text-center">
                                            <td>01</td>
                                            <td><?php echo $data->nama ?></td>
                                            <td><?php echo $data->order_id ?></td>
                                            <td><?php echo $data->amount ?></td>
                                            <td><?php echo $data->payment_type ?></td>
                                            <td><?php echo $data->bank ?></td>
                                            <td>
												<?php 
													$date = strtotime($data->date);
													echo date('l, d F Y H:i:s', $date);
												
													//echo $data->date 
												?>
											</td>
											<td>
                                            	<?php
                                            	    $acc_methods = array('capture', 'settlement', 'authorize');
                                            	    $pnd_methods = array('pending');
                                            	    $dnd_methods = array('deny', 'cancel', 'expire', 'failure', 'refund', 'chargeback', 'partial_refund', 'partial_chargeback', 'authorize');
                                            	    if (in_array($data->transaction_status, $acc_methods))
                                            	    {
                                            	?>
                                            	<span class="badge light badge-success">Paid</span>
                                            	<?php
                                            	    }
                                            	?>
                                            	<?php
                                            	if (in_array($data->transaction_status, $pnd_methods))
                                            	    {
                                            	?>
                                            	<span class="badge light badge-warning">Pending</span>
                                            	<?php
                                            	    }
                                            	?>
                                            	<?php
                                            	if (in_array($data->transaction_status, $pnd_methods))
                                            	    {
                                            	?>
                                            		<span class="badge light badge-danger">Cancel</span>
                                            	<?php
                                            	    }
                                            	?>
                                            	<?php
                                            	?>
											</td>
											<?php if ($this->session->userdata('idlevel') != 5) { ?>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="<?php echo base_url() ?>riwayattransaksi/detail/<?php echo $data->id_user. "/" . $data->transaction_id; ?>">Detail Riwayat</a>
														</div>
												</div>
                                            </td>
											<?php } ?>
                                        </tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				
				<div class="row">
				<div class="col-12">
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fees Collection</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Student Name</th>
                                                <th>Invoice number</th>
                                                <th>Fees Type </th>
												<th>Payment Type </th>
												<th>Status </th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Tiger Nixon</td>
                                                <td>#54605</td>
                                                <td>Library</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/04/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>02</td>
                                                <td>Garrett Winters</td>
                                                <td>#54687</td>
                                                <td>Library</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
												<td>2011/07/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>03</td>
                                                <td>Ashton Cox</td>
                                                <td>#35672</td>
                                                <td>Tuition</td>
                                                <td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/01/12</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>04</td>
                                                <td>Cedric Kelly</td>
                                                <td>#57984</td>
                                                <td>Annual</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/03/29</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>05</td>
                                                <td>Airi Satou</td>
                                                <td>#12453</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2008/11/28</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>06</td>
                                                <td>Brielle Williamson</td>
                                                <td>#59723</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2012/12/02</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>07</td>
                                                <td>Herrod Chandler</td>
                                                <td>#98726</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/08/06</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>08</td>
                                                <td>Rhona Davidson</td>
                                                <td>#98721</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/10/14</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>09</td>
                                                <td>Colleen Hurst</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/09/15</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>10</td>
                                                <td>Sonya Frost</td>
                                                <td>#98734</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/13</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>11</td>
                                                <td>Jena Gaines</td>
                                                <td>#12457</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2008/12/19</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>12</td>
                                                <td>Quinn Flynn</td>
                                                <td>#36987</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2013/03/03</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>13</td>
                                                <td>Charde Marshall</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2008/10/16</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>14</td>
                                                <td>Haley Kennedy</td>
                                                <td>#98754</td>
                                                <td>Library</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/12/18</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>15</td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>#65248</td>
                                                <td>Annual</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2010/03/17</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>16</td>
                                                <td>Michael Silva</td>
                                                <td>#75943</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
												<td>2012/11/27</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>17</td>
                                                <td>Paul Byrd</td>
                                                <td>#87954</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/06/09</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>18</td>
                                                <td>Gloria Little</td>
                                                <td>#98746</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2009/04/10</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>19</td>
                                                <td>Bradley Greer</td>
                                                <td>#98674</td>
                                                <td>Annual</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2012/10/13</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>20</td>
                                                <td>Dai Rios</td>
                                                <td>#69875</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2012/09/26</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>21</td>
                                                <td>Jenette Caldwell</td>
                                                <td>#54678</td>
                                                <td>Library</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/09/03</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>22</td>
                                                <td>Yuri Berry</td>
                                                <td>#98756</td>
                                                <td>Tuition</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/06/25</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>23</td>
                                                <td>Caesar Vance</td>
                                                <td>#86754</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2011/12/12</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>24</td>
                                                <td>Doris Wilder</td>
                                                <td>#34251</td>
                                                <td>Annual</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/09/20</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>25</td>
                                                <td>Angelica Ramos</td>
                                                <td>#65874</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2009/10/09</td>
												<td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>26</td>
                                                <td>Gavin Joyce</td>
                                                <td>#54605</td>
                                                <td>Female</td>
												<td>Credit Card</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/12/22</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>27</td>
                                                <td>Jennifer Chang</td>
                                                <td>#54605</td>
                                                <td>Tuition</td>
												<td>Cheque</td>
                                                <td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2010/11/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>28</td>
                                                <td>Brenden Wagner</td>
                                                <td>#45687</td>
                                                <td>Library</td>
												<td>Cheque</td>
												<td><span class="badge light badge-danger">Udpaid</span></td>
                                                <td>2011/06/07</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>29</td>
                                                <td>Fiona Green</td>
                                                <td>#23456</td>
                                                <td>Tuition</td>
												<td>Cash</td>
                                                <td><span class="badge light badge-success">Paid</span></td>
                                                <td>2010/03/11</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                            <tr>
												<td>30</td>
                                                <td>Shou Itou</td>
                                                <td>#54605</td>
                                                <td>Annual</td>
												<td>Credit Card</td>
												<td><span class="badge light badge-warning">Panding</span></td>
                                                <td>2011/08/14</td>
                                                <td><strong>120$</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    </div>
					
					<!-- <div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card appointment-schedule">
									<div class="card-header pb-0 border-0">
										<h3 class="fs-20 text-black mb-0">Appointment Schedule</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link p-2 bg-light" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-md-6">
												<div class="appointment-calender">
													<input type='text' class="form-control d-none" id='datetimepicker1' />
												</div>
											</div>


										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Visitors</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<ul class="users-sm mb-3">
											<li><img src="<?php echo base_url(); ?>assets/admin/images/users/6.png" alt=""></li>
											<li><img src="<?php echo base_url(); ?>assets/admin/images/users/7.png" alt=""></li>
											<li><img src="<?php echo base_url(); ?>assets/admin/images/users/8.png" alt=""></li>
											<li><img src="<?php echo base_url(); ?>assets/admin/images/users/9.png" alt=""></li>
											<li><img src="<?php echo base_url(); ?>assets/admin/images/users/10.png" alt=""></li>
										</ul>
										<div class="d-flex align-items-center">
											<svg class="mr-3" width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M28.8124 0.990788C29.6459 1.71558 29.734 2.97884 29.0092 3.81236L20.2578 13.8765C18.859 15.4851 16.4444 15.7141 14.7681 14.397L10.6176 11.1359L3.37074 17.9564C2.56639 18.7134 1.30064 18.6751 0.543606 17.8707C-0.213427 17.0664 -0.175071 15.8006 0.629276 15.0436L7.8761 8.22306C9.317 6.86692 11.5329 6.76809 13.0888 7.99059L17.2394 11.2517L25.9908 1.18764C26.7156 0.354128 27.9788 0.265993 28.8124 0.990788Z" fill="#007A64" />
											</svg>
											<div>
												<p class="fs-12 mb-0">Customer</p>
												<span class="fs-22 text-black font-w600">765 Person</span>
											</div>
										</div>
										<div id="lineChart"></div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">

							<div class="col-xl-12">
								<div class="card appointment-schedule">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-md-6">
												<div class="appointment-calender">
													<input type='text' class="form-control d-none" id='datetimepicker1' />
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll" id="appointment-schedule">
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Tuesday, June 16th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Saturday, June 27th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-2">Revenue Summary</h3>
										<div class="dropdown mt-sm-0 mt-3">
											<button type="button" class="btn bg-light text-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												2020
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">2020</a>
												<a class="dropdown-item" href="javascript:void(0);">2021</a>
												<a class="dropdown-item" href="javascript:void(0);">2022</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div id="chartBar"></div>
									</div>
								</div>
							</div>

						</div>
					</div> -->
				</div>
			</div>
		</div>
		<script type="text/javascript">
			
		$( document ).ready(function() {
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			$("#rupiah").text(formatRupiah($('#rupiah').text(), 'Rp. '));		
			/* Fungsi formatRupiah */
			
			function formatRupiah(angka, prefix)
			{
				var number_string = angka.replace(/[^,\d]/g, '').toString(),
				split   		= number_string.split(','),
				sisa     		= split[0].length % 3,
				rupiah     		= split[0].substr(0, sisa),
				ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
			
				// tambahkan titik jika yang di input sudah menjadi angka ribuan
				if(ribuan){
					separator = sisa ? '.' : '';
					rupiah += separator + ribuan.join('.');
				}
			
				rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
				return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
			}
		});
		
		(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
		
	var setChartWidth = function(){
		
		if(screenWidth <= 768)
		{
			var chartBlockWidth = 0;
			if(screenWidth >= 500)
			{
				chartBlockWidth = 250;
			}else{
				chartBlockWidth = 300;
			}
			
			jQuery('.chartlist-chart').css('min-width',chartBlockWidth - 31);
		}
	}
	
	var lineAnimatedChart = function(){
		    
		var chart = new Chartist.Line('#smil-animations', {
			labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
			series: [
			  [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
			  [4,  5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
			  [5,  3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
			  [3,  4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
			]
		  }, {
			low: 0,
			plugins: [
			  Chartist.plugins.tooltip()
			]
		  });
		  
		  // Let's put a sequence number aside so we can use it in the event callbacks
		  var seq = 0,
			delays = 80,
			durations = 500;
		  
		  // Once the chart is fully created we reset the sequence
		  chart.on('created', function() {
			seq = 0;
		  });
		  
		  // On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
		  chart.on('draw', function(data) {
			seq++;
		  
			if(data.type === 'line') {
			  // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
			  data.element.animate({
				opacity: {
				  // The delay when we like to start the animation
				  begin: seq * delays + 1000,
				  // Duration of the animation
				  dur: durations,
				  // The value where the animation should start
				  from: 0,
				  // The value where it should end
				  to: 1
				}
			  });
			} else if(data.type === 'label' && data.axis === 'x') {
			  data.element.animate({
				y: {
				  begin: seq * delays,
				  dur: durations,
				  from: data.y + 100,
				  to: data.y,
				  // We can specify an easing function from Chartist.Svg.Easing
				  easing: 'easeOutQuart'
				}
			  });
			} else if(data.type === 'label' && data.axis === 'y') {
			  data.element.animate({
				x: {
				  begin: seq * delays,
				  dur: durations,
				  from: data.x - 100,
				  to: data.x,
				  easing: 'easeOutQuart'
				}
			  });
			} else if(data.type === 'point') {
			  data.element.animate({
				x1: {
				  begin: seq * delays,
				  dur: durations,
				  from: data.x - 10,
				  to: data.x,
				  easing: 'easeOutQuart'
				},
				x2: {
				  begin: seq * delays,
				  dur: durations,
				  from: data.x - 10,
				  to: data.x,
				  easing: 'easeOutQuart'
				},
				opacity: {
				  begin: seq * delays,
				  dur: durations,
				  from: 0,
				  to: 1,
				  easing: 'easeOutQuart'
				}
			  });
			} else if(data.type === 'grid') {
			  // Using data.axis we get x or y which we can use to construct our animation definition objects
			  var pos1Animation = {
				begin: seq * delays,
				dur: durations,
				from: data[data.axis.units.pos + '1'] - 30,
				to: data[data.axis.units.pos + '1'],
				easing: 'easeOutQuart'
			  };
		  
			  var pos2Animation = {
				begin: seq * delays,
				dur: durations,
				from: data[data.axis.units.pos + '2'] - 100,
				to: data[data.axis.units.pos + '2'],
				easing: 'easeOutQuart'
			  };
		  
			  var animations = {};
			  animations[data.axis.units.pos + '1'] = pos1Animation;
			  animations[data.axis.units.pos + '2'] = pos2Animation;
			  animations['opacity'] = {
				begin: seq * delays,
				dur: durations,
				from: 0,
				to: 1,
				easing: 'easeOutQuart'
			  };
		  
			  data.element.animate(animations);
			}
		  });
		  
		  // For the sake of the example we update the chart every time it's created with a delay of 10 seconds
		  chart.on('created', function() {
			if(window.__exampleAnimateTimeout) {
				clearTimeout(window.__exampleAnimateTimeout);
				window.__exampleAnimateTimeout = null;
			}
			window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
		  });
  
  
  
	}
	
	
	var scatterChart = function(){
			  //Line Scatter Diagram
			  var times = function(n) {
				return Array.apply(null, new Array(n));
			  };
			  
			  var data = times(52).map(Math.random).reduce(function(data, rnd, index) {
				data.labels.push(index + 1);
				data.series.forEach(function(series) {
				  series.push(Math.random() * 100)
				});
			  
				return data;
			  }, {
				labels: [],
				series: times(4).map(function() { return new Array() })
			  });
			  
			  var options = {
				showLine: false,
				axisX: {
				  labelInterpolationFnc: function(value, index) {
					return index % 13 === 0 ? 'W' + value : null;
				  }
				}
			  };
			  
			  var responsiveOptions = [
				['screen and (min-width: 640px)', {
				  axisX: {
					labelInterpolationFnc: function(value, index) {
					  return index % 4 === 0 ? 'W' + value : null;
					}
				  }
				}]
			  ];
			  
			  new Chartist.Line('#scatter-diagram', data, options, responsiveOptions);
	}
	
	var simpleLineChart = function(){
		//Simple line chart
		new Chartist.Line('#simple-line-chart', {
			labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
			series: [
			  [12, 9, 7, 8, 5],
			  [2, 1, 3.5, 7, 3],
			  [1, 3, 4, 5, 6]
			]
		  }, {
			fullWidth: true,
			chartPadding: {
			  right: 40
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		});
		
	}
	var lineTooltipsChart = function(){
		//Line chart with tooltips
			
		new Chartist.Line('#line-chart-tooltips', {
			labels: ['1', '2', '3', '4', '5', '6'],
			series: [
			  {
				name: 'Fibonacci sequence',
				data: [1, 2, 3, 5, 8, 13]
			  },
			  {
				name: 'Golden section',
				data: [1, 1.618, 2.618, 4.236, 6.854, 11.09]
			  }
			]
		  },
			  {
			plugins: [
			  Chartist.plugins.tooltip()
			],
			fullWidth: true
		  }
		  );
		  
		  var $chart = $('#line-chart-tooltips');
		  
		  var $toolTip = $chart
			.append('<div class="tooltip"></div>')
			.find('.tooltip')
			.hide();
		  
		  $chart.on('mouseenter', '.ct-point', function() {
			var $point = $(this),
			  value = $point.attr('ct:value'),
			  seriesName = $point.parent().attr('ct:series-name');
			$toolTip.html(seriesName + '<br>' + value).show();
		  });
		  
		  $chart.on('mouseleave', '.ct-point', function() {
			$toolTip.hide();
		  });
		  
		  $chart.on('mousemove', function(event) {
			$toolTip.css({
			  left: (event.offsetX || event.originalEvent.layerX) - $toolTip.width() / 2 - 10,
			  top: (event.offsetY || event.originalEvent.layerY) - $toolTip.height() - 40
			});
		  });
		  
	}
	var withAreaChart = function(){
	 //Line chart with area
	  
	  new Chartist.Line('#chart-with-area', {
		labels: [1, 2, 3, 4, 5, 6, 7, 8, 9],
		series: [
		  [5, 9, 7, 8, 5, 3, 5, 4, 3]
		]
	  }, {
		low: 0,
		showArea: true,
		fullWidth: true,
		plugins: [
		  Chartist.plugins.tooltip()
		]
	  });
		
	}
	var biPolarLineChart = function(){
		//Bi-polar Line chart with area only
		  
		new Chartist.Line('#bi-polar-line', {
			labels: [1, 2, 3, 4, 5, 6, 7, 8],
			series: [
			  [1, 2, 3, 1, -2, 0, 1, 0],
			  [-2, -1, -2, -1, -2.5, -1, -2, -1],
			  [0, 0, 0, 1, 2, 2.5, 2, 1],
			  [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
			]
		}, {
			high: 3,
			low: -3,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
			  showLabel: false,
			  showGrid: false
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		});
		
	}
	var svgAnimationChart = function(){
		 //SVG Path animation
  
		var chart = new Chartist.Line('#svg-animation', {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			series: [
			  [1, 5, 2, 5, 4, 3],
			  [2, 3, 4, 8, 1, 2],
			  [5, 4, 3, 2, 1, 0.5]
			]
		  }, {
			low: 0,
			showArea: true,
			showPoint: false,
			fullWidth: true
		});
		  
		chart.on('draw', function(data) {
			if(data.type === 'line' || data.type === 'area') {
			  data.element.animate({
				d: {
				  begin: 2000 * data.index,
				  dur: 2000,
				  from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
				  to: data.path.clone().stringify(),
				  easing: Chartist.Svg.Easing.easeOutQuint
				}
			  });
			}
		});
	}
	var lineSmoothingChart = function(){
		 //Line Interpolation / Smoothing
  
		var chart = new Chartist.Line('#line-smoothing', {
			labels: [1, 2, 3, 4, 5],
			series: [
			  [1, 5, 10, 0, 1],
			  [10, 15, 0, 1, 2]
			]
		}, {
			// Remove this configuration to see that chart rendered with cardinal spline interpolation
			// Sometimes, on large jumps in data values, it's better to use simple smoothing.
			lineSmooth: Chartist.Interpolation.simple({
			  divisor: 2
			}),
			fullWidth: true,
			chartPadding: {
			  right: 20
			},
			low: 0
		}); 
	}
	var biPolarBarChart = function(){
		//Bi-polar bar chart
		var data = {
			labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
			series: [
			  [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
			]
		};
		  
		var options = {
			high: 10,
			low: -10,
			axisX: {
			  labelInterpolationFnc: function(value, index) {
				return index % 2 === 0 ? value : null;
			  }
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		};
		  
		new Chartist.Bar('#bi-polar-bar', data, options);
		
	}
	var overlappingBarsChart = function(){
		//Overlapping bars on mobile
		var data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [
			  [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8]
			]
		  };
		var options = {
			seriesBarDistance: 10
		};
		var responsiveOptions = [
			['screen and (max-width: 640px)', {
			  seriesBarDistance: 5,
			  axisX: {
				labelInterpolationFnc: function (value) {
				  return value[0];
				}
			  }
			}]
		];
		new Chartist.Bar('#overlapping-bars', data, options, responsiveOptions);
	}
	var multiLineChart = function(){
		//Multi-line labels
		new Chartist.Bar('#multi-line-chart', {
			labels: ['First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'],
			series: [
			  [60000, 40000, 80000, 70000],
			  [40000, 30000, 70000, 65000],
			  [8000, 3000, 10000, 6000]
			]
		}, {
			seriesBarDistance: 10,
			axisX: {
			  offset: 60
			},
			axisY: {
			  offset: 80,
			  labelInterpolationFnc: function(value) {
				return value + ' CHF'
			  },
			  scaleMinSpace: 15
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		});
	}

	var stackedBarChart = function(){
		 //Stacked bar chart  
		new Chartist.Bar('#stacked-bar-chart', {
			labels: ['Q1', 'Q2', 'Q3', 'Q4'],
			series: [
			  [800000, 1200000, 1400000, 1300000],
			  [200000, 400000, 500000, 300000],
			  [160000, 290000, 410000, 600000]
			]
		  }, {
			stackBars: true,
			axisY: {
			  labelInterpolationFnc: function(value) {
				return (value / 1000) + 'k';
			  }
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		}).on('draw', function(data) {
			if(data.type === 'bar') {
			  data.element.attr({
				style: 'stroke-width: 30px'
			  });
			}
		});
	}
	
	var stackedBarChart2 = function(){
		//Stacked bar chart  
	   new Chartist.Bar('#stacked-bar-chart2', { //#stacked-bar-chart2
		   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		   series: [
			 [<?php foreach($dataChart as $data) { echo $data->data . ","; };?>],
		   ]
		 }, {
		   stackBars: true,
		   axisY: {
			 labelInterpolationFnc: function(value) {
			   return (value / 1000) + 'k';
			 }
		   },
		   plugins: [
			 Chartist.plugins.tooltip()
		   ]
	   }).on('draw', function(data) {
		   if(data.type === 'bar') {
			 data.element.attr({
			   style: 'stroke-width: 30px'
			 });
		   }
	   });
   }
   
	var horizontalBarChart = function(){
		//Horizontal bar chart
  
		new Chartist.Bar('#horizontal-bar-chart', {
				labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
				series: [
				  [5, 4, 3, 7, 5, 10, 3],
				  [3, 2, 9, 5, 4, 6, 4]
				]
			  }, {
				seriesBarDistance: 10,
				reverseData: true,
				horizontalBars: true,
				axisY: {
				  offset: 70
				},
				plugins: [
				  Chartist.plugins.tooltip()
				]
			  });
	}
	var extremeChart = function(){
			 // Extreme responsive configuration
	  
		new Chartist.Bar('#extreme-chart', {
			labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
			series: [
			  [5, 4, 3, 7],
			  [3, 2, 9, 5],
			  [1, 5, 8, 4],
			  [2, 3, 4, 6],
			  [4, 1, 2, 1]
			]
		}, {
		// Default mobile configuration
		stackBars: true,
		axisX: {
		  labelInterpolationFnc: function(value) {
			return value.split(/\s+/).map(function(word) {
			  return word[0];
			}).join('');
		  }
		},
		axisY: {
			offset: 20
		},
		plugins: [
			Chartist.plugins.tooltip()
		]
		}, [
			// Options override for media > 400px
			['screen and (min-width: 400px)', {
			  reverseData: true,
			  horizontalBars: true,
			  axisX: {
				labelInterpolationFnc: Chartist.noop
			  },
			  axisY: {
				offset: 60
			  }
			}],
			// Options override for media > 800px
			['screen and (min-width: 800px)', {
			  stackBars: false,
			  seriesBarDistance: 10
			}],
			// Options override for media > 1000px
			['screen and (min-width: 1000px)', {
			  reverseData: false,
			  horizontalBars: false,
			  seriesBarDistance: 15
			}]
		]);
	}
	var labelPlacementChart = function(){
		//Label placement
  
		new Chartist.Bar('#label-placement-chart', {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
			  [5, 4, 3, 7, 5, 10, 3],
			  [3, 2, 9, 5, 4, 6, 4]
			]
		}, {
		axisX: {
			  // On the x-axis start means top and end means bottom
			  position: 'start'
		},
		axisY: {
			  // On the y-axis start means left and end means right
			  position: 'end'
			},
		plugins: [
			  Chartist.plugins.tooltip()
			]
		});
	}
	var animatingDonutChart = function(){
		//Animating a Donut with Svg.animate
  
		var chart = new Chartist.Pie('#animating-donut', {
			series: [10, 20, 50, 20, 5, 50, 15],
			labels: [1, 2, 3, 4, 5, 6, 7]
		}, {
			donut: true,
			showLabel: false,
			plugins: [
			  Chartist.plugins.tooltip()
			]
		});
		  
		chart.on('draw', function(data) {
			if(data.type === 'slice') {
			  // Get the total path length in order to use for dash array animation
			  var pathLength = data.element._node.getTotalLength();
		  
			  // Set a dasharray that matches the path length as prerequisite to animate dashoffset
			  data.element.attr({
				'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
			  });
		  
			  // Create animation definition while also assigning an ID to the animation for later sync usage
			  var animationDefinition = {
				'stroke-dashoffset': {
				  id: 'anim' + data.index,
				  dur: 1000,
				  from: -pathLength + 'px',
				  to:  '0px',
				  easing: Chartist.Svg.Easing.easeOutQuint,
				  // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
				  fill: 'freeze'
				}
			};
		  
			  // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
			  if(data.index !== 0) {
				animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
			  }
		  
			  // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
			  data.element.attr({
				'stroke-dashoffset': -pathLength + 'px'
			  });
		  
			  // We can't use guided mode as the animations need to rely on setting begin manually
			  // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
			  data.element.animate(animationDefinition, false);
			}
		});
		  
		// For the sake of the example we update the chart every time it's created with a delay of 8 seconds
		chart.on('created', function() {
			if(window.__anim21278907124) {
			  clearTimeout(window.__anim21278907124);
			  window.__anim21278907124 = null;
			}
			window.__anim21278907124 = setTimeout(chart.update.bind(chart), 10000);
		});
		
	}
	var simplePieChart = function(){
		//Simple pie chart
  
	  var data1 = {
		series: [5, 3, 4]
	  };
	  
	  var sum = function(a, b) { return a + b };
	  
	  new Chartist.Pie('#simple-pie', data1, {
		labelInterpolationFnc: function(value) {
		  return Math.round(value / data1.series.reduce(sum) * 100) + '%';
		}
	  });
		
	}
	var pieChart = function(){
		//Pie chart with custom labels
		  
		var data = {
			labels: ['35%', '55%', '10%'],
			series: [20, 15, 40]
		  };
		  
		var options = {
			labelInterpolationFnc: function(value) {
			  return value[0]
			}
		  };
		  
		var responsiveOptions = [
			['screen and (min-width: 640px)', {
			  chartPadding: 30,
			  donut: true,
			  labelOffset: 100,
			  donutWidth: 60,
			  labelDirection: 'explode',
			  labelInterpolationFnc: function(value) {
				return value;
			  }
			}],
			['screen and (min-width: 1024px)', {
			  labelOffset: 60,
			  chartPadding: 20
			}]
		];
		  
		new Chartist.Pie('#pie-chart', data, options, responsiveOptions);
		
	}
	var gaugeChart = function(){
		//Gauge chart
		
		new Chartist.Pie('#gauge-chart', {
			series: [20, 10, 30, 40]
		  }, {
			donut: true,
			donutWidth: 60,
			startAngle: 270,
			total: 200,
			showLabel: false,
			plugins: [
			  Chartist.plugins.tooltip()
			]
		});
	}
	var differentSeriesChart = function(){
		// Different configuration for different series
  
		var chart = new Chartist.Line('#different-series', {
			labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
			// Naming the series with the series object array notation
			series: [{
			  name: 'series-1',
			  data: [5, 2, -4, 2, 0, -2, 5, -3]
			}, {
			  name: 'series-2',
			  data: [4, 3, 5, 3, 1, 3, 6, 4]
			}, {
			  name: 'series-3',
			  data: [2, 4, 3, 1, 4, 5, 3, 2]
			}]
		}, {
		fullWidth: true,
			// Within the series options you can use the series names
			// to specify configuration that will only be used for the
			// specific series.
			series: {
			  'series-1': {
				lineSmooth: Chartist.Interpolation.step()
			  },
			  'series-2': {
				lineSmooth: Chartist.Interpolation.simple(),
				showArea: true
			  },
			  'series-3': {
				showPoint: false
			  }
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		}, [
			// You can even use responsive configuration overrides to
			// customize your series configuration even further!
		['screen and (max-width: 320px)', {
			  series: {
				'series-1': {
				  lineSmooth: Chartist.Interpolation.none()
				},
				'series-2': {
				  lineSmooth: Chartist.Interpolation.none(),
				  showArea: false
				},
				'series-3': {
				  lineSmooth: Chartist.Interpolation.none(),
				  showPoint: true
				}
			  }
			}]
		]);
		
	}
	var svgDotAnimationChart = function(){
		 //SVG Animations chart
  
		var chart = new Chartist.Line('#svg-dot-animation', {
			labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
			series: [
			  [12, 4, 2, 8, 5, 4, 6, 2, 3, 3, 4, 6],
			  [4, 8, 9, 3, 7, 2, 10, 5, 8, 1, 7, 10]
			]
		}, {
			low: 0,
			showLine: false,
			axisX: {
			  showLabel: false,
			  offset: 0
			},
			axisY: {
			  showLabel: false,
			  offset: 0
			},
			plugins: [
			  Chartist.plugins.tooltip()
			]
		});
		  
		  // Let's put a sequence number aside so we can use it in the event callbacks
		var seq = 0;
		  
		  // Once the chart is fully created we reset the sequence
		chart.on('created', function() {
			seq = 0;
		});
		  
		// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
		chart.on('draw', function(data) {
			if(data.type === 'point') {
			  // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
			  data.element.animate({
				opacity: {
				  // The delay when we like to start the animation
				  begin: seq++ * 80,
				  // Duration of the animation
				  dur: 500,
				  // The value where the animation should start
				  from: 0,
				  // The value where it should end
				  to: 1
				},
				x1: {
				  begin: seq++ * 80,
				  dur: 500,
				  from: data.x - 100,
				  to: data.x,
				  // You can specify an easing function name or use easing functions from Chartist.Svg.Easing directly
				  easing: Chartist.Svg.Easing.easeOutQuart
				}
			  });
			}
		});
		  
		// For the sake of the example we update the chart every time it's created with a delay of 8 seconds
		chart.on('created', function() {
			if(window.__anim0987432598723) {
			  clearTimeout(window.__anim0987432598723);
			  window.__anim0987432598723 = null;
			}
			window.__anim0987432598723 = setTimeout(chart.update.bind(chart), 8000);
		});
	}
	
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				setChartWidth();	
				lineAnimatedChart();
				scatterChart();	
				simpleLineChart();	
				lineTooltipsChart();		
				withAreaChart();
				biPolarLineChart();
				svgAnimationChart();
				lineSmoothingChart();
				biPolarBarChart();
				overlappingBarsChart();
				multiLineChart();
				stackedBarChart();
				stackedBarChart2();
				horizontalBarChart();
				extremeChart();
				labelPlacementChart();
				animatingDonutChart();
				simplePieChart();
				pieChart();
				gaugeChart();
				differentSeriesChart();
				svgDotAnimationChart(); 
			},
			
			resize:function(){
				setChartWidth();	
				lineAnimatedChart();
				scatterChart();	
				simpleLineChart();	
				lineTooltipsChart();		
				withAreaChart();
				biPolarLineChart();
				svgAnimationChart();
				lineSmoothingChart();
				biPolarBarChart();
				overlappingBarsChart();
				multiLineChart();
				stackedBarChart();
				stackedBarChart2();
				horizontalBarChart();
				extremeChart();
				labelPlacementChart();
				animatingDonutChart();
				simplePieChart();
				pieChart();
				gaugeChart();
				differentSeriesChart();
				svgDotAnimationChart(); 
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		dzChartlist.load();
	});

	jQuery(window).on('resize',function(){
		dzChartlist.resize();
	});     

})(jQuery);
	</script>
		<!--**********************************
            Content body end
        ***********************************-->