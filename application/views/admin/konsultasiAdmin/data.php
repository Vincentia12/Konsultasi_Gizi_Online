		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body" style="background-color: #24A677;">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-white font-w600">Data Konsultasi</h2>
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
											<center>Status</center>
										</th>
										<th>
											<center>Detail</center>
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
                                        		    <td><?php echo $data->nama ?></td>
                                        		    <td><?php echo $data->dokter ?></td>
                                        		    <td><?php echo $data->room_date ?></td>
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
		                            								<a class="btn btn-sm btn-info" href="<?php echo base_url() ?>riwayattransaksi/detail/<?php echo $data->id_patient. '/' . $data->transaction_id; ?>" title="OpenLink"><i class="">Lakukan Konsultasi Zoom</i></a>
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
		                            								<a class="btn btn-sm btn-info" href="https://wa.me/6281232317320" target="_blank" title="OpenLink"><i class="">Lakukan Konsultasi WA</i></a>
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
														}
													?>
													
													<?php if ($this->session->userdata('idlevel') != 5) { ?>
														<td>
															<div class="dropdown">
																<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
																	<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																</button>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="<?php echo base_url() ?>riwayattransaksi/detail/<?php echo $data->id_patient. '/' . $data->transaction_id; ?>">Detail Riwayat</a>
																	</div>
															</div>
                                            			</td>
													<?php } ?>

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
				<br>
				<!-- <br> -->
			</div>
		</div>

		<script>
			//menampilkan data ketabel dengan plugin datatables
			$('#tableKonversi').DataTable();

			//menampilkan modal dialog saat tombol hapus ditekan
			$('#tableKonversi').on('click', '.item-delete', function () {
				//ambil data dari atribute data 
				var id = $(this).attr('data');
				$('#myModalDelete').modal('show');
				//ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
				//pada controller mahasiswa
				$('#btdelete').unbind().click(function () {
					$.ajax({
						type: 'ajax',
						method: 'get',
						async: false,
						url: '<?php echo base_url() ?>konversi/delete/',
						data: {
							id: id
						},
						dataType: 'json',
						success: function (response) {
							$('#myModalDelete').modal('hide');
							location.reload();
						}
					});
				});
			});

		</script>
		<!--**********************************
            Content body end
        ***********************************-->
