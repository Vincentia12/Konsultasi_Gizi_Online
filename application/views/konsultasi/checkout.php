<section>
    <div class="container pt-5">
    <!-- <div class="jarak"></div> -->
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="card">
                <div class="jarak"></div>
                    <center>
                        <h1>Konversi Gizi</h1>
                    </center>
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
                                                <center><img src="<?= base_url() ?>assets/picture/<?= $data->foto ?>" alt="foto"></center>
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
</section>
<div class="jarak"></div>
</div>
</div>
</div>