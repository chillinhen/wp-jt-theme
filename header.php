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


    <main class="container">
	<div class="row">
	    <header>
		<div class="col-md-3 sidebar">
		    <a id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/img/logo.png" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<div class="col-md-9 content clearfix">
		    <div class="languages text-right">
			<a href="#">deutsch</a>
			<a href="#">kroatisch</a>
		    </div>
		    <div class="navbar navbar-default">
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			    </button>
			</div>
			<div class="collapse navbar-collapse navbar-responsive-collapse navbar-right">
			    <?php wp_bootstrap_main_nav(); ?>
			</div>
		    </div>
		</div>
	    </header>
	    <section role="banner">
		<div class="col-md-3 sidebar">
		    <img src="http://localhost:8888/wordpress/kanzlei-trogrlic/wp-content/uploads/2014/06/foto.png" alt=""/>
		</div>
		<div class="col-md-9 content">
		    <img src="http://localhost:8888/wordpress/kanzlei-trogrlic/wp-content/uploads/2014/06/room.png" alt=""/>
		</div>
	    </section>
	    <section role="content">
		    <div class="col-md-3 sidebar">
			...
		    </div>
		    <div class="col-md-9 sidebar content">
			...
		    </div>
	    </section>
	</div>
    </main>
    <footer role="contentinfo">
	<div class="container">
	    <div class="row">
		<div class="col-md-3 sidebar">
		    <a href="http://anwaltverein.de/" target="_blank">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/img/logo_anwaltsverein.png" alt="Mitglied im Anwaltverein">
		    </a>
		</div>
		<div class="col-md-9 sidebar content"></div>
	    </div>
	</div>
    </footer>






