<div class="content-body" style="background-color: #24A677;">
    <div class="container-fluid">

        <!-- row -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Admin</h4>
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

                <form action="<?= base_url() ?>dataPasien/updatedata" method="post" enctype="multipart/form-data">

                    <p>
                        1 : Admin <br>
                        2 : Dokter <br>
                        3 : Petugas 1 <br>
                        4 : Petugas 2 <br>
                        5 : User Biasa
                    </p>

                    <!-- <select class="btn dropdown-toggle btn-light" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> -->

                    <input type="hidden" name="id" id="id" value="" min="1" max="5">
                    <div class="form-group">
                        <label for="protein">Role Level </label>
                        <input type="number" class="form-control" id="level" name="level" autocomplete="off" min="1" max="5" value="<?= $data->id_level ?>"></input>
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
            $('#id').val(column1);
            $('#editData').modal('show');
        });
    });
</script>