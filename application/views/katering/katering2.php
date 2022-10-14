< !-- banner-start -->
    <section>
        <style>
            .package {
                background-color: #FF8A00;
                /* border: 1px solid black; */
                min-height: 200px;
                margin-bottom: 1rem;
                border-radius: 20px;
                overflow: hidden;
            }

            .fedex {
                background-color: #FFFFFF;
                color: white;
                /* border-bottom: 3px solid #FF6600; */
            }

            .logo {
                padding: 1rem;
            }

            .containerz {
                background: gray;
                /* width: 600px; */
                /* height: 300px; */
                /* height given for illustration */
                display: flex;
                flex-flow: row wrap;
                position: relative;
            }

            .item {
                margin: 4px;
                flex: 0 0 40%;
            }

            .containerz:after {
                content: '';
                display: block;
                flex: 999;
                /* grow by a large number */
            }
        </style>
        <div class="w-100 generic-banner-con text-xl-left text-lg-left text-center">
            <div class="container-fluid">
                <div class="generic-banner-content text-white text-center position-relative w-100" s>
                    <div class="wrapper">
                        <div class="Schedule-box text-center">
                            <div class="Schedule-box-title" style="border-radius: 10px; background-color: #FF8A00;"><br></br>
                                <h2 class="text-white">Katering Diet</h2>
                                <div class="Schedule-box-item position-relative w-100 float-center" style="right: 10px;">
                                    <div class="container"></div>
                                    <div class="row"><?php foreach ($katering as $data) :
                                                        ?>
                                            <a href="<?php echo base_url(); ?>welcome">
                                                <div class="col-md-12 col-lg-6"><img class="img-fluid w-100" src="<?php echo $data->foto
                                                                                                                    ?>" alt="gambar alam">
                                                    <h5 class="float-sm-left"><?php echo $data->nama_menu
                                                                                ?></h5>
                                                </div>
                                    </div></a><?php endforeach;
                                                ?>

                                </div>
                                <p class="text-muted mb-0">Perhitungan Gizi menggunakan Rumus BMI (Body Mass Index)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="package">
                    <h2 class="text-white text-center">Katering Diet</h2>
                    <div class="banner fedex">
                        <div class="logo"></div>
                        <div class="container">
                            <div class="row"><?php foreach ($katering as $data) :
                                                ?>
                                    <a href="<?php echo base_url(); ?>welcome">
                                        <div style="padding: 50px;">
                                            <div class="col-md-12 col-lg-6"><img class="img-fluid w-100" src="<?php echo $data->foto
                                                                                                                ?>" alt="gambar alam">
                                                <h5 class="float-sm-left"><?php echo $data->nama_menu
                                                                            ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach;
                                ?>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>

                </div>
                <div class="package">
                    <h2 class="text-white text-center">Katering Diet</h2>
                    <div class="banner fedex">
                        <div class="logo"></div>
                        <div class="containerz">
                            <?php ?>
                            <div class="col-lg-6 article_col item" data-id=${articleId1}>
                                <img class="w-100" src="https://placeimg.com/150/150/nature" alt="gambar alam">
                            </div>
                            <div class="col-lg-6 article_col item" data-id=${articleId1}>
                                <img class="w-100" src="https://placeimg.com/150/150/nature" alt="gambar alam">
                            </div>
                            <div class="col-lg-6 article_col item" data-id=${articleId1}>
                                <img class="w-100" src="https://placeimg.com/150/150/nature" alt="gambar alam">
                            </div>
                            <div class="col-lg-6 article_col item" data-id=${articleId1}>
                                <img class="w-100" src="https://placeimg.com/150/150/nature" alt="gambar alam">
                            </div>
                            <?php ?>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>


    </section>