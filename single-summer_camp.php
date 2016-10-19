<?php 
	//Variables from Summer Camps Page
	
	$course_image 			= get_field('course_image');
	$course_title 			= get_field('course_title');
	$course_description		= get_field('course_description');
	$course_content			= get_field('course_content');
	$whats_included			= get_field('whats_included');
	$duration				= get_field('duration');
	$credit_transfer		= get_field('credit_transfer');
	$fee_partner			= get_field('partner-university_participants');
	$fee_nonpartner			= get_field('nonpartner-university_participants');
	$coure_itinerary		= get_field('course_itinerary_details');
	
	
	// Image Size
	$courseDetail_img		= 'courseDetail-img';
	
	
	get_header(); ?>
			
			<div class="row">
				<div class=" medium-4 small-12 columns">
					<img style="width: 100%;" src="<?php echo $course_image['sizes'][$courseDetail_img]; ?>"/>
				</div>
				<div class="medium-8 small-12 columns">
					<p><?php echo $course_description; ?></p>
					<ul class="accordion" data-accordion data-allow-all-closed="true">
					  <li class="accordion-item is-active" data-accordion-item>
					    <a href="#" class="accordion-title">COURSE CONTENT</a>
					    <div class="accordion-content" data-tab-content>
					      <?php echo $course_content;?>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">WHAT'S INCLUDED</a>
					    <div class="accordion-content" data-tab-content>
					      <?php echo $whats_included;?>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">DURATION</a>
					    <div class="accordion-content" data-tab-content>
					      <?php echo $duration . ' Days';?>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">COURSE FEE</a>
					    <div class="accordion-content" data-tab-content>
					      <ul>
						      <li>Partner University Participants: <?php echo $fee_partner; ?></li>
						      <li>Non-partner University Participants: <?php echo $fee_nonpartner; ?></li>
					      </ul>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">COURSE ITENERARY</a>
					    <div class="row accordion-content" data-tab-content id="hz-accordion-width">
						    <div class="small-12 columns">
							    <?php if(have_rows('course_itinerary_details')):
								     	while(have_rows('course_itinerary_details')):
									     	the_row(); ?>
									     		<p><?php the_sub_field('day');?></p>
									     		<p><?php the_sub_field('activities');?></p>
									     		<hr/>
									     	<?php
								     	endwhile; 
							     endif; ?>
						    </div>
					    </div>
					  </li>
					</ul>
					<div class="row">
						<div class="small-12 columns">
							<a href="/mobility-course-application/"><button class="button round expanded hz-pink">Apply for this course</button></a>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>