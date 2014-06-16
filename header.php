<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600,600italic|Archivo+Narrow:400italic,700italic|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo ( 'title' ); ?><?php wp_title( '|' ); ?></title>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
<div class="menu-bar">
	<div class="container">
	
		<div class="row menu-row">
			<div class="col-sm-4" id="logo-col">
				<a class="logo-link" href="/home"><img src="/wp-content/uploads/2013/08/logo.png" class="logo" id="header-logo" alt="High Performance DM Logo" /></a>
			</div>
			<div class="col-sm-8">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => 'main-menu' ) ); ?>
			</div>
		</div>
		
		<?php if ( get_field('download_header') == true ) : ?>

			<div class="row">
				<div class="col-lg-12">
					<a class="btn btn-danger pull-right" id="header-download-button" href="/contact">DOWNLOAD</a>
					<p class="header-download text-right"><strong><em>The 9 Secrets of High-Performance Marketing Insider Briefs</em></strong><br />
					written by a direct mail legend and Harvard MBA</p>
				</div>
			</div>
		
		<?php endif; ?>
		
	</div>
</div>