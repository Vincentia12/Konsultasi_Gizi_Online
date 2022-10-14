		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body" style="background-color: #24A677;">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-white font-w600">Konversi Management</h2>
					</div>
				</div>
				<button class="btn btn-primary mb-2" data-toggle="modal" data-target="#addData"><i class="fa fa-plus"></i>Tambah Data</button>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="tableKonversi">
								<thead>
									<tr class="table-success">
										<th>
											<center>Konversi Gizi</center>
										</th>
										<th>
											<center>Prot.</center>
										</th>
										<th>
											<center>Lemak</center>
										</th>
										<th>
											<center>Karb.</center>
										</th>
										<th>
											<center>Kal.</center>
										</th>
										<th>
											<center>Vitamin</center>
										</th>
										<th>
											<center>Mineral</center>
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
									<?php foreach ($data as $data) : ?>
									<tr>
										<td>
											<center><?php echo $data->konversi_gizi ?></center>
										</td>
										<td>
											<center><?php echo $data->protein ?></center>
										</td>
										<td>
											<center><?php echo $data->lemak ?></center>
										</td>
										<td>
											<center><?php echo $data->karbo ?></center>
										</td>
										<td>
											<center><?php echo $data->kalori ?></center>
										</td>
										<td>
											<center><?php echo $data->vitamin ?></center>
										</td>
										<td>
											<center><?php echo $data->mineral ?></center>
										</td>
										<td>
											<center><img src="<?= base_url() ?>assets/Admin/images/konversi/<?= $data->foto ?>" alt="foto">
											</center>
										</td>
										<td>
											<a href="" class="btn btn-sm btn-info" role="button" data-toggle="modal" data-target="#editData"><i class="fa fa-edit"></i></a>
											<a href="<?= base_url() ?>konversi/deletedata/<?= $data->id_konversi_gizi ?>/<?= $data->foto ?>" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- <br> -->
			</div>
		</div>

		<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KONVERSI GIZI</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url() ?>konversi/insertdata" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" id="id">
							<div class="form-group">
								<label for="konversi_gizi">Konversi Gizi</label>
								<input type="text" class="form-control" id="konversi_gizi" name="konversi_gizi"
									autocomplete="off" required>
							</div>
							<div class="form-group">
								<label for="protein">Protein</label>
								<input type="number" class="form-control" id="protein" name="protein" autocomplete="off"
									required></input>
							</div>
							<div class="form-group">
								<label for="lemak">Lemak</label>
								<input type="number" class="form-control" id="lemak" name="lemak" autocomplete="off"
									required></input>
							</div>
							<div class="form-group">
								<label for="karbo">Karbohidrat</label>
								<input type="number" class="form-control" id="karbo" name="karbo" autocomplete="off"
									required></input>
							</div>
							<div class="form-group">
								<label for="kalori">Kalori</label>
								<input type="number" class="form-control" id="kalori" name="kalori" autocomplete="off"
									required></input>
							</div>
							<div class="form-group">
								<label for="vitamin">Vitamin</label>
								<input type="number" class="form-control" id="vitamin" name="vitamin" autocomplete="off"
									required></input>
							</div>
							<div class="form-group">
								<label for="mineral">Mineral</label>
								<input type="number" class="form-control" id="mineral" name="mineral" autocomplete="off"
									required></input>
							</div>
							<div class="form-group">
								<label for="deskripsi">Gambar</label>
								<input type="file" class="form-control" id="fotopost" name="fotopost" autocomplete="off"
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

        <!-- Modal ubah data -->

		<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KONVERSI GIZI</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

                        <!-- <form action="<?= base_url() ?>konversi/updatedata" method="post" enctype="multipart/form-data">
                            <label>Bahan</label><br>
                            <input type="text" name="konversi_gizi" value="<?= $data->konversi_gizi ?>"><br><br>
                            <label>Protein</label><br>
                            <input type="text" name="protein" value="<?= $data->protein ?>"><br><br>
                            <label>Lemak</label><br>
                            <input type="text" name="lemak" value="<?= $data->lemak ?>"><br><br>
                            <label>Karbohidrat</label><br>
                            <input type="text" name="karbo" value="<?= $data->karbo ?>"><br><br>
                            <label>Kalori</label><br>
                            <input type="text" name="kalori" value="<?= $data->kalori ?>"><br><br>
                            <label>Vitamin</label><br>
                            <input type="text" name="vitamin" value="<?= $data->vitamin ?>"><br><br>
                            <label>Mineral</label><br>
                            <input type="text" name="mineral" value="<?= $data->mineral ?>"><br><br>
                            <label>foto</label><br>
                            <img src="<?= base_url() ?>assets/picture/<?= $data->foto ?>" alt="foto">
                            <input type="file" name="fotopost"><br><br>

                            
                            <input type="hidden" name="filelama" value="<?= $data->foto ?>">
                            
                            <input type="hidden" name="id_konversi_gizi" value="<?= $data->id_konversi_gizi ?>">

                            <input type="submit" name="submit" value="Submit" class="btn btn-default">
                        </form> -->
                    
						<form action="<?= base_url() ?>konversiAdmin/updatedata" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" id="id">
							<div class="form-group">
								<label for="konversi_gizi">Konversi Gizi</label>
								<input type="text" class="form-control" id="konversi_gizi" name="konversi_gizi" autocomplete="off" value="<?= $data->konversi_gizi ?>">
							</div>
							<div class="form-group">
								<label for="protein">Protein</label>
								<input type="number" class="form-control" id="protein" name="protein" autocomplete="off" value="<?= $data->protein ?>"></input>
							</div>
							<div class="form-group">
								<label for="lemak">Lemak</label>
								<input type="number" class="form-control" id="lemak" name="lemak" autocomplete="off" value="<?= $data->lemak ?>"></input>
							</div>
							<div class="form-group">
								<label for="karbo">Karbohidrat</label>
								<input type="number" class="form-control" id="karbo" name="karbo" autocomplete="off" value="<?= $data->karbo ?>"></input>
							</div>
							<div class="form-group">
								<label for="kalori">Kalori</label>
								<input type="number" class="form-control" id="kalori" name="kalori" autocomplete="off" value="<?= $data->kalori ?>"></input>
							</div>
							<div class="form-group">
								<label for="vitamin">Vitamin</label>
								<input type="number" class="form-control" id="vitamin" name="vitamin" autocomplete="off" value="<?= $data->vitamin ?>"></input>
							</div>
							<div class="form-group">
								<label for="mineral">Mineral</label>
								<input type="number" class="form-control" id="mineral" name="mineral" autocomplete="off" value="<?= $data->mineral ?>"></input>
							</div>
							<div class="form-group">
                                <label>Foto</label>
                                <br>
                                <img src="<?= base_url() ?>assets/Admin/images/konversi/<?= $data->foto ?>" alt="foto">
                                <br>
								<input type="file" class="form-control" id="fotopost" name="fotopost" autocomplete="off"></input>
                                <!-- file lama -->
                                <input type="hidden" name="filelama" value="<?= $data->foto ?>">
                                <!-- ID -->
                                <input type="hidden" name="id_konversi_gizi" value="<?= $data->id_konversi_gizi ?>">
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
