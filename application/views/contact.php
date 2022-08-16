
		<section class="pager-section">
			<div class="container">
				<div class="pager-info">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>" title="">Home</a></li>
						<li><span>Contacts</span></li>
					</ul><!--breadcrumb end-->
					<h2>Contacts</h2>
					<span>Get in touch</span>
				</div>
				<div class="pger-imgs style2">
					<div class="abt-imgz">
						<img src="<?=base_url()?>/assets/images/Era-contact-us.jpg" alt="contact-us">
					</div>
				</div><!--pger-imgs end-->
				<div class="clearfix"></div>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="contact-page">
					<div class="contact-head">
						<p>Any questions or suggestions? <br /> Write us a message and we will contact you!</p>
					</div><!--contact-head end-->
					<div class="contact-main">
						<div class="row">
							<div class="col-lg-8">
								<div class="contact-main-form">
									<form method="post" action="<?=base_url('submit')?>" id="contact-form">
										<div class="response">
											<?php if($this->session->flashdata('success') != '' || $this->session->flashdata('failed') != '') {?>
												<div class="failed"><?=$this->session->flashdata('success')?> <br> <?=$this->session->flashdata('failed')?></div>
											<?php }?>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Name</label>
													<input type="text" name="name" class="form-control name" placeholder="Enter Your Name" required>
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>What city are you from?</label>
													<input type="text" name="city" class="form-control name" placeholder="Nagpur" required>
													<!-- <select class="form-control">
														<option>Los Angeles</option>
														<option>Los Angeles</option>
														<option>Los Angeles</option>
														<option>Los Angeles</option>
													</select> -->
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>E-mail</label>
													<input type="email" name="email" class="form-control email" placeholder="Enter Your Email">
												</div><!--form-group end-->	
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Phone Number</label>
													<input type="number" name="phone" class="form-control" placeholder="Enter Your Contact no." required>
												</div><!--form-group end-->
											</div>
											<div class="col-sm-10">
												<!-- <div class="form-group">
													<label>Message</label>
													<textarea name="message" class="form-control" placeholder="Hello! I have this question..."></textarea>
												</div> --><!--form-group end-->
											</div>
											<div class="col-sm-2">
												<div class="form-submit">
													<button type="submit"><img src="<?=base_url()?>/assets/images/submit.png" alt=""></button>
												</div><!--form-submit end-->
											</div>
										</div>
									</form>
								</div><!--contact-main-form end-->
							</div>
							<div class="col-lg-4">
								<div class="contact_info">
									<h3 class="sub-title white">Contacts</h3>
									<ul class="cl-list">
										<li>
											<span class="ci-icon">
												<img src="<?=base_url()?>/assets/images/ci1.png" alt="">
											</span>
											<p><?=$web->address_line1?></p>
										</li>
										<li>
											<span class="ci-icon">
												<img src="<?=base_url()?>/assets/images/ci2.png" alt="">
											</span>
											<p><span>Mon-Sat:</span> 10 am til 6 pm <span>Sunday:</span> Closed</p>
										</li>
										<li>
											<span class="ci-icon">
												<img src="<?=base_url()?>/assets/images/ci3.png" alt="">
											</span>
											<p><?=$web->email?></p>
										</li>
										<li>
											<span class="ci-icon">
												<img src="<?=base_url()?>/assets/images/ci4.png" alt="">
											</span>
											<p>+91 <?=$web->phone1?> <br> +91 <?=$web->phone2?></p>
											
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div><!--contact-main end-->
					<div class="contact-social">
						<span>Subscribe to our social networks :</span>
						<ul class="social-links without-bg">
							<!-- <li><a href="#" title=""><i class="fab fa-behance"></i></a></li> -->
							<li><a href="<?=$web->instalink?>" title=""><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?=$web->fblink?>" title=""><i class="fab fa-facebook-f"></i></a></li>
						</ul>
					</div><!--contact-social end-->
				</div><!--contact-page end-->
			</div>
		</section><!--page-content end-->
