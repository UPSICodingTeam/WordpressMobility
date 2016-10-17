<?php 

//---Advanced Custom Fields---
$welcome_statement 				= get_field('welcoming_statement_front_page', 'option');
$opt_in_query					= get_field('opt_in_query','option');
$register_statement				= get_field('register_statement','option');
$summer_camp_label 				= get_field('summer_camp_label','option');
$summer_camp_description 		= get_field('summer_camp_description','option');
$summer_card_image				= get_field('summer_card_image','option');
$exchange_programme_label		= get_field('exchange_programme_label', 'option');
$exchange_programme_description	= get_field('exchange_programme_description', 'option');
$exchange_programme_card_image 	= get_field('exchange_programme_card_image','option');
$cards_statement				= get_field('cards_statement','option');
$the_welcoming_note				= get_field('the_welcoming_note','option');
$name							= get_field('name','option');
$position						= get_field('position','option');
$profile_image					= get_field('profile_image','option');
$main_featured_course			= get_field('main_featured_course','option');
$sub_featured_course			= get_field('3_sub_featured_courses', 'option');

$exchange_prog_image			= get_field('programme_image');
$exchange_prog_desc				= get_field('programme_description');

$summer_course_image			= get_field('course_image');
$summer_course_desc				= get_field('course_description');




//Image Size
$cardImg_size 		= 'card-img';
$profileImg_size	= 'welcome-img';
$sub_course_size	= 'sub_course-img';

