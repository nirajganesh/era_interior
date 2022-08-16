

		<section class="pager-section">
			<div class="container">
				<div class="pager-info">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>" title="">Home</a></li>
						<li><span>Portfolio</span></li>
					</ul><!--breadcrumb end-->
					<h2>Portfolio</h2>
					<span>Our work cases</span>
				</div>
				<div class="pger-imgs style2">
					<div class="abt-imgz">
						<img src="<?=base_url()?>/assets/images/Era-portfolio.jpg" alt="portfolio">
					</div>
				</div><!--pger-imgs end-->
				<div class="clearfix"></div>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="portfolio-page">
					<div class="section-title">
						<h3 class="sub-title w-100">See our best <br /> projects</h3>
						<p>Interior designing is not just to impress your guests but also to ensure that when you’re away from your beautiful home, it makes you want to come back. We deal each project with small interdisciplinary teams, involving the client as a design partner.</p>
					</div><!--section-title end-->
					<div class="options">
						<div class="option-isotop text-left">
							<ul id="filter" class="option-set filters-nav" data-option-key="filter">
								<li><a data-option-value="*" class="selected">All</a></li>
								<?php foreach($category as $c){?>
									<li><a data-option-value=".<?=$c->id?>"><?=$c->category?></a></li>
								<?php }?>

								<!-- <li><a data-option-value="*" class="selected">Interior & Exterior</a></li>
								<li><a data-option-value=".furniture">Custom Furniture</a></li>
								<li><a data-option-value=".kitchen">Modular Kitchen</a></li>
								<li><a data-option-value=".ceilings">False Ceilings</a></li>
								<li><a data-option-value=".wallpaper">Wallpaper And PVC Panel</a></li> -->
							</ul>
						</div>
					</div><!--isotope options end-->
					<div class="row">
						<div class="masonary">
							<?php foreach($works as $w){?>
							<div class="col-lg-4 col-md-4 col-sm-6 <?=$w->portfolio_category_id?>">
								<div class="project-item">
									<img src="<?=base_url('/assets/portfolio/'.$w->img_src)?>" alt="furniture">
									<div class="project-info">
										<h3><a href="" title=""><?=$w->text?></a></h3>
										<!-- <span>59 projects</span> -->
									</div><!--project-info end-->
								</div><!--project-item end-->
							</div>
							<?php }?>
						</div><!--masonary end-->
					</div>
					<!-- <div class="pagination-mint">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
						    	<li class="page-item"><a class="page-link prev" href="#"><i class="fa fa-angle-left"></i>Previous</a></li>
						    	<li class="page-item"><a class="page-link active" href="#">1</a></li>
						    	<li class="page-item"><a class="page-link" href="#">2</a></li>
						    	<li class="page-item"><a class="page-link" href="#">3</a></li>
						    	<li class="page-item"><a class="page-link next" href="#">Next <i class="fa fa-angle-right"></i></a></li>
						  	</ul>
						</nav>
					</div> -->
				</div><!--portfolio-page end-->
			</div>
		</section><!--page-content end-->

	