<head>
    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--Import materialize.css-->
    <!-- <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/> -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <style>
        .btn-login {
            width: 40%;
            background-color: #FF8A00;
            color: white;
            font-style: white;
            font-size: large;
            font-weight: 800px;
        }

        .hover:hover {
            background: var(--secondary--color);
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/banner-cos.css">
    <div class="banner_cos">
        <div class="jarak"></div>
        <h2 class="text-white text-center">Detail Riwayat Transaksi</h2>
        <div class="banner banner_box_cos">
            <div class="jarak"></div>
            <div class="container fluid">
                <?php
                    foreach ($dataTransaksi as $data)
                    {
                ?>
                    <div class="col-md-12 pb-5">
                        <center>
                            <h2><?php echo $data->transaction_id ?></h2>
                        </center>
                    </div>
                    <div class="input-group">
                        <div class="col-md-4 pl-5">
                            <h5>Tanggal Transaksi</h5>
                            <h5>Nama Pasien</h5>
                            <h5>Kode Pasien</h5>
                            <h5>Kode Produk</h5>
                            <h5>Nama Produk</h5>
                            <h5>Tipe Pembayaran</h5>
                            <h5>Kuantitas</h5>
                            <h5>Total Harga</h5>
                            <h5>Catatan</h5>

                        </div>
                        <div class="col-md-6">
                            <p></p>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <br>
            </div>
        </div>
    </div>
    <div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
        <button onclick="location.href = '<?php echo base_url() ?>riwayattransaksi';" class="btn btn-login hover rounded-pill" name="login">Kembali</button>
    </div>
</body>
</div>
</div>
</div>