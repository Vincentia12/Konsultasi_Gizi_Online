<section>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/banner-cos.css">
	<div class="banner_cos">
		<div class="jarak"></div>
		<h2 class="text-white text-center">Katering Diet</h2>
		<div class="banner banner_box_cos">
			<div class="jarak"></div>



			<div class="container">
				<div class="row">
					<?php foreach ($katering as $data) : ?>
					<!-- <div class="col-md-12 col-lg-6 article__col">
                     <a href="<?php echo site_url();?>katering/detail/<?php echo $data->id_katering_diet_menu ?>">
                        <img class="img-fluid" src="<?php echo $data->foto ?>" alt="gambar alam"
                           style="border-radius: 15px;">
                        <h4 style="margin-left: 15px;"><?php echo $data->nama_menu ?></h4>
                        <div class="jarak"></div>
                     </a>
                  </div> -->
					<div class="col-md-6">
						<div class="card-deck">
							<a href="<?php echo site_url();?>katering/detail/<?php echo $data->id_katering_diet_menu ?>">
								<div class="card">
									<img class="card-img-top" src="<?php echo $data->foto ?>" alt="Card image cap" style="height: 400px; object-fit: cover;">
									<div class="card-body">
										<h5 class="card-title"><?php echo $data->nama_menu ?></h5>
										<p class="card-text"><?php echo $data->deskripsi ?></p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</a>
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