<div class="content-body" style="background-color: #24A677;">
    <div class="container-fluid">

        <!-- row -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kode Unik</th>
                                    <th>No HP.</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataPasien as $data) : ?>
                                    <tr>
                                        <td><?php echo $data->id_user ?></td>
                                        <td hidden><?php echo $data->status ?></td>
                                        <td><?php echo $data->nama ?></td>
                                        <td><?php echo $data->jk ?></td>
                                        <td><?php echo $data->kode_unik ?></td>
                                        <td><a href="javascript:void(0);"><strong><?php echo $data->no_hp ?></strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><?php echo $data->email ?></strong></a></td>
                                        <td><?php echo $data->level ?></td>
                                        <td><?php echo $data->created_at ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <button id="btnUpdate" class="btn btn-sm btn-info" role="button" ><i class="fa fa-edit"></i></button>
                                            </div>
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

<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">FORM Ganti Role Pengguna</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url() ?>dataPasien/togglePasien" method="post">
                <center>
                    <input type="hidden" class="form-control" id="id_hapus" name="id_hapus" autocomplete="off" required></input>
                    <h3> STATUS SEKARANG: <h3>
                    <b>
                        <input type="text" class="form-control" id="status_input_hapus" name="status_input_hapus" readonly></input>
                    </b>
                    <input type="hidden" class="form-control" id="nama_hapus" name="nama_hapus" autocomplete="off" required></input>

                    <br>
                    <hr>

                    <!-- <p>
                        0 : Non Aktif <br>
                        1 : Aktif <br>
                    </p>

                    <br>
                    <hr> -->

                    <select id="status_hapus" name="status_hapus" class="btn dropdown-toggle btn-light" aria-label="Default select example">
                        <option selected disabled>Pilih</option>
                        <option value="0">Non Aktif</option>
                        <option value="1">Aktif</option>
                    </select>

                        <button type="submit" id="btnNonAktif" class="btn btn-sm btn-info" role="button">Submit</button>

                </center>
                </form>
            </div>

        </div>
    </div>
</div>
</div>

<script>
$("#id").attr({
   "max" : 5,
   "min" : 1
});

$(document).ready(function()
    {
        $('#example2 tr #btnUpdate').on('click', function()
        {
            var currentRow = $(this).closest("tr");
            var column1 = currentRow.find("td:eq(0)").text();
            var column2 = currentRow.find("td:eq(1)").text();
            var column3 = currentRow.find("td:eq(2)").text();
            $('#id_hapus').val(column1.trim());
            $('#status_input_hapus').val(column2.trim());
            $('#nama_hapus').val(column3.trim());
            $('#editData').modal('show');
        });
    });
</script>