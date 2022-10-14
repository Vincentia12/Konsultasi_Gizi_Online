<body>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/banner-cos.css">
	<div class="banner_cos">
		<div class="jarak"></div>
		<h2 class="text-white text-center"><?php foreach($detailArtikel as $data) { echo $data->judul; } ?></h2>
		<div class="banner banner_box_cos">
			<div class="jarak"></div>
			<div class="container">
				<div class="row">
					<?php
  					if(!empty($detailArtikel))
  					{
    				 	foreach($detailArtikel as $data)
    					{
					?>
					<img class="card-img-top" src="<?php echo base_url() ?>assets/image/artikel/<?php echo $data->thumbnail ?>" alt="Thumbnail" style="height: 400px; object-fit: cover;">
					<div class="card">
						<div class="card-body">
							<p class="card-text"><?php echo $data->isi ?></p>
							<p class="card-text"><small class="text-muted"> by <?php echo $data->nama ?> | <?php echo $data->dilihat ?> Dilihat | <?php echo $data->created_at ?></small></p>
						</div>
					</div>
					<?php
	  					}		
					}		
					?>
				</div>
			</div>
			<br>
		</div>
	</div>
</body>
</div>
</div>
</div>