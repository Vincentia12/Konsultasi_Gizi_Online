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

        .input:hover {
            color: darkgrey;
            background-color: white;
            transition: 0.3s;
        }

        .input {
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

        .inputselect:hover {
            color: darkgrey;
            background-color: white;
            transition: 0.3s;
        }

        .inputselect {
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
            /* display: none; */
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
            <?php 
                foreach ($dataKonsultasi as $data) 
                {
            ?>
                <div class="col-md-12 pb-5">
                    <center>
                        <h4 style="color:#24A677 ;">Link Zoom Konsultasi :</h4>
                        <a href="<?php echo $data->room_url; ?>">
                        <h3><?php echo $data->room_url; ?></h5>
                        </a>
                    </center>
                </div>
                <div>
                    <center>
                        <div class="col-md-12">
                            <h5>Nama Pasien : <?php echo $data->nama; ?> </h5>
                            <h5>Jenis Kelamin : <?php echo $data->jk; ?></h5>
                            <h5>Tanggal Lahir : <?php echo $data->tgl_lahir; ?></h5>
                            <h5>Jenis Konsultasi : <?php echo $data->id_platform; ?></h5>
                        </div>
                    </center>
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
                                    <input type="datetime-local" value="<?php echo $data->room_date; ?>" class="input" id="tanggal_konsultasi" name="tanggal_konsultasi" placeholder="Tanggal Lahir" value="<?php echo $this->input->post('tanggal_konsultasi', TRUE); ?>" readonly>
                                    <br>
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
                                                                <input placeholder="Berat badan ? (Kg)" oninput="hitung()" id="berat_badan" value="<?php echo $data->berat_badan; ?>" type="number" name="berat_badan" class="input validate ">
                                                                <span class="error error_berat_badan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="tinggi_badan">2. Tinggi
                                                                    badan ? (cm) <span style="color: red;">*)</span></label>
                                                                <input placeholder="Tinggi badan ? (cm)" oninput="hitung()" id="tinggi_badan" value="<?php echo $data->tinggi_badan; ?>" type="number" name="tinggi_badan" class="input validate hitungimt">
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
                                                                <input placeholder="GDA" id="gda" value="<?php echo $data->gda; ?>" type="text" name="gda" class="input validate ">
                                                                <span class="error error_gda"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="kreatin_serum">5. Kreatin
                                                                    Serum </label>
                                                                <input placeholder="Kreatin Serum" id="kreatin_serum" value="<?php echo $data->kreatin_serum; ?>" type="text" name="kreatin_serum" class="input validate ">
                                                                <span class="error error_kreatin_serum"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="sgot">6. SGOT </label>
                                                                <input placeholder="SGOT" id="sgot" value="<?php echo $data->sgot; ?>" type="text" name="sgot" class="input validate ">
                                                                <span class="error error_sgot"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="sgpt">7. SGPT </label>
                                                                <input placeholder="SGPT" id="sgpt" value="<?php echo $data->sgpt; ?>" type="text" name="sgpt" class="input validate ">
                                                                <span class="error error_sgpt"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="albumin">8. Albumin
                                                                </label>
                                                                <input placeholder="Albumin" id="albumin" value="<?php echo $data->albumin; ?>" type="text" name="albumin" class="input validate ">
                                                                <span class="error error_albumin"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="hb">9. HB </label>
                                                                <input placeholder="HB" id="hb" value="<?php echo $data->hb; ?>" type="text" name="hb" class="input validate ">
                                                                <span class="error error_hb"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="lain_lain">10. Lain-Lain
                                                                </label>
                                                                <input placeholder="Lain-Lain" id="lain_lain" value="<?php echo $data->lain_lain; ?>" type="text" name="lain_lain" class="input validate ">
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
                                                                <input placeholder="Tensi darah (mmHg)" id="tensi_darah" value="<?php echo $data->tensi_darah; ?>" type="text" name="tensi_darah" class="input validate ">
                                                                <span class="error error_tensi_darah"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="oedema">12. OEDEMA /
                                                                    Bengkak <span style="color: red;">*)</span></label>
                                                                <input placeholder="Oedema" id="oedema" value="<?php echo $data->oedema; ?>" type="text" name="oedema" class="input validate ">
                                                                <span class="error error_oedema"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="keadaan_umum">13. Keadaan
                                                                    umum <span style="color: red;">*)</span></label>
                                                                <input placeholder="Keadaan Umum" id="keadaan_umum" value="<?php echo $data->keadaan_umum; ?>" type="text" name="keadaan_umum" class="input validate ">
                                                                <span class="error error_keadaan_umum"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="mual">14. Mual <span style="color: red;">*)</span></label>
                                                                <input placeholder="Mual" id="mual" value="<?php echo $data->mual; ?>" type="text" name="mual" class="input validate ">
                                                                <span class="error error_mual"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="muntah">15. Muntah <span style="color: red;">*)</span></label>
                                                                <input placeholder="Muntah" id="muntah" value="<?php echo $data->muntah; ?>" type="text" name="muntah" class="input validate ">
                                                                <span class="error error_muntah"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="diare">16. Diare <span style="color: red;">*)</span></label>
                                                                <input placeholder="Diare" id="diare" value="<?php echo $data->diare; ?>" type="text" name="diare" class="input validate ">
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
                                                                    <input placeholder="Nafsu Makan" id="nafsu_makan" value="<?php echo $data->nafsu_makan; ?>" type="text" name="nafsu_makan" class="input validate ">
                                                                <span class="error error_nafsu_makan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="kesulitan_mengunyah">18.
                                                                    Kesulitan mengunyah <span style="color: red;">*)</span></label>
                                                                <input placeholder="Kesulitan Mengunyah" id="kesulitan_mengunyah" value="<?php echo $data->kesulitan_mengunyah; ?>" type="text" name="kesulitan_mengunyah" class="input validate ">
                                                                <span class="error error_kesulitan_mengunyah"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="alergi_makan">19. Alergi
                                                                    makan <span style="color: red;">*)</span></label>
                                                                    <input placeholder="Alergi" id="alergi_makan" value="<?php echo $data->alergi_makan; ?>" type="text" name="alergi_makan" class="input validate ">
                                                                <span class="error error_alergi_makan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="jika_alergi">20. Jika
                                                                    Anda memiliki alergi </label>
                                                                <input placeholder="Jika Anda memiliki alergi" id="jika_alergi" value="<?php echo $data->jika_alergi; ?>" type="text" name="jika_alergi" class="input validate ">
                                                                <span class="error error_jika_alergi"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="pola_makan_sehari">21.
                                                                    Pola makan sehari berapa kali <span style="color: red;">*)</span></label>
                                                                    <input placeholder="Pola Makan Sehari" id="pola_makan_sehari" value="<?php echo $data->pola_makan_sehari; ?>" type="text" name="pola_makan_sehari" class="input validate ">
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
                                                                    <input placeholder="Pekerjaan" id="pekerjaan" value="<?php echo $data->pekerjaan; ?>" type="text" name="pekerjaan" class="input validate ">
                                                                <span class="error error_pekerjaan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="agama">23. Agama <span style="color: red;">*)</span></label>
                                                                <input placeholder="Agama" id="agama" value="<?php echo $data->agama; ?>" type="text" name="agama" class="input validate ">
                                                                <span class="error error_agama"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="pendidikan">24.
                                                                    Pendidikan <span style="color: red;">*)</span></label>
                                                                    <input placeholder="Pendidikan" id="pendidikan" value="<?php echo $data->pendidikan; ?>" type="text" name="pendidikan" class="input validate ">
                                                                <span class="error error_pendidikan"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="merokok">25. Merokok ?
                                                                    <span style="color: red;">*)</span></label>
                                                                    <input placeholder="Merokok" id="merokok" value="<?php echo $data->merokok; ?>" type="text" name="merokok" class="input validate ">
                                                                <span class="error error_merokok"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="riwayat_sakit_keluarga">26. Riwayat sakit
                                                                    keluarga ? </label>
                                                                <input placeholder="Riwayat sakit keluarga ?" id="riwayat_sakit_keluarga" value="<?php echo $data->riwayat_sakit_keluarga; ?>" type="text" name="riwayat_sakit_keluarga" class="input validate ">
                                                                <span class="error error_riwayat_sakit_keluarga"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="riwayat_sakit_dahulu">27.
                                                                    Riwayat sakit dahulu ? </label>
                                                                <input placeholder="Riwayat sakit dahulu ?" id="riwayat_sakit_dahulu" value="<?php echo $data->riwayat_sakit_dahulu; ?>" type="text" name="riwayat_sakit_dahulu" class="input validate ">
                                                                <span class="error error_riwayat_sakit_dahulu"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="konsumsi_obat">28.
                                                                    Konsumsi obat ? <span style="color: red;">*)</span></label>
                                                                <input placeholder="Konsumsi Obat" id="konsumsi_obat" value="<?php echo $data->konsumsi_obat; ?>" type="text" name="konsumsi_obat" class="input validate ">
                                                                <span class="error error_konsumsi_obat"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="obat_apa">29. Obat apa ?
                                                                </label>
                                                                <input placeholder="Obat apa ?" id="obat_apa" value="<?php echo $data->obat_apa; ?>" type="text" name="obat_apa" class="input validate ">
                                                                <span class="error error_obat_apa"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label class="active" for="olahraga">30. Olahraga ?
                                                                    <span style="color: red;">*)</span></label>
                                                                <input placeholder="Olahraga" id="olahraga" value="<?php echo $data->olahraga; ?>" type="text" name="olahraga" class="input validate ">
                                                                <span class="error error_olahraga"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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
    <div class="jarak"></div>
    <div class="input-group">
        <div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
            <button onclick="location.href = '<?php echo base_url() ?>konsultasiAdmin'" class="btn btn-login hover rounded-pill" name="login" style="color: green; background-color: white">Kembali</button>
        </div>
        <div class="row mb-3 pt-6 col-6 mx-auto justify-content-center">
            <?php if ($data->is_finished == 0){ ?>
                <button onclick="location.href = '<?php echo base_url() ?>riwayattransaksi/finish/<?php echo $data->transaction_id; ?>';" class="btn btn-login hover rounded-pill" name="login" style="color: green; background-color: white">Selesaikan Konsultasi</button>
            <?php 
                }
                else
                {
            ?>
            <button class="btn btn-login hover rounded-pill" name="login" style="color: green; background-color: white" disabled>Sudah Selesai</button>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="jarak"></div>
    <?php 
                                    }
                                ?>
</body>
</div>
</div>
</div>