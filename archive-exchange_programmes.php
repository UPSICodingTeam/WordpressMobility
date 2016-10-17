<?php get_header(); ?>
			<div class="row">
				<ul class="small-block-grid-12 medium-block-grid-3 ">
				<?php
					$posts = get_posts(array(
						'post_type'			=> 'exchange_programmes',
					));
						if( $posts ):
							foreach( $posts as $post ): 
								setup_postdata( $post );
								// Variables from Summer Camps Page
								$exImg		= get_field('programme_image');
								$exTitle	= get_field('programme_title');
								$exDesc		= get_field('programme_description');
								$tempImage		= get_template_directory_uri(); + '/assets/images/card-unavailable.png';
								// Image Sizes:
								$cardImg_size 	= 'card-img';
								?>	
								<li class="no-bullet">
									<div class="medium-3 small-12 columns">
										<div class="large-12 columns">
											<a href="<?php echo get_permalink(); ?>" class="hz-normal-text">
												<div class="row hz-cards hz-cards-ex hvr-float-shadow">
													<?php if($exImg){ ?>
														<img src="<?php echo $exImg['sizes'][$cardImg_size]; ?>" style="min-width: 240px; display: block; margin: 0px auto;">
													<?php } else { ?>
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card-unavailable.png" style="width: 100%; display: block; margin: 0px auto; height:160px;">
													<?php }?>
													
													<div class="large-12 columns text-center">
														<h4 class="hz-query hz-bold"><?php echo $exTitle; ?></h4>
														<p class="hz-small-font">
															<?php echo wp_trim_words($exDesc, $num_words = 20, $more = '...' );?>	
														</p>
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
								</li>
							<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
		
				</ul>			
			</div>
		</section>
<?php get_footer(); ?>