<?php 
	// Variables for Exchange Programmes Page
	
	$programme_image			= get_field('programme_image');
	$programme_title			= get_field('programme_title');
	$programme_desc				= get_field('programme_description');
	$programme_content			= get_field('programme_content');
	$whats_included_programme	= get_field('whats_included_programme');
	$programme_duration			= get_field('programme_duration');
	$credit_transfer_ep			= get_field('credit_transfer_ep');
	$fee_partner_ep				= get_field('partner-university_participants_ep');
	$fee_nonpartner_ep			= get_field('nonpartner-university_participants_ep');
	$course_itinerary_details	= get_field('course_itinerary_details_ep');
	
	//Image Size
	$courseDetail_img		= 'courseDetail-img';
	
	get_header(); ?>
			
			<div class="row">
				<div class=" medium-4 small-12 columns">
					<img style="width: 100%;" src="<?php echo $programme_image['sizes'][$courseDetail_img]; ?>"/>
				</div>
				<div class="medium-8 small-12 columns">
					<p><?php echo $programme_desc;?></p>
					<ul class="accordion" data-accordion data-allow-all-closed="true">
					  <li class="accordion-item is-active" data-accordion-item>
					    <a href="#" class="accordion-title">COURSE CONTENT</a>
					    <div class="accordion-content" data-tab-content>
					      <p><?php echo $programme_content;?></p>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">WHAT'S INCLUDED</a>
					    <div class="accordion-content" data-tab-content>
					      <p><?php echo $whats_included_programme;?></p>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">DURATION</a>
					    <div class="accordion-content" data-tab-content>
					      <?php echo $programme_duration . ' Days';?>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">COURSE FEE</a>
					    <div class="accordion-content" data-tab-content>
					      <ul>
						      <li>Partner University Participants: <?php echo $fee_partner_ep; ?></li>
						      <li>Non-partner University Participants: <?php echo $fee_nonpartner_ep;?></li>
					      </ul>
					    </div>
					  </li>
					  <li class="accordion-item" data-accordion-item>
					    <a href="#" class="accordion-title">COURSE ITENERARY</a>
					    <div class="row accordion-content" data-tab-content id="hz-accordion-width">
						    <div class="small-12 columns">
							    <?php if(have_rows('course_itinerary_details_ep')):
								     	while(have_rows('course_itinerary_details_ep')):
									     	the_row(); ?>
									     		<p><?php the_sub_field('day_ep');?></p>
									     		<?php the_sub_field('activities_ep');?>
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