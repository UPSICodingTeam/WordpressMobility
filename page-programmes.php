<?php get_header(); ?>
	
			<div class="row">
				<div class=" medium-8 medium-offset-2 small-12 columns">
					<ul class="accordion" data-accordion>
					<?php
					$posts = get_posts(array(
						'post_type'			=> 'programmes_offered',
					));
						if( $posts ):
							foreach( $posts as $post ): 
								setup_postdata( $post );
								// Variables for Staffs Page
								$facultyName	= get_field('facultys_name');
								$programmeName	= get_field('programmes_offered');
								?>	
					
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title"><h5><?php echo $facultyName; ?></h5></a>
					    <div class="accordion-content" data-tab-content>
					     <ul>
						     <?php if(have_rows('programmes_offered')):
							     	while(have_rows( 'programmes_offered')):
								     	the_row(); ?>
								     		<li><a href="<?php the_sub_field('programme_url');?>"><?php the_sub_field('programme_title');?></a></li>
								     	<?php
							     	endwhile; 
						     endif; ?>
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