<div class="container">
	<div class="row">
		<?php
  		if(!empty($detail))
  		{
    	 	foreach($detail as $data)
    		{
		?>
		<div class="col-4">
			<ul class="img-list4">
				<li> <img class="img-fluid" src="<?php echo $data->foto ?>"
						alt="gambar alam" style="border-radius: 15px;"></li>
			</ul>
		</div>
		<div class="col-2">
			<div style="color: black">
				<h5>Nama Menu : </h5>
				<h5>Harga Menu : </h5>
			</div>
		</div>
		<div class="col-2">
			<ul class="img-list5">
				<li>
					<div style="color: black">
						<h5 style="margin-left: 0px;">
							<?php echo $data->nama_menu ?></h5>
						<h5 style="margin-left: 0px;">
							<?php echo $data->harga ?>
						</h5>
					</div>
				</li>
			</ul>
		</div>
		<?php
  			}		
		}		
		?>
	</div>
	<p class="text-muted mb-0">Perhitungan Gizi menggunakan Rumus BMI ( Body Mass Index )
	</p>
</div>