<?php /*
Template Name: Home-Slider
*/

get_header(); ?>

<div class="container" id="homepage-container">
	
	<div class="row homepage-row">
		<div class="col-lg-5 pull-right cube-col">
			<div class="home-gif-wrap">
				<img class="home-gif" src="" />
				<div class="home-gif-overlay text-center">

				</div>
			</div>
		</div>
		<div class="col-lg-7 homepage-content">
			<h1 class="homepage-header"><?php the_field('homepage_header'); ?></h1>
			<?php the_field('main_content'); ?>
<br class="para"/>
<br class="para"/>
<br class="para"/>
<br class="para"/>
<br class="para"/>
		</div>
	</div>
</div>

<div class="wrap-gray wrap-custom" id="home-bottom-section">
	<div class="container">
	
		<div class="row">
			<div class="col-lg-3" style="z-index: 9999">
				<a class="btn btn-danger" id="home-download-button" href="/contact">DOWNLOAD</a>
				<div class="brief-wrap">
					<img src="/wp-content/uploads/2013/08/BRIEF_COVER.png" class="brief-cover" />
				</div>
			</div>
			<div class="col-lg-9">
				<h3 class="bottom-header"><?php the_field('bottom_header'); ?></h3>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-4">
				<ol class="benefits-list">
					<?php while ( has_sub_field('benefits_column_1') ) :?>
						<li class="benefit"><?php the_sub_field('benefit'); ?></li>
					<?php endwhile; ?>
				</ol>
			</div>
			<div class="col-lg-4">
				<ol class="benefits-list" start="4">
					<?php while ( has_sub_field('benefits_column_2') ) :?>
						<li class="benefit"><?php the_sub_field('benefit'); ?></li>
					<?php endwhile; ?>
				</ol>
			</div>
			<div class="col-lg-4">
				<ol class="benefits-list" start="7">
					<?php while ( has_sub_field('benefits_column_3') ) :?>
						<li class="benefit"><?php the_sub_field('benefit'); ?></li>
					<?php endwhile; ?>
				</ol>
			</div>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>