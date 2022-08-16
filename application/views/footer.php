    <?php if($this->uri->segment(1) != 'contact'){?>
    <section class="consultation-sec">
			<div class="container">
				<div class="consultation-section">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<div class="consult-text">
								<h3 class="sub-title">Get a free consultation. Just leave a request below</h3>
								<form class="subsc-form">
									<input type="text" name="name" placeholder="Your phone number">
									<button type="submit" class="lnk-default">Сallback <i class="la la-arrow-right"></i> <span></span></button>
								</form>
							</div><!--consult-text end-->
						</div>
						<div class="col-lg-5">
							<div class="consult-img wow slideInUp" data-wow-duration="1000ms">
								<img src="<?=base_url()?>/assets/images/era-interior-consultation.jpg" alt="">
							</div><!--consult-img end-->
						</div>
					</div>
				</div><!--consultation-section end-->
			</div>
		</section>
    <?php }?>

		<!-- Blog news section -->

		<footer id="address_info">
			<div class="container">
				<div class="top-footer">
					<div class="row">
						<div class="col-lg-4 col-md-12">
							<div class="widget widget-info">
								<!-- <h3 class="widget-title">NEWSLETTER</h3> -->
								<!-- <form class="widget-form">
									<input type="text" name="email" placeholder="Your e-mail">
									<button type="submit"><i class="la la-arrow-right"></i></button>
								</form>
								<span>Sign up to receive special offers!</span> -->
								<div class="ft-logo">
									<img src="<?=base_url()?>/assets/images/ft-logo.png" alt="">
								</div><!--ft-logo end-->
								<div class="clearfix"></div>
								<p style="color:white;"><br/>Interior Design | Furniture | False Ceiling | Modular kitchen | Renovation <br/>Our modern, approachable and affordable Interior Solutions makes it hassle free.</p>
								<ul class="social-links">
									<li><a href="<?=$web->fblink?>" target="_blank" title="" ><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="<?=$web->instalink?>" target="_blank" title=""><i class="fab fa-instagram"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-google"></i></a></li>   
								</ul><!--social-links end-->
							</div><!--widget-info end-->
						</div>
						<div class="col-lg-8 col-md-12">
							<div class="row"> 
								<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="widget widget-contact text-right">
										<h3 class="widget-title">Contact Us</h3>
										<ul class="ft-links">
											<li><?=$web->address_line1?></li>
											<li>+91 <?=$web->phone1?></li>
											<li>+91 <?=$web->phone2?></li>
											
											<li><a href="mailto: <?=$web->email?>" title=""><?=$web->email?></a></li>
										</ul><!--ft-links end-->
									</div><!--widget-contact end-->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="widget widget-category text-right">
										<h3 class="widget-title">Services</h3>
										<ul class="ft-links">
											<li><a href="<?=base_url('services')?>" title="">Decor</a></li>
											<li><a href="<?=base_url('services')?>" title="">Furniture</a></li>
											<li><a href="<?=base_url('services')?>" title="">Lighting</a></li>
											<li><a href="<?=base_url('services')?>" title="">Interior design</a></li>
											<li><a href="<?=base_url('services')?>" title="">Architecture design</a></li>
											<li><a href="<?=base_url('services')?>" title="">Commercial design</a></li>
										</ul><!--ft-links end-->
									</div><!--widget-contact end-->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-12">
									<div class="widget widget-company text-right">
										<h3 class="widget-title">Quick Links</h3>
										<ul class="ft-links">
											<li><a href="<?=base_url('about')?>" title="">About Us</a></li>
											<li><a href="<?=base_url('services')?>" title="">Services</a></li>
											<li><a href="<?=base_url('portfolio')?>" title="">Portfolio</a></li>
											<li><a href="<?=base_url('contact')?>" title="">Contact Us</a></li>
											<!-- <li><a href="" title="">Blog</a></li> -->
										</ul><!--ft-links end-->
									</div><!--widget-contact end-->
								</div>
							</div>
						</div>
					</div>
				</div><!--top-footer end-->
				<div class="bottom-footer">
					<ul class="btm-links">
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Terms and Conditions</a></li>
					</ul><!--btm-links end-->
					<div class="clearfix"></div>
				</div><!--bottom-footer end-->
			</div>
		</footer><!--footer end-->

	</div><!--wrapper end-->



<script src="<?=base_url()?>/assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>/assets/js/popper.js"></script>
<script src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/assets/js/plugin/slick.min.js"></script>
<script src="<?=base_url()?>/assets/js/plugin/html5lightbox.js"></script>
<!-- <script src="<?=base_url()?>/assets/js/placeholdem.min.js"></script> -->
<?php if($this->uri->segment(1) == 'portfolio'){?>
  <script src="<?=base_url()?>/assets/js/plugin/isotope.js"></script>
<?php }?>
<script src="<?=base_url()?>/assets/js/wow.min.js"></script>
<script src="<?=base_url()?>/assets/js/script.js"></script>


</body>

</html>
