<section class="hero-subpages">
			<div class="row hz-menu">
				<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
						<button class="menu-icon" type="button" align="right" data-toggle ></button>
						<div class="title-bar-title" >Menu</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoUPSI.png" align="right" style="width: 50px;">
				</div>
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'topbar' ); ?>
				</section> 
				<section class="steering-committee">
					<div class="row">
						<div class="small-12 columns">
							<br />
							<h4 class="text-center hz-tajuk-section"><?php post_type_archive_title(); ?></h4>
						</div>
						<hr />
					</div>
