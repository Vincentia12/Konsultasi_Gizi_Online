		<!--**********************************
            Content body start
        ***********************************-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<div class="content-body" style="background-color: #24A677;">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-white font-w600">Katering Management</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
                    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#addData"><i class="fa fa-plus"></i>Tambah Data</button>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="tableMenu">
								<thead>
									<tr class="table-success">
										<th>
											<center>Nama Menu</center>
										</th>
										<th>
											<center>Deskripsi</center>
										</th>
										<th>
											<center>Hari</center>
										</th>
										<th>
											<center>Status</center>
										</th>
										<th>
											<center>Gambar</center>
										</th>
										<th>
											<center>Action</center>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($katering as $data) : ?>
									<tr>
										<td hidden>
											<center><?php echo $data->id_katering_diet_menu ?></center>
										</td>
										<td hidden>
											<center><?php echo $data->id_katering_diet ?></center>
										</td>
										<td>
											<center><?php echo $data->nama_menu ?></center>
										</td>
										<td>
											<center><?php echo $data->deskripsi ?></center>
										</td>
										<td hidden>
											<center><?php echo $data->id_katering_diet ?></center>
										</td>
										<td>
											<center><?php echo $data->hari ?></center>
										</td>
										<td>
											<center><?php if ($data->is_aktif == 1) echo "Aktif"; else echo "Tidak Aktif"; ?>
											</center>
										</td>
										<td>
											<center>
												<img class="card-img-top" src="<?php echo $data->foto ?>" alt="Card image cap"
													style="height: 150px; object-fit: cover;">
											</center>
										</td>
										<td>
                                            <center>
											<a class="btn btn-sm btn-info" role="button" id="btnUpdateMenu"><i class="fa fa-edit"></i></a>
											<a class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a> 
                                            </center>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
                    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#addDataHarga"><i class="fa fa-plus"></i>Tambah Data</button>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="tableHarga">
								<thead>
									<tr class="table-success">
										<th>
											<center>Nama Menu</center>
										</th>
										<th>
											<center>Harga</center>
										</th>
										<th>
											<center>Action</center>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($hargakatering as $data) : ?>
									<tr>
										<td hidden>
											<center><?php echo $data->id_katering_diet_menu ?></center>
										</td>
										<td hidden>
											<center><?php echo $data->id_katering_diet_harga ?></center>
										</td>
										<td>
											<center><?php echo $data->nama_menu ?></center>
										</td>
										<td>
											<center><?php echo $data->harga ?></center>
										</td>
										<td>
                                            <center>
											<a class="btn btn-sm btn-info" role="button"id="btnUpdateHarga"><i class="fa fa-edit"></i></a>
											<a class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                                            </center>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
                <br>
				<!-- <br> -->
			</div>
		</div>

		<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KATERING</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url() ?>kateringAdmin/insertdata" method="post">
							<input type="hidden" name="id" id="id">
							<div class="form-group">
								<label for="nama_menu">Nama Menu</label>
								<input type="text" class="form-control" id="nama_menu" name="nama_menu"
									autocomplete="off" required>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<input type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off"
									required></input>
							</div>
							<select id="hari" name="hari" class="btn dropdown-toggle btn-light" aria-label="Default select example">
								<option selected>Hari</option>
								<option value="3">Senin</option>
								<option value="4">Selasa</option>
								<option value="5">Rabu</option>
								<option value="6">Kamis</option>
								<option value="7">Jumat</option>
								<option value="8">Sabtu</option>
								<option value="9">Minggu</option>
							</select>
							<div class="form-group">
								<input type="hidden" class="form-control" id="created_by" name="created_by" autocomplete="off" value="<?php echo $this->session->userdata('id'); ?>" required></input>
							</div>
							<div class="form-group">
								<label for="foto_url">Foto URL</label>
								<input type="text" class="form-control" id="foto_url" name="foto_url" autocomplete="off" required>
								<!-- <label for="deskripsi">Gambar</label>
								<input type="file" class="form-control" id="fotopost" name="fotopost" autocomplete="off" required></input> -->
							</div>


							<div class="modal-footer">
								<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
								<button type="submit" class="btn btn-primary">Tambah Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal ubah data -->

		<div class="modal fade" id="editDataMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">FORM UBAH DATA KATERING</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url() ?>kateringAdmin/updatedataMenu" method="post">
							<input type="hidden" name="id_update" id="id_update">
							<div class="form-group">
								<label for="nama_menu_update">Nama Menu</label>
								<input type="text" class="form-control" id="nama_menu_update" name="nama_menu_update"
									autocomplete="off" required>
							</div>
							<div class="form-group">
								<label for="deskripsi_update">Deskripsi</label>
								<input type="text" class="form-control" id="deskripsi_update" name="deskripsi_update" autocomplete="off"
									required></input>
							</div>
							<!-- <input type="text" class="form-control" id="deskripsi_update" name="deskripsi_update" autocomplete="off" required></input> -->
							<select id="hari_update" name="hari_update" class="btn dropdown-toggle btn-light" aria-label="Default select example">
								<option selected disabled>Hari</option>
								<option value="3">Senin</option>
								<option value="4">Selasa</option>
								<option value="5">Rabu</option>
								<option value="6">Kamis</option>
								<option value="7">Jumat</option>
								<option value="8">Sabtu</option>
								<option value="9">Minggu</option>
							</select>
							<div class="form-group">
								<label for="foto_url_update">Foto URL</label>
								<input type="text" class="form-control" id="foto_url_update" name="foto_url_update" autocomplete="off" required>
								<!-- <input type="file" class="form-control" id="fotopost_update" name="fotopost_update" autocomplete="off" required></input> -->
							</div>


							<div class="modal-footer">
								<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
								<button type="submit" class="btn btn-primary">Ubah Data</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="modal fade" id="addDataHarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA HARGA KATERING</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url() ?>kateringAdmin/insertdataHarga" method="post">
							<!-- <input type="" name="id_harga" id="id_harga"> -->
							
							<select id="id_menu_tambah" name="id_menu_tambah" class="btn dropdown-toggle btn-light" aria-label="Default select example">
								<option selected disabled>Pilih Paket</option>
								<?php foreach ($katering as $data) { ?>
									<option value="<?php echo $data->id_katering_diet_menu?>"><?php echo "ID : " . $data->id_katering_diet_menu . " | " .  $data->nama_menu ?></option>
								<?php } ?>
							</select>

							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="text" class="form-control" id="harga" name="harga" autocomplete="off"
									required></input>
							</div>
							<div class="modal-footer">
								<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
								<button type="submit" class="btn btn-primary">Tambah Data</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="modal fade" id="editDataHarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">FORM UBAH DATA HARGA KATERING</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>	
					<div class="modal-body">
						<form action="<?= base_url() ?>kateringAdmin/updatedataHarga" method="post">
							<input type="text" name="id_harga_update" id="id_harga_update">
							
							<div class="form-group">
								<label for="harga_update">Harga</label>
								<input type="text" class="form-control" id="harga_update" name="harga_update" autocomplete="off"
									required></input>
							</div>
							<div class="modal-footer">
								<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
								<button type="submit" class="btn btn-primary">Ubah Data</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

		<!-- Modal hapus data -->
		<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Anda ingin menghapus data ini?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="button" class="btn btn-danger" id="btdelete">Hapus</button>
					</div>
				</div>
			</div>
		</div>


		<script>
			$(document).ready(function()
		    {
		        $('#tableMenu tr #btnUpdateMenu').on('click', function()
		        {
		            var currentRow = $(this).closest("tr");
		            var column1 = currentRow.find("td:eq(0)").text();
		            var column2 = currentRow.find("td:eq(2)").text();
		            var column3 = currentRow.find("td:eq(2)").text();
		            var column4 = currentRow.find("td:eq(4)").text();
		            $('#id_update').val(column1.trim());
		            $('#nama_menu_update').val(column2.trim());
		            $('#deskripsi_update').val(column3.trim(0));
		            $('#hari_update').val(column4.trim());
		            $('#editDataMenu').modal('show');
		        });

				$('#tableHarga tr #btnUpdateHarga').on('click', function()
		        {
		            var currentRow = $(this).closest("tr");
		            var column0 = currentRow.find("td:eq(0)").text();
		            var column1 = currentRow.find("td:eq(3)").text();
		            $('#id_harga_update').val(column0.trim());
		            $('#harga_update').val(column1.trim());
		            $('#editDataHarga').modal('show');
		        });

		    });
		</script>

		<script>
			//menampilkan data ketabel dengan plugin datatables
			
			$('#tableMenu').DataTable();
			$('#tableHarga').DataTable();

			//menampilkan modal dialog saat tombol hapus ditekan
			$('#tableMenu').on('click', '.item-delete', function () {
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
						url: '<?php echo base_url() ?>kateringAdmin/delete/',
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

            $('#tableHarga').on('click', '.item-delete', function () {
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
						url: '<?php echo base_url() ?>kateringAdmin/delete/',
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