?>
<?php get_header(); ?>
			
				<div class="row hz-optin-top">
					<div class="large-12 medium-12 small-12 columns text-center">
						<p class="hz-font-white"><?php echo $welcome_statement; ?></p>
						<p class="hz-query hz-font-white"><?php echo $opt_in_query; ?></p>
						<div class="row">
							<div class="large-4 large-offset-4 medium-6 medium-offset-3 small-12 columns">
								<a href="new-user-registration/"><button class="button round expanded hz-pink">Register</button></a>
						<p class="hz-small-font hz-font-white"><?php echo $register_statement; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row hz-cards-bg clearfix">
					<div class="large-3 large-offset-3 medium-3 medium-offset-1 small-12 small-centered columns ">
						<div class="large-12 columns hz-spacer">
							<div class="columns">
								<a href="summer-camp/" class="hz-normal-text">
									<div class="row hz-cards hz-cards-sum hvr-float-shadow">
										<div class="show-for-medium">
											<img src="<?php echo $summer_card_image['sizes'][$cardImg_size]; ?>">
										</div>
										<div class="show-for-small-only">
											<img src="<?php echo $summer_card_image['sizes'][$cardImg_size]; ?>" style="width: 100%;">
										</div>
										<div class="large-12 columns text-center">
											<h4 class="hz-query hz-bold"><?php echo $summer_camp_label; ?></h4>
											<p class="hz-small-font"><?php echo $summer_camp_description; ?></p>
											<div class="row hz-button-absolute">
												<div class="large-8 large-offset-2 columns">
													<button class="button round small expanded hz-pink">Learn more</button>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>						
						</div>
					</div>
					<div class="large-3 medium-3 small-12 small-centered columns end">
						<div class="large-12 columns hz-spacer">
							<div class="columns">
								<a href="exchange-programmes/" class="hz-normal-text">
									<div class="row hz-cards hz-cards-ex hvr-float-shadow">
										<div class="show-for-medium">
											<img src="<?php echo $exchange_programme_card_image['sizes'][$cardImg_size]; ?>" >
										</div>
										<div class="show-for-small-only">
											<img src="<?php echo $exchange_programme_card_image['sizes'][$cardImg_size]; ?>" style="width: 100%;" >
										</div>
										<div class="large-12 columns text-center">
											<h4 class="hz-query hz-bold"><?php echo $exchange_programme_label; ?></h4>
											<p class="hz-small-font"><?php echo $exchange_programme_description; ?></p>
											<div class="row hz-button-absolute">
												<div class="large-8 large-offset-2 columns">
													<button class="button round small expanded hz-pink">Learn more</button>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>						
						</div>
					</div>
				</div>
					<div class="row" style="margin-top: 20px;">
						<div class="large-4 large-offset-4 medium-4 medium-offset-4 small-12 columns text-center">
							<div class="small-12 columns">
								<p class="hz-small-font"><?php echo $cards_statement; ?></p>
							</div>
							<hr/>
						</div>
					</div>
			</div> <!-- supposed to close hz-menu-->
		</section>
		<div style="height:1px; display: block;"></div>
		<section class="welcoming-note">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<h4 class="text-center hz-tajuk-section">Welcoming Note</h4>
				</div>
			</div>
			<div class="row small-centered">
				<div class="large-5 large-offset-2 medium-5 medium-offset-2 small-12 columns">
					<?php echo $the_welcoming_note; ?>
				<br/>
				<h5><?php echo $name; ?>,</h5>
				<h6><?php echo $position; ?></h6>
				</div>
				<div class="large-3 medium-3 show-for-medium columns end">
					<img src="<?php echo $profile_image['sizes'][$profileImg_size]; ?>">
				</div>
			</div>
			<hr />
		</section>
		<section class="featured-courses">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<h4 class="text-center hz-tajuk-section">Featured Courses</h4>
				</div>
			</div>
			<div class="row small-centered">
				<?php 
						if($main_featured_course):
						$post = $main_featured_course;
						setup_postdata( $post );
						
						//variables for Summer Camps courses
						$sum_title			= get_field('course_title');
						$sum_img			= get_field('course_image');
						$sum_desc			= get_field('course_description');
						$sum_dur			= get_field('duration');
						$sum_fee			= get_field('partner-university_participants');
						$sum_credit			= get_field('credit_transfer');
						
						//variables for Exchange Programmes
						$ex_title			= get_field('programme_title');
						$ex_img				= get_field('programme_image');
						$ex_desc			= get_field('programme_description');
						$ex_dur				= get_field('programme_duration');
						$ex_fee				= get_field('partner-university_participants_ep');
						$ex_credit			= get_field('credit_transfer_ep');

						?>
				<div class="large-3 large-offset-2 medium-3 medium-offset-2 small-12 columns">
				<?php if($sum_title){
					?>
					<img style="border: solid 5px white; width: 100%;" src="<?php echo $sum_img['sizes'][$profileImg_size]; ?>" >
				<?php } else {
					?>
					<img style="border: solid 5px white; width: 100%;" src="<?php echo $ex_img['sizes'][$profileImg_size]; ?>"  >
				<?php } ?>	
					
				</div>
				<div class="large-5 medium-5 small-12 columns end">
					
				<?php if($sum_title){
					?>
					<a href="<?php the_permalink(); ?>"><h3><?php echo $sum_title; ?></h3></a>
				<?php } else {
					?>
					<a href="<?php the_permalink(); ?>"><h3><?php echo $ex_title; ?></h3></a>
				<?php } ?>
				<?php if($sum_desc){
					?>
					<p><?php echo $sum_desc; ?></p>
				<?php } else {
					?>
					<p><?php echo $ex_desc; ?></p>
				<?php } ?>
					
					<div class="row">
						<div class="large-7 large-offset-2 medium-12 small-12 columns hz-italic">
							<ul class="no-bullet">
								<?php
									if($sum_dur){
										?>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> Course Duration: <?php echo $sum_dur; ?> Days</li>
									<?php } else {
										?>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> Course Duration: <?php echo $ex_dur; ?> Weeks</li>
									<?php }
									?>
								<?php if ($sum_fee){
									?>
								<li><i class="fa fa-money" aria-hidden="true"></i> Fee: USD <?php echo $sum_fee; ?></li>
								<?php } else {
									?>
								<li><i class="fa fa-money" aria-hidden="true"></i> Fee: USD <?php echo $ex_fee; ?></li>
								<?php } ?>
								
								<?php if($sum_credit){
									?>
								<li><i class="fa fa-exchange" aria-hidden="true"></i> Credit Transfer: <?php echo $sum_credit['value'];?></li>
								<?php } else {
									?>
								<li><i class="fa fa-exchange" aria-hidden="true"></i> Credit Transfer: <?php echo $ex_credit['value']; ?></li>
								<?php } ?>
								
							</ul>
						</div>
						<div class="row">
							<div class="columns">
								<div class="large-6 large-offset-3 medium-12 small-12 columns text-center">
									<a href="mobility-course-application/"><button class="button round small expanded hz-pink">Apply for this course</button></a></div>
					<?php wp_reset_postdata();?>
					<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php wp_reset_postdata();?>
		<section class="more-courses">
			<div class="row">
				
				<?php 
					$totalsubcourse = count($sub_featured_course);
					if($totalsubcourse != 3){ ?>
					<!-- if not enough cards (3) -->
					<div class="large-4 medium-4 small-12 columns">
						<div class="large-12 columns">
							<div class="row hz-card-course hvr-float-shadow">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-unavailable.png">
								<div class="large-12 columns text-center" style="margin-top: 10px;">
									<p class="hz-small-font">Please set/select the 3 sub-featured items in the Theme Settings, to enable this section.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="large-4 medium-4 small-12 columns">
						<div class="large-12 columns">
							<div class="row hz-card-course hvr-float-shadow">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-unavailable.png">
								<div class="large-12 columns text-center" style="margin-top: 10px;">
									<p class="hz-small-font">Please set/select the 3 sub-featured items in the Theme Settings, to enable this section.</p>
								</div>
	
						</div>
						</div>
					</div>
					<div class="large-4 medium-4 small-12 columns">
						<div class="large-12 columns">
							<div class="row hz-card-course hvr-float-shadow">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-unavailable.png">
								<div class="large-12 columns text-center" style="margin-top: 10px;">
									<p class="hz-small-font">Please set/select the 3 sub-featured items in the Theme Settings, to enable this section.</p>
								</div>
	
						</div>
						</div>
					</div>
					<!--- END -->
				<?php } else { 
					
					foreach($sub_featured_course as $post):
						setup_postdata($post); 
						?>
						
						<div class="large-4 medium-4 small-12 columns">
							<div class="large-12 columns">
								<div class="row hz-cards hz-card-course hvr-float-shadow">
									<?php 
										$summer_featured_img		= get_field('course_image');
										$summer_featured_desc		= get_field('course_description');
										
										$exchange_featured_img		= get_field('programme_image');
										$exchange_featured_desc		= get_field('programme_description');
										
										if($summer_featured_img){ ?>
											<img src="<?php echo $summer_featured_img['sizes'][$sub_course_size]; ?>" style="width: 100%;">
										<?php } else { ?>
											<img src="<?php echo $exchange_featured_img['sizes'][$sub_course_size]; ?>" style="width: 100%;">
										<?php }
										?>
								<div class="large-12 columns text-center" style="margin-top: 10px;">
									<?php if($summer_featured_desc){ ?>
										<p class="hz-small-font"><?php echo wp_trim_words($summer_featured_desc, $num_words = 40, $more = '...' );?></p>
									<?php } else { ?>
										<p class="hz-small-font"><?php echo wp_trim_words($exchange_featured_desc, $num_words = 40, $more = '...' );?></p>
									<?php } ?>
									<div class="row hz-button-absolute">
										<div class="large-8 large-offset-2 columns">
											<a href="<?php the_permalink(); ?>"><button class="button round small expanded hz-pink">Learn More</button></a>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						
					<?php endforeach; ?>
					<?php wp_reset_postdata();?>
				<?php }?>
		</section>

<?php get_footer(); ?>