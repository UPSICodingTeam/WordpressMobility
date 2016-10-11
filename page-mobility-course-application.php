<?php acf_form_head(); ?>
<?php get_header(); ?>
	

<div class="row">
	<div class="medium-6 medium-offset-3 small-12 columns">
		<?php acf_form(array(
			'post_id'		=> 'new_post',
			'new_post'		=> array(
				'post_type'		=> 'application',
				'post_status'		=> 'publish'
			),
			'updated_message' => '<div class="text-center"><span class="success label">Application successfully submitted. Thank you!</span></div>',
			'submit_value'		=> 'Submit'
		)); ?>
	</div>
</div>

	


<?php get_footer(); ?>