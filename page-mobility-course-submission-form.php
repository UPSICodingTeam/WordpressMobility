<?php acf_form_head(); ?>
<?php get_header(); ?>
<div class="row">
	<div class="small-12 text-center columns">
		<h4>Instructions</h4>
		<p>Welcome to Mobility Course submission page. Here you can choose whether to submit a new Summer Camp course, or a new Exchange Programme. All submissions will be reviewed by the committee before offering them to public/students. Please ensure that you have filled the course/programme details correctly before submit. If you have any trouble filling this form, please get in touch with the Working Committee for further assistance. Thank you very much, and have a nice day.</p>
	</div>
</div>
	
<div class="row collapse">
  <div class="medium-3 columns">
    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
      <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true"><i class="fa fa-sun-o" aria-hidden="true"></i> Submit New Summer Camp Course</a></li>
      <li class="tabs-title"><a href="#panel2v"><i class="fa fa-exchange" aria-hidden="true"></i> Submit New Exchange Programme</a></li>
    </ul>
    </div>
    <div class="medium-9 columns">
    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
      <div class="tabs-panel is-active" id="panel1v">
        <div class="row">
			<div class="small-12 columns">
				<?php acf_form(array(
					'post_id'		=> 'new_post',
					'new_post'		=> array(
						'post_type'		=> 'summer_camp',
						'post_status'		=> 'draft'
					),
					'updated_message' => '<div class="text-center"><span class="success label">The new Summer Camp has been successfully submitted. Thank you!</span></div>',
					'submit_value'		=> 'Submit'
				)); ?>
			</div>
		</div>
      </div>
      <div class="tabs-panel" id="panel2v">
	      <div class="row">
			<div class="small-12 columns">
				<?php acf_form(array(
					'post_id'		=> 'new_post',
					'new_post'		=> array(
						'post_type'		=> 'exchange_programmes',
						'post_status'		=> 'draft'
					),
					'updated_message' => '<div class="text-center"><span class="success label">The new Exchange Programme has been successfully submitted. Thank you!</span></div>',
					'submit_value'		=> 'Submit'
				)); ?>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

	


<?php get_footer(); ?>