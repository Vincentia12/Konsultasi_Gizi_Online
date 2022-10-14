<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">

</head>

<body>

    <div class="container">
        <h1>Simple Crud image Codeigniter</h1>
        <hr>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="container">
        <h2>Edit User</h2>
        <div class="row">
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
    <!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>