<section>
	<link rel="stylesheet" href="https://b6db-182-1-73-137.ap.ngrok.io/Gizi_online/assets/css/banner-cos.css">
	<div class="">
		<div class="jarak"></div>
		<h2 class="text-white text-center">Sikozion Artikel</h2>
		<div class="banner banner_box_cos">
			<div class="jarak"></div>

			<div class="container">
				<div class="row">
					<?php foreach ($dataArtikel as $data) : ?>
					<div class="col-md-6">
						<div class="card-deck">
							<a href="<?php echo site_url();?>artikel/detail/<?php echo $data->id_berita ?>">
								<div class="card">
									<img class="card-img-top" src="<?php echo base_url() ?>assets/image/artikel/<?php echo $data->thumbnail ?>" alt="Thumbnail" style="height: 400px; object-fit: cover;">
									<div class="card-body">
										<h5 class="card-title"><?php echo substr($data->judul, 0, 40) ?>...</h5>
                                        </a>
										<p class="card-text"><?php echo substr($data->isi, 0, 250) ?></p>
										<p class="card-text"><small class="text-muted"> <?php echo $data->created_by ?> | <?php echo $data->dilihat ?> Dilihat</small></p>
									</div>
								</div>
						</div>
                  <br>
					</div>
               
					<?php endforeach; ?>
				</div>
			</div>

			<br>
		</div>
		<br>
	</div>
</section>
</div>
</div>
</div>