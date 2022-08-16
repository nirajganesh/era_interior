<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Era Interiors - Creating Living Experiences</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Era Interiors - Creating Living Experiences" />
	<meta name="keywords" content="" />
	<link rel="icon" href="<?=base_url()?>/assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/color.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/responsive.css">
</head>


<body>


	<div class="page-loading">
		<div class="thecube">
			<div class="cube c1"></div>
			<div class="cube c2"></div>
			<div class="cube c4"></div>
			<div class="cube c3"></div>
		</div>
	</div><!--page-loading end-->

	<div class="wrapper">
			
		<header>
			<div class="container">
				<div class="header-content">
					<div class="logo">
						<a href="<?=base_url()?>" title="">
							<img src="<?=base_url()?>/assets/images/logo2.png" alt="Era-Interiors-Logo">
						</a>
					</div><!--logo end-->
					<nav>
						<ul>
							<li><a class="<?=$this->uri->segment(1) == '' ? 'active' : null ?>" href="<?=base_url()?>" title="">Home</a></li>
							<li><a class="<?=$this->uri->segment(1) == 'about' ? 'active' : null ?>" href="<?=base_url('about')?>" title="">About Us</a></li>
							<li><a class="<?=$this->uri->segment(1) == 'services' ? 'active' : null ?>" href="<?=base_url('services')?>" title="">Services</a></li>
							<li><a class="<?=$this->uri->segment(1) == 'portfolio' ? 'active' : null ?>" href="<?=base_url('portfolio')?>" title="">Portfolio</a>
								<!-- <ul>
									<li><a href="#" title="">Portfolio Details</a></li>
								</ul> -->
							</li>
							<li><a class="<?=$this->uri->segment(1) == 'contact' ? 'active' : null ?>" href="<?=base_url('contact')?>" title="">Contact</a></li>
						</ul>
					</nav><!--navigation end-->
					<ul class="mint-funcz">
						<li>
							<a href="<?=$web->fblink?>" target="_blank" title="" >
								<img src="<?=base_url()?>/assets/images/era-fcbk-icon.png" alt="">
							</a>
						</li>
						<li>
							<a href="<?=$web->instalink?>" target="_blank" title="">
								<img src="<?=base_url()?>/assets/images/era-insta-icon.png" alt="">
							</a>
						</li>
						<li>
							<a href="#address_info" title="">
								<img src="<?=base_url()?>/assets/images/era-direct-icon.png" alt="">
							</a>
						</li>
					</ul><!--mint-funcz end-->
					<div class="contact-head-info">
						<h4>+91 <?=$web->phone1?></h4>
						<a href="<?=base_url('contact')?>" title="">Contact Us!</a>
					</div><!--contact-head-info end-->
					<div class="menu-btnn">
						<div class="menu-btn">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</div><!--menu-bar end-->
					</div>
				</div><!--header-content end-->
			</div>
		</header><!--header end-->

		<div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
            <span class="search-close-btn"><i class="fas fa-times"></i></span>
            <form>
                <input type="text" placeholder="Search">
            </form>
        </div><!--header-search end-->

		<div class="responsive-mobile-menu">
			<ul>
				<li><a href="<?=base_url()?>" title="">Home</a></li>
				<li><a href="<?=base_url('about')?>" title="">About Us</a></li>
				<li><a href="<?=base_url('services')?>" title="">Services</a></li>
				<li><a href="<?=base_url('portfolio')?>" title="">Portfolio</a>
					<!--<ul>-->
					<!--	<li><a href="#" title="">Portfolio Details</a></li>-->
					<!--</ul>-->
				</li>
				
				<li><a href="<?=base_url('contact')?>" title="">Contact</a></li>
			</ul>
		</div><!--responsive-mobile-menu end-->