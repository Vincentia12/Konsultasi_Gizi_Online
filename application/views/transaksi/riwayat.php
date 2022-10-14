<div class="content-body" style="background-color: #24A677;">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-white font-w600">Riwayat Transaksi</h2>
					</div>
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
                                            	if (in_array($data->transaction_status, $dnd_methods))
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
			</div>
			<hr>
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-white font-w600">Riwayat Konsultasi</h2>
					</div>
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
											<center>Room Name</center>
										</th>
										<th>
											<center>Patient</center>
										</th>
										<th>
											<center>Dokter</center>
										</th>
										<th>
											<center>Room Date</center>
										</th>
										<th>
											<center>Zoom URL</center>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										if (!empty($dataKonsultasi))
										{
											foreach ($dataKonsultasi as $data) : ?>
                                        		<tr class="text-center">
                                        		    <td>01</td>
                                        		    <td><?php echo $data->room_name ?></td>
                                        		    <td><?php echo $this->session->userdata('name') ?></td>
                                        		    <td><?php echo $data->nama ?></td>
                                        		    <td>
														<?php
															$date = strtotime($data->room_date);
															echo date('l, d F Y H:i:s', $date);
														?>
													</td>
													<?php 
														switch ($data->room_name) 
														{
															case "Konsultasi_ZOOM":
													?>
													<?php 
													if ($data->is_finished == 0)
													{
													?>
														<td class="text-center">
	                            							<a class="btn btn-sm btn-info" href="<?php echo $data->room_url; ?>" title="OpenLink"><i class="">Open Link</i></a>
                        								</td>
													<?php 
													}
													else
													{
													?>
														<td class="text-center">
	                            							<a class="btn" title="Finished" style="background-color: #33cc33;"><i class="">Finished</i></a>
                        								</td>
													<?php
													}
													?>
													<?php 
														break;
														case "Konsultasi_WA":
													?>
													<?php 
														if ($data->is_finished == 0)
														{
													?>
														<td class="text-center">
	                            							<a class="btn btn-sm btn-info" href="https://wa.me/6281232317320" target="_blank" title="OpenLink"><i class="">Chat WA</i></a>
                        								</td>
													<?php 
														}
														else
														{
													?>
														<td class="text-center">
	                            							<a class="btn" title="Finished" style="background-color: #33cc33;"><i class="">Finished</i></a>
                        								</td>
													<?php
														}
													?>
													<?php
														break;
														}
													?>

                                        		</tr>
									<?php 
											endforeach; 
										}
										else
										{
											?>

											<?php
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<hr>

			</div>
		</div>
        <div class="jarak"></div>
		</div>
		</div>
		</div>