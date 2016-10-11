<?php get_header(); ?>
	<div class="row">
		<div class="small-3 small-centered columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<?php the_content(); ?>
    
			<?php endwhile; endif; ?>
		</div>
	</div>
	
	</section>


<?php get_footer(); ?>