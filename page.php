<?php /*
* Standard template for pages.
*/

get_header(); ?>

<div class="container" id="page-container">
	<div class="row">
		<div class="col-lg-8 col-offset-2">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( get_field('change_title') == true ) { ?>
					<h1 class="page-title"><?php the_field('new_page_title'); ?></h1>
				<?php } else { ?>
					<h1 class="page-title"><?php the_title(); ?></h1>
				<?php } ?>
				<?php the_content();
			endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>