<?php get_header(); ?>
	
	<div class="row">
		<div class=" medium-8 medium-offset-2 small-12 columns">
					<ul class="accordion" data-accordion>
					<?php
					$posts = get_posts(array(
						'post_type'			=> 'facilities',
					));
						if( $posts ):
							foreach( $posts as $post ): 
								setup_postdata( $post );
								// Variables for Staffs Page
								$serviceTitle	= get_field('title_of_facilityservice');
								$serviceDesc	= get_field('description_of_facilityservice');
								?>	
					
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title"><h5><?php echo $serviceTitle; ?></h5></a>
					    <div class="accordion-content" data-tab-content>
					     <ul>
						     <li class="no-bullet"><p><?php echo $serviceDesc; ?></p></li>
						</ul>
					    </div>
					  </li>
												
						<?php endforeach; ?>
					</ul>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>					
				</div>
	</div>
</section>


<?php get_footer(); ?>