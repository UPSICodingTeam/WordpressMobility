<?php
	$contact_us			= get_field('contact_us','option');
	$trivia				= get_field('the_trivia');
	$trivia_title		= get_field('trivia_title');

	wp_reset_postdata(); // reset to the original page data
	?>

					<section class="hz-testimony">
						<?php if(is_home()){
								//do nothing
							} else {
								// include a horizontal rule ?>
								<hr/>
								<?php
							} ?>

						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<h4 class="text-center hz-tajuk-section">Student Testimony</h4>
							</div>
						</div>
						<?php 
						$args = array( 'post_type' => 'testimony', 'posts_per_page' => 1, 'orderby' => 'rand' );
				        $loop = new WP_Query( $args );
				        while ( $loop->have_posts() ) : $loop->the_post(); 
				        
				        $check_img = get_field('profile_image_tes');
				        $testi_size = 'testi-img';
				        $testi_img_url = $check_img['sizes'][$testi_size];	
						?>
						<div class="row hz-testimony-content">
							<div class="large-12 columns">
								<div class="large-6 large-offset-3 small-12 columns text-center">
									<div class="row">
										<div class="small-12 columns">
											<?php if(!empty($check_img)): ?>
											<img class="hz-profile-img" src="<?php echo $testi_img_url; ?>"><br/>
											<p class="hz-small-font"><?php the_field('name_tes'); ?></p>
											<?php else: ?>
											<img class="hz-profile-img" src="https://api.adorable.io/avatars/80/<?php echo rand(1,50); ?>"><br/>
											<p class="hz-small-font"><?php the_field('name_tes'); ?></p>
											<?php endif; ?>
										</div>
									</div>
									<p><?php the_field('testimony');?></p>
								</div>
							</div>
						</div>
						<?php
						endwhile;
						wp_reset_postdata(); // reset to the original page data
						?>
					</section>
					<section class="hz-footer" style="padding-top: 20px;">
						<div class="row">
							<div class="large-2 large-offset-3 small-12 columns hz-small-font hz-font-white" >
								<h5>Contact Us</h5>
								<p><?php echo $contact_us; ?></p>	
							</div>
							<div class="large-2 small-12 columns hz-small-font hz-font-white show-for-medium">
								<?php if(is_user_logged_in()){ ?>
									<h5>Logout & Other Links</h5>
								<?php } else { ?>
									<h5>Login & other Links</h5>
								<?php } ?>
								<?php if(is_user_logged_in()){ ?>
									<a class="tiny button success" href="<?php echo wp_logout_url( home_url()); ?>">Logout</a>
								<?php } else { ?>
									<a class="tiny button success" href="http://mobility.dev/login/">Login</a>
								<?php } ?>
								
								<a class="tiny button warning" href="#0">Submit A Programme</a>
							</div>
							<div class="large-2 small-12 hz-font-white columns show-for-medium end">
								<h5>Trivia</h5>
								<?php 
								$args = array('post_type' => 'trivia','posts_per_page' => 1,'orderby' => 'rand');
						        $loop = new WP_Query( $args );
						        while ( $loop->have_posts() ) : $loop->the_post(); 
						        ?>
								<p><?php echo the_field('the_trivia');?></p>
							</div>
						</div>
						<?php
						endwhile;
						wp_reset_postdata(); // reset to the original page data
						?>
					</section>	
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->