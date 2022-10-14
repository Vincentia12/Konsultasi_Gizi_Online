<div class="content-body" style="background-color: #24A677;">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
            <div class="mr-auto"></div>
        </div>
        <form action="<?= base_url() ?>konversi/updatedata" method="post" enctype="multipart/form-data">
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

                <!-- file lama -->
                <input type="hidden" name="filelama" value="<?= $data->foto ?>">
                <!-- ID -->
                <input type="hidden" name="id_konversi_gizi" value="<?= $data->id_konversi_gizi ?>">

                <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>
    </div>
</div>