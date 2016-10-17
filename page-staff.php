<?php get_header(); ?>
	<div class="row large-centered text-center">
		<ul class="small-block-grid-12 medium-block-grid-3 ">
		<?php
			$posts = get_posts(array(
				'post_type'			=> 'committee',
			));
				if( $posts ):
					foreach( $posts as $post ): 
						setup_postdata( $post );
						// Variables for Staffs Page
						$staffType 		= get_field('staff_type');
						$profileImage	= get_field('profile_image_staff');
						$name			= get_field('name');
						$email			= get_field('email');
						$phoneNumber	= get_field('phone_number');
						$position		= get_field('position');
						// Image Sizes:
						$staffImage 	= 'staff-img';
						?>
					<li class="no-bullet">	
						<div class="medium-3 small-12 columns">
							<div class="row hz-profile-card">
								<div class="small-12 columns" >
									<img  class="hz-profile-img" src="<?php echo $profileImage['sizes'][$staffImage]; ?>"/>
								</div>
								<div class="small-12 columns">
									<p class="hz-spacer"><?php echo $name;?><br/>
									<span class="hz-small-font"><?php echo $position; ?></span></p>
									<?php 
										if($email){ ?>
											<p class="hz-small-font"><a href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email);?></a>
										<?php } ?> <br />
										<?php if($phoneNumber){ ?>
											<?php echo $phoneNumber; ?></p>
										<?php } ?>
								</div>
							</div>
						</div>
					</li>
					<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
		</ul>
	</div>
<?php get_footer(); ?>