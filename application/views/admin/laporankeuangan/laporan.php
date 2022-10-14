<div class="content-body" style="background-color: #24A677;">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto">
                <h2 class="text-white font-w600">Laporan Keuangan</h2>
            </div>
        </div>

        <div class="row">
            <!-- <center> -->
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Extreme responsive configuration</h4>
                    </div>
                    <div class="card-body">
                        <div id="stacked-bar-chart2" class="ct-chart ct-golden-section chartlist-chart"></div>
                    </div>
                </div>

                <div>
                    <h3>Keterangan : Quarter diisi nama bulan, angka diisi nominal uang</h3>
                </div>                
                
            </div>
            
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
									<th>
										<center>Action</center>
									</th>
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
                                        <td><?php echo $data->date ?></td>
                                        <?php
                                            $acc_methods = array('capture', 'settlement', 'authorize');
                                            $pnd_methods = array('pending');
                                            $dnd_methods = array('deny', 'cancel', 'expire', 'failure', 'refund', 'chargeback', 'partial_refund', 'partial_chargeback', 'authorize');
                                            if (in_array($data->transaction_status, $acc_methods))
                                            {
                                        ?>
                                        <td><span class="badge light badge-success">Paid</span></td>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                        if (in_array($data->transaction_status, $pnd_methods))
                                            {
                                        ?>
                                        <td><span class="badge light badge-warning">Pending</span></td>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                        if (in_array($data->transaction_status, $pnd_methods))
                                            {
                                        ?>
                                        <td><span class="badge light badge-danger">Cancel</span></td>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                        ?>
                                        <td>
                                            <div class="dropdown">
												<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
													<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="<?php echo base_url() ?>riwayattransaksi/detail/<?php echo $data->id_patient . "/" . $data->transaction_id; ?>">Detail Riwayat</a>
												</div>
											</div>
                                        </td>
                                    </tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        <br>
    </div>
</div>

