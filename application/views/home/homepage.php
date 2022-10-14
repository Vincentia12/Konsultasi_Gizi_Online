<div class="container pb-5">
	<section class="blog-posts w-100 pb-5">
		<div class="row pb-5">
			<div id="blog" class="col-xl-12">
				<div class="float w-100 post-item pb-4">
					<div class="post-item-wrap position-relative pb-5">
						<div id="blogslider" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="post-video">
										<div class="fluid-width-video-wrapper">
											<iframe width="1200" height="500"
												src="https://www.youtube.com/embed/dA8Smj5tZOQ"></iframe>
											<!--fluid-width-video-wrapper-->
										</div>
										<!--post-video-->
									</div>
									<!--carousel-item-->
								</div>
								<div style="width: 1200px; height: 500px;" class="carousel-item">
									<img src="assets/image/post-featured2.jpg" alt="">
									<!--carousel-item-->
								</div>
								<div style="width: 1200px; height: 500px;" class="carousel-item">
									<img src="assets/image/post-featured3.jpg" alt="">
									<!--carousel-item-->
								</div>
								<!--carousel-inner-->
							</div>
							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#blogslider" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#blogslider" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
							<!--blogslider-->
						</div>
						<!--post-item-wrap-->
					</div>
					<!--post-item-->
				</div>
				<!--blog-->
			</div>
			<!--row-->
		</div>
</div>
</section>
</div>
</div>
</div>
</div>
<!-- feature-box -->

<section>
	<div class="w-100 float-left feature-box-con text-center pt-5">
		<div class="container pt-5">
			<div class="row bg-white">
				<div class="col-lg-4 col-md-4 col-sm-6  pl-0 pr-0">
					<a href="BMI" style="text-decoration: none;">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/calculator.svg" width="48px" alt="feature-box-icon"
									class="img-fluid">
							</figure>
							<h5>Kalkulator Gizi</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 pl-0 pr-0">
                    <a href="Katering" style="text-decoration: none;">
					    <div style="height: 250px;" class="feature-box-item">
						    <figure>
							    <img src="assets/image/katering diet.svg" alt="feature-box-icon" width="48px"
								    class="img-fluid">
						    </figure>
    						<h5>Katering Diet</h5>
					    </div>
                    </a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 pl-0 pr-0">
					<a href="konsultasi" style="text-decoration: none;">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/konsultasi gizi.svg" alt="feature-box-icon" width="48px" class="img-fluid">
							</figure>
							<h5>Konsultasi Gizi</h5>
						</div>
					</a>
				</div>
				<!-- <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
					<a href="tanyaahli" style="text-decoration: none;">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/chat-right-dots.svg" alt="feature-box-icon" width="48px"
									class="img-fluid">
							</figure>
							<h5>Tanya Ahli Gizi</h5>
						</div>
					</a>
				</div> -->
				<!-- <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
					<a href="artikel" style="text-decoration: none;">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/artikel.svg" alt="feature-box-icon" width="48px" class="img-fluid">
							</figure>
							<h5>Artikel Gizi</h5>
						</div>
					</a>
				</div> -->
				<!-- <div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
					<a href="konversi" style="text-decoration: none;">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/konversi nilai.svg" alt="feature-box-icon" width="48px"
									class="img-fluid">
							</figure>
							<h5>Konversi Nilai</h5>
						</div>
					</a>
				</div> -->
			</div>
			<?php 
				if($this->session->has_userdata('user'))
				{
			?>
			<!-- <div class="row bg-white">
				
				<div class="col-lg-4 col-md-4 col-sm-6 pl-0 pr-0">
					<a href="programdiet" style="text-decoration: none;">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/program diet.svg" alt="feature-box-icon" width="48px"
									class="img-fluid">
							</figure>
							<h5>Program Diet</h5>
						</div>
					</a>
				</div>
			</div> -->
			<?php 
				}
			?>
		</div>
	</div>
</section>

<!-- <section>
	<div class="w-100 float-left feature-box-con text-center pt-5">
		<div class="container pt-5">
			<div style="height: 250px;" class="row bg-white ">
				<div class="col-lg-3 col-md-3 col-sm-6  pl-0 pr-0">
					<a href="BMI">
						<div style="height: 250px;" class="feature-box-item">
							<figure>
								<img src="assets/image/calculator.svg" width="48px" alt="feature-box-icon"
									class="img-fluid">
							</figure>
							<h5>Kalkulator Gizi</h5>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
					<div style="height: 250px;" class="feature-box-item ">
						<figure>
							<img src="assets/image/chat-right-dots.svg" alt="feature-box-icon" width="48px"
								class="img-fluid">
						</figure>
						<h5>Tanya Ahli Gizi</h5>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
					<div style="height: 250px;" class="feature-box-item ">
						<figure>
							<img src="assets/image/artikel.svg" alt="feature-box-icon" width="48px" class="img-fluid">
						</figure>
						<h5>Artikel Gizi</h5>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 pl-0 pr-0">
					<div style="height: 250px;" class="feature-box-item ">
						<figure>
							<img src="assets/image/konversi nilai.svg" alt="feature-box-icon" width="48px"
								class="img-fluid">
						</figure>
						<h5>Konversi Nilai</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- feature-box -->
