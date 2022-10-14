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

        li {
            list-style-type: none;
        }

        .collapsible {
            background-color: #ffffff;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
        }

        form .input:hover {
            color: darkgrey;
            background-color: white;
            transition: 0.3s;
        }

        form .input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            color: grey;
            background: #ffffff;
            background-color: #e8e8e8;
            width: 100%;
            border: 0;
            margin: 0 0 5px;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 3px;
            transition: 0.3s;
        }

        form .inputselect:hover {
            color: darkgrey;
            background-color: white;
            transition: 0.3s;
        }

        form .inputselect {
            font-family: "Roboto", sans-serif;
            outline: 0;
            color: grey;
            background: #ffffff;
            background-color: #e8e8e8;
            width: 100%;
            border: 0;
            margin: 0 0 5px;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 3px;
            transition: 0.3s;
            -webkit-appearance: none;
            -moz-appearance: none;
            content: "▼";
            font-family: "Roboto", sans-serif;
            outline: 0;
            color: grey;
            background: #ffffff;
            width: 100%;
            border: 0;
            margin: 0 0 5px;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 3px;
            transition: 0.3s;

            background-image:
                linear-gradient(45deg, transparent 50%, grey 50%),
                linear-gradient(135deg, grey 50%, transparent 50%);

            background-position:
                calc(100% - 20px) calc(1em + 8px),
                calc(100% - 15px) calc(1em + 8px),
                100% 0;
            background-size:
                5px 5px,
                5px 5px,
                2.5em 2.5em;
            background-repeat: no-repeat;
        }

        .content {
            padding: 1rem;
            /* padding: 0 18px; */
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
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
                <div class="col-md-12 pb-5">
                    <center>
                        <h4 style="color:#24A677 ;">Link Zoom Konsultasi :</h4>
                    </center>
                </div>
                <div class="input-group">
                    <div class="col-md-4 pl-5">
                        <h5>Nama Pasien</h5>
                        <h5>Jenis Kelamin</h5>
                        <h5>Tanggal Lahir</h5>
                        <h5>Jenis Konsultasi</h5>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-md-6">
                        <div class="justify-content-center">
                            <!-- <div class="jarak"></div> -->
                            <!-- <br> -->
                            <div class="banner banner_box_cos text-dark" style="border-radius: 5px 5px 5px 5px">
                                <!-- <div class="jarak"></div> -->
                                <label>Tanggal Konsultasi</label>


                                <!-- </div> -->
                                <!-- </div> -->
                                <form id="payment-form" method="post" action="<?php echo base_url(); ?>Payment/finishKonsultasi?id_pasien=<?php echo $this->session->userdata('id') ?>">
                                    <!-- <form id="payment-form" method="post" action="<?php echo base_url(); ?>konsultasi/checkout?id_pasien=<?php echo $this->session->userdata('id') ?>"> -->
                                    <input type="hidden" name="result_type" id="result-type" value="">
                                    <input type="hidden" name="result_data" id="result-data" value="">
                                    <div class="form-group">
                                        <label for="inputID" hidden>ID</label>
                                        <input type="text" class="form-control" id="inputID" value="<?= 'BOOK' . rand(999, 111) ?>" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPrices" hidden>Harga</label>
                                        <input type="text" class="form-control" id="inputPrice" value="100000" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputQty" hidden>Kuantiti</label>
                                        <input type="number" class="form-control" id="inputQty" value="1" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputServiceName" hidden>Deskripsi</label>
                                        <input type="text" class="form-control" id="inputServiceName" value="Konsultasi Online" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFirstName" hidden>Nama Depan (Cust)</label>
                                        <input type="text" class="form-control" id="inputFirstName" placeholder="Nama Depan" value="Customer" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLastName" hidden>Nama Belakang (Cust)</label>
                                        <input type="text" class="form-control" id="inputLastName" placeholder="Nama Belakang" value="<?php echo $this->session->userdata('name') ?>" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" hidden>Alamat (Cust)</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" value="Indonesia" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCity" hidden>Kota (Cust)</label>
                                        <input type="text" class="form-control" id="inputCity" placeholder="Kota" value="Nusantara" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPostalCode" hidden>Kode Pos (Cust)</label>
                                        <input type="number" class="form-control" id="inputPostalCode" placeholder="Kode Pos" value="123456" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" hidden>Telepon (Cust)</label>
                                        <input type="number" class="form-control" id="inputPhone" placeholder="Telepon" value=" <?php if (!empty($this->session->userdata('no_telp'))) echo $this->session->userdata('no_telp'); ?>" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" hidden>Email (Cust)</label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $this->session->userdata('user') ?>" hidden>
                                    </div>

                                    <input type="date" class="input" id="tanggal_konsultasi" name="tanggal_konsultasi" placeholder="Tanggal Lahir" value="<?php echo $this->input->post('tanggal_konsultasi', TRUE); ?>" readonly>
                                    <br>

                                    <!-- <input type="hidden" name="result_type" id="result-type" value="" readonly>
										<input type="hidden" name="result_data" id="result-data" value="" readonly> -->
                                    <input type="hidden" name="id_gateway" id="id_gateway" readonly>
                                    <input type="hidden" name="tipe_gateway" id="tipe_gateway" readonly>
                                    <input type="hidden" name="tgl" id="tgl" readonly value="2022-07-21">
                                    <input type="hidden" name="id_transaksi" id="id_transaksi" readonly>
                                    <input type="hidden" name="is_free" id="is_free" readonly value="0">
                                    <input type="hidden" name="layanan" id="layanan" readonly value="konsultasi_gizi">

                                    <label>Platform Konsultasi</label>
                                    <select name="id_platform" id="id_platform" class="input validate">
                                        <option value="">Pilih</option>
                                        <option value="Konsultasi_WA">Chatting via WhatsApp</option>
                                        <option value="Konsultasi_ZOOM">Video Call via Zoom</option>
                                    </select>
                                    <span class="error error_id_platform"></span>

                                    <label style="display: none;">Daftarkan orang lain?</label>
                                    <select name="daftarkan" id="daftarkan" class="input validate" style="display: none;">
                                        <option value="">Pilih</option>
                                        <option value="ya">Iya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                    <span class="error error_daftarkan"></span>
                                    <div class="jarak"></div>
                                    <div class="form_daftarkan" style="display: none;">
                                        <div class="input-field col s12">
                                            <input class="active" id="nama" value="" type="text" name="nama" class="input validate field_daftarkan" disabled>
                                            <label for="nama">Nama</label>
                                            <span class="error error_nama"></span>
                                        </div>
                                        <div class="input-field col s12">
                                            <label class="active" for="tgl_lahir">Tgl. Lahir</label>
                                            <input id="tgl_lahir" max="2022-07-20" value="" type="date" name="tgl_lahir" class="input validate field_daftarkan" disabled>
                                            <span class="error error_tgl_lahir"></span>
                                        </div>
                                        <div class="input-field col s12">
                                            <select name="jk" id="jk" class="input validate field_daftarkan">
                                                <option value="">Pilih</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <label>Jenis Kelamin</label>
                                            <span class="error error_jk"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="">
                                                <li class="">
                                                    <div class="collapsible">Antropometri (3)</div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <input placeholder="ID" id="id_pasien" value="<?php echo $this->session->userdata('id') ?>" type="number" name="id_pasien" class="input validate " hidden>
                                                            <div class="input-field col s12">
                                                                <label class="active" for="berat_badan">1. Berat
                                                                    badan ? (Kg) <span style="color: red;">*)</span></label>
                                                                <input placeholder="Berat badan ? (Kg)" oninput="hitung()" id="berat_badan" value="" type="number" name="berat_badan" class="input validate ">
                                                                <span class="error error_berat_badan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="tinggi_badan">2. Tinggi
                                                                    badan ? (cm) <span style="color: red;">*)</span></label>
                                                                <input placeholder="Tinggi badan ? (cm)" oninput="hitung()" id="tinggi_badan" value="" type="number" name="tinggi_badan" class="input validate hitungimt">
                                                                <span class="error error_tinggi_badan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12" style="display: none;">
                                                                <label class="active" for="imt">3. Indeks Massa
                                                                    Tubuh (IMT) {Otomatis} <span style="color: red;">*)</span></label>
                                                                <input placeholder="Indeks Massa Tubuh (IMT) {Otomatis}" id="hasil" value="" type="number" name="hasil" class="input validate ">
                                                                <span class="error error_imt"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible">Biokimia Data / Hasil Laborat (7)</div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="gda">4. GDA </label>
                                                                <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                                                                <span class="error error_gda"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="kreatin_serum">5. Kreatin
                                                                    Serum </label>
                                                                <input placeholder="Kreatin Serum" id="kreatin_serum" value="" type="text" name="kreatin_serum" class="input validate ">
                                                                <span class="error error_kreatin_serum"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="sgot">6. SGOT </label>
                                                                <input placeholder="SGOT" id="sgot" value="" type="text" name="sgot" class="input validate ">
                                                                <span class="error error_sgot"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="sgpt">7. SGPT </label>
                                                                <input placeholder="SGPT" id="sgpt" value="" type="text" name="sgpt" class="input validate ">
                                                                <span class="error error_sgpt"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="albumin">8. Albumin
                                                                </label>
                                                                <input placeholder="Albumin" id="albumin" value="" type="text" name="albumin" class="input validate ">
                                                                <span class="error error_albumin"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="hb">9. HB </label>
                                                                <input placeholder="HB" id="hb" value="" type="text" name="hb" class="input validate ">
                                                                <span class="error error_hb"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="lain_lain">10. Lain-Lain
                                                                </label>
                                                                <input placeholder="Lain-Lain" id="lain_lain" value="" type="text" name="lain_lain" class="input validate ">
                                                                <span class="error error_lain_lain"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible">Clinical History / Fisik Klinik (6)
                                                    </div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="tensi_darah">11. Tensi
                                                                    darah (mmHg) </label>
                                                                <input placeholder="Tensi darah (mmHg)" id="tensi_darah" value="" type="text" name="tensi_darah" class="input validate ">
                                                                <span class="error error_tensi_darah"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="oedema">12. OEDEMA /
                                                                    Bengkak <span style="color: red;">*)</span></label>
                                                                <select name="oedema" id="oedema" class="inputselect validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_oedema"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="keadaan_umum">13. Keadaan
                                                                    umum <span style="color: red;">*)</span></label>
                                                                <select name="keadaan_umum" id="keadaan_umum" class="inputselect validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="sehat">Sehat</option>
                                                                    <option value="lemah">Lemah</option>
                                                                </select>
                                                                <span class="error error_keadaan_umum"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="mual">14. Mual <span style="color: red;">*)</span></label>
                                                                <select name="mual" id="mual" class="inputselect validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_mual"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="muntah">15. Muntah <span style="color: red;">*)</span></label>
                                                                <select name="muntah" id="muntah" class="inputselect validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_muntah"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="diare">16. Diare <span style="color: red;">*)</span></label>
                                                                <select name="diare" id="diare" class="inputselect validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_diare"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible">Dietary History / Riwayat Makan (5)
                                                    </div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="nafsu_makan">17. Nafsu
                                                                    makan <span style="color: red;">*)</span></label>
                                                                <select name="nafsu_makan" id="nafsu_makan" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="baik">Baik</option>
                                                                    <option value="turun">Turun</option>
                                                                </select>
                                                                <span class="error error_nafsu_makan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="kesulitan_mengunyah">18.
                                                                    Kesulitan mengunyah <span style="color: red;">*)</span></label>
                                                                <select name="kesulitan_mengunyah" id="kesulitan_mengunyah" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_kesulitan_mengunyah"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="alergi_makan">19. Alergi
                                                                    makan <span style="color: red;">*)</span></label>
                                                                <select name="alergi_makan" id="alergi_makan" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_alergi_makan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="jika_alergi">20. Jika
                                                                    Anda memiliki alergi </label>
                                                                <input placeholder="Jika Anda memiliki alergi" id="jika_alergi" value="" type="text" name="jika_alergi" class="input validate ">
                                                                <span class="error error_jika_alergi"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="pola_makan_sehari">21.
                                                                    Pola makan sehari berapa kali <span style="color: red;">*)</span></label>
                                                                <select name="pola_makan_sehari" id="pola_makan_sehari" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="1x sehari">1x Sehari</option>
                                                                    <option value="2x sehari">2x Sehari</option>
                                                                    <option value="3x sehari">3x Sehari</option>
                                                                    <option value="4x sehari">4x Sehari</option>
                                                                    <option value="5x sehari">5x Sehari</option>
                                                                    <option value="6x sehari">6x Sehari</option>
                                                                    <option value="7x sehari">7x Sehari</option>
                                                                    <option value="8x sehari">8x Sehari</option>
                                                                    <option value="9x sehari">9x Sehari</option>
                                                                    <option value="10x sehari">10x Sehari</option>
                                                                </select>
                                                                <span class="error error_pola_makan_sehari"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible">Personal History / Riwayat Personal (9)
                                                    </div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="pekerjaan">22. Pekerjaan
                                                                    <span style="color: red;">*)</span></label>
                                                                <select name="pekerjaan" id="pekerjaan" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="pns">Pns</option>
                                                                    <option value="swasta">Swasta</option>
                                                                    <option value="wiraswasta">Wiraswasta</option>
                                                                    <option value="pedagang">Pedagang</option>
                                                                    <option value="petani">Petani</option>
                                                                    <option value="guru">Guru</option>
                                                                    <option value="lainnya">Lainnya</option>
                                                                </select>
                                                                <span class="error error_pekerjaan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="agama">23. Agama <span style="color: red;">*)</span></label>
                                                                <select name="agama" id="agama" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="islam">Islam</option>
                                                                    <option value="kristen">Kristen</option>
                                                                    <option value="katolik">Katolik</option>
                                                                    <option value="hindu">Hindu</option>
                                                                    <option value="budha">Budha</option>
                                                                    <option value="lainnya">Lainnya</option>
                                                                </select>
                                                                <span class="error error_agama"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="pendidikan">24.
                                                                    Pendidikan <span style="color: red;">*)</span></label>
                                                                <select name="pendidikan" id="pendidikan" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="sd">Sd</option>
                                                                    <option value="smp">Smp</option>
                                                                    <option value="sma/smk">Sma/smk</option>
                                                                    <option value="d1">D1</option>
                                                                    <option value="d2">D2</option>
                                                                    <option value="d3">D3</option>
                                                                    <option value="d4">D4</option>
                                                                    <option value="s1">S1</option>
                                                                    <option value="s2">S2</option>
                                                                    <option value="s3">S3</option>
                                                                    <option value="lainnya">Lainnya</option>
                                                                </select>
                                                                <span class="error error_pendidikan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="merokok">25. Merokok ?
                                                                    <span style="color: red;">*)</span></label>
                                                                <select name="merokok" id="merokok" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_merokok"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="riwayat_sakit_keluarga">26. Riwayat sakit
                                                                    keluarga ? </label>
                                                                <input placeholder="Riwayat sakit keluarga ?" id="riwayat_sakit_keluarga" value="" type="text" name="riwayat_sakit_keluarga" class="input validate ">
                                                                <span class="error error_riwayat_sakit_keluarga"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="riwayat_sakit_dahulu">27.
                                                                    Riwayat sakit dahulu ? </label>
                                                                <input placeholder="Riwayat sakit dahulu ?" id="riwayat_sakit_dahulu" value="" type="text" name="riwayat_sakit_dahulu" class="input validate ">
                                                                <span class="error error_riwayat_sakit_dahulu"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="konsumsi_obat">28.
                                                                    Konsumsi obat ? <span style="color: red;">*)</span></label>
                                                                <select name="konsumsi_obat" id="konsumsi_obat" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_konsumsi_obat"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="obat_apa">29. Obat apa ?
                                                                </label>
                                                                <input placeholder="Obat apa ?" id="obat_apa" value="" type="text" name="obat_apa" class="input validate ">
                                                                <span class="error error_obat_apa"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="olahraga">30. Olahraga ?
                                                                    <span style="color: red;">*)</span></label>
                                                                <select name="olahraga" id="olahraga" class="input validate">
                                                                    <option value="">Pilih</option>
                                                                    <option value="ya">Ya</option>
                                                                    <option value="tidak">Tidak</option>
                                                                </select>
                                                                <span class="error error_olahraga"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="input-group" id="show_hide_confirm_password">
                                        <div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
                                            <button onclick="location.href = '<?php echo base_url() ?>konsultasi';" class="btn btn-login hover rounded-pill" name="login">Kembali</button>
                                        </div>
                                        <div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
                                            <button type="submit" class="btn btn-login hover rounded-pill" name="pay-button" id="pay-button">Bayar</button>
                                            <!--  -->
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    // Clue alur
                                    $('#pay-button').click(function(event) {
                                        event.preventDefault();
                                        $(this).attr("disabled", "disabled");
                                        var id_val = $("#inputID").val();
                                        var price_val = $("#inputPrice").val();
                                        // var price_val = $("#inputPrice2").text();
                                        var qty_val = $("#inputQty").val();
                                        //var qty_val = $("#inputQty2").val();
                                        var bookname_val = $("#inputServiceName").val();
                                        // var bookname_val = 'Katering ' + $("#inputBookName2").text();
                                        var firstname_val = $("#inputFirstName").val();
                                        var lastname_val = $("#inputLastName").val();
                                        var address_val = $("#inputAddress").val();
                                        var city_val = $("#inputCity").val();
                                        var postalcode_val = $("#inputPostalCode").val();
                                        var phone_val = $("#inputPhone").val();
                                        var email_val = $("#inputEmail").val();

                                        $.ajax({
                                            url: '<?php echo base_url(); ?>Payment/token_',
                                            cache: false,
                                            data: {
                                                id_param: id_val,
                                                price_param: price_val,
                                                qty_param: qty_val,
                                                bookname_param: bookname_val,
                                                firstname_param: firstname_val,
                                                lastname_param: lastname_val,
                                                address_param: address_val,
                                                city_param: city_val,
                                                postalcode_param: postalcode_val,
                                                phone_param: phone_val,
                                                email_param: email_val
                                            },
                                            success: function(data) {
                                                //location = data;

                                                console.log('token = ' + data);

                                                var resultType = document.getElementById('result-type');
                                                var resultData = document.getElementById('result-data');

                                                function changeResult(type, data) {
                                                    $("#result-type").val(type);
                                                    $("#result-data").val(JSON.stringify(data));
                                                    //resultType.innerHTML = type;
                                                    //resultData.innerHTML = JSON.stringify(data);
                                                }

                                                snap.pay(data, {

                                                    onSuccess: function(result) {
                                                        changeResult('success', result);
                                                        console.log(result.status_message);
                                                        console.log(result);
                                                        $("#payment-form").submit();
                                                    },
                                                    onPending: function(result) {
                                                        changeResult('pending', result);
                                                        console.log(result.status_message);
                                                        $("#payment-form").submit();
                                                    },
                                                    onError: function(result) {
                                                        changeResult('error', result);
                                                        console.log(result.status_message);
                                                        $("#payment-form").submit();
                                                    }
                                                });
                                            },
                                            error: function() {
                                                alert(
                                                    'Cek kembali Server Key / Client Key Anda, sepertinya ada yang kurang sesuai!');
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
        <button onclick="location.href = '<?php echo base_url() ?>konsultasi';" class="btn btn-login hover rounded-pill" name="login">Kembali</button>
    </div>
</body>
</div>
</div>
</div>