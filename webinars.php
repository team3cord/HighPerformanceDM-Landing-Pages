<?php /*

Template Name: Webinars

*/



get_header(); ?>



<div class="wrap-process wrap-gray">

	<div class="container">

		<div class="row">

			<div class="col-lg-8 video-col">

				<?php the_field('video_code'); ?>

			</div>

			<div class="col-lg-4">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if ( get_field('change_title') == true ) { ?>

						<h1 class="process-title"><?php the_field('new_page_title'); ?></h1>

					<?php } else { ?>

						<h1 class="process-title"><?php the_title(); ?></h1>

					<?php } ?>

					<?php the_content();

				endwhile; ?>

			</div>

		</div>

	</div>

</div>



<div class="container testimonial-container">

	<div class="row">

		<div class="col-sm-6 col-offset-1 testimonial-col">

			<?php the_field('testimonial'); ?>

		</div>

		<div class="col-sm-4 testimonial-image-col">

			<img class="testimonial-image" src="<?php the_field('testimonial_image'); ?>" />

			<?php the_field('testimonial_caption'); ?>

		</div>

	</div>

	

	<div class="row clients-row">

		<div class="col-lg-12 text-center">

			<h4 class="clients-header">Our Clients Include:</h4>

			<div class="clients-wrap">

				<div class="clients-scroll">

					<?php while ( has_sub_field('clients') ) : ?>

						<img src="<?php the_sub_field('client_logo'); ?>" class="client-logo" title="<?php the_sub_field('client_name'); ?>" />

					<?php endwhile; ?>

				</div>

			</div>

		</div>

	</div>

</div>



<?php get_footer(); ?>