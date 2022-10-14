<head>
	<script src="https://kit.fontawesome.com/4d7481ea1d.js" crossorigin="anonymous"></script>
	<style>
		button {
			all: unset;
			cursor: pointer;
		}

		button:focus {
			outline: orange 5px auto;
		}

        .card-header {
		background-color: #FF8A00;
	}

	.btn-login {
		width: 90%;
		background-color: #FF8A00;
		color: white;
		font-style: white;
		font-size: large;
		font-weight: 800px;
	}

	form .inputpassword:hover {
  		color: darkgrey;
  		transition: 0.3s;
	}

	form .input, .inputpassword {
	  font-family: "Roboto", sans-serif;
	  outline: 0;
	  color: grey;
	  background: #f2f2f2;
	  width: 100%;
	  border: 0;
	  margin: 0 0 5px;
	  padding: 15px;
	  box-sizing: border-box;
	  border-radius: 3px;
	  transition: 0.3s;
	}

    .input-group .input-group-addon {
        border:0;
        background:white;
        pointer-events: none;
    }
	</style>
</head>
<section>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/banner-cos.css">
	<div class="col-md-6">
		<form action="<?php echo base_url() ?>tanyaahli/submitpost" method="post">
			<div class="input-group">
				<input type="hidden" id="author_id" name="author_id" class="form-control form-control-lg"
					value="<?php echo $this->session->userdata('id'); ?>">
				<input type="text" id="postQuestion" name="postQuestion" class="form-control form-control-lg"
					placeholder="Masukkan Pertanyaan Anda">
				<div class="input-group-append">
					<span class="input-group-text" style="background-color: orange;">
                        <button class="btn" type="submit"><i class="fa-solid fa-arrow-right" style="color: white;"></i></button>
                    </span>
				</div>
			</div>
		</form>
	</div>

	<div class="jarak"></div>

	<div class="banner_cos">
		<div class="banner_box_cos">
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php foreach ($postData as $data) : ?>
						<div class="card-deck" style="padding: 10px;">
							<div class="card">
								<div class="card-body">
									<div class="input-group">
										<h5 class="card-title"><?php echo $data->author ?></h5>
										<!-- <h5 class="card-text" style="padding-left: 50px;">
											<?php echo $data->date_created?>
                                        </h5> -->
									</div>
									<p class="card-text"><?php echo $data->question ?></p>
									<p class="card-text"><?php echo $data->date_created ?></p>

                                    <?php
                                        foreach ($commentData as $c_data)
                                        {
                                            if (!empty($commentData))
                                            {
                                    ?>
                                    <hr>
                                        <div class="card">
								            <div class="card-body">
										        <h5 class="card-title"><?php echo $c_data->author ?></h5>
									            <p class="card-text"><?php echo $c_data->reply ?></p>
									            <p class="card-text"><?php echo $c_data->date_replied ?></p>
                                            </div>
                                        </div>
									<?php
                                            }
                                        }
                                    ?>

                                    <br>

									<?php 
                                        if ($this->session->userdata('idlevel') == 2)
                                        {
                                    ?>
                                    <center>
                                    <div class="col-md-8">
	                                	<form action="<?php echo base_url() ?>tanyaahli/submitpost" method="post">
	                                		<div class="input-group">
                                                
	                                			<input type="hidden" id="author_id" name="author_id" class="form-control form-control-lg" value="<?php echo $this->session->userdata('id'); ?>">
	                                			<input type="text" id="postQuestion" name="postQuestion" class="form-control form-control-lg input" placeholder="Masukkan Komentar Anda...">
	                                			
	                                				<span class="input-group-text" style="border: 0px; border-radius: 0px; background-color: #f2f2f2">
                                                        <button class="btn" type="submit"><i class="fa-solid far fa-comments" style="color: green;"></i></button>
                                                    </span>
	                                			
                                                
	                                		</div>
	                                	</form>
                                        
	                                </div>
                                    </center>
									<?php
                                        }
                                    ?>
								</div>
							</div>
						</div>
						<br>
						<?php endforeach; ?>
					</div>



				</div>
			</div>
		</div>
		<br>
	</div>
    
</section>
</div>
</div>
</div>