<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|', true, 'right'); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

    </head>

    <body <?php body_class(); ?>>
	<div id="wrapper" class="container-fluid">
	    <div class="row">
		<div class="col-md-3 sidebar">
		    <div class="top clearfix">
			<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
			    <?php bloginfo('name'); ?>
			</a>
		    </div>

		    <?php #if ((is_front_page())) : ?>
    		    <div class="banner">

			    <?php
			    query_posts(array(
				'post_type' => 'layout',
				'post_status' => 'publish',
				'layout-position' => 'profilfoto',
				'posts_per_page' => 1,
				'orderby' => 'date',
				'order' => 'DESC'
			    ));
			    ?>
			    <?php if (have_posts()) : ?>


				<?php while (have_posts()) : the_post(); ?>

				    <?php the_post_thumbnail('wpbs-featured'); ?>
				    <?php get_template_part('partials/edit', 'button'); ?>

				    <?php
				endwhile;
				wp_reset_query();
				?>

			    <?php endif; ?>
    		    </div>
		    <?php #endif; ?>

		    <div class="content">
			<?php
			if (!(is_front_page())) :
			#get_sidebar('sidebar');
			else :
			#get_sidebar('sidebar2');
			endif;
			?>

		    </div>
		    <div class="bottom awards">
			Mitglied im Anwaltsverein   
		    </div>
		</div>
		<div class="col-md-offset-3 col-md-9  main">
		    <div class="top clearfix">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('languages')) : ?>
			<?php endif; ?>
			<nav class="collapse navbar-collapse navbar-responsive-collapse"><?php wp_bootstrap_main_nav(); ?></nav>
		    </div>
		    <?php if ((is_front_page())) : ?>
    		    <div class="banner">
			    <?php
			    query_posts(array(
				'post_type' => 'layout',
				'post_status' => 'publish',
				'layout-position' => 'banner',
				'posts_per_page' => 1,
				'orderby' => 'date',
				'order' => 'DESC'
			    ));
			    ?>
			    <?php if (have_posts()) : ?>


				<?php while (have_posts()) : the_post(); ?>

				    <?php the_post_thumbnail('wpbs-featured'); ?>
				    <?php get_template_part('partials/edit', 'button'); ?>

				    <?php
				endwhile;
				wp_reset_query();
				?>

			    <?php endif; ?>
    		    </div>
		    <?php endif; ?>
		    <div class="content">
