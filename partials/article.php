	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	    <header>

		<?php the_post_thumbnail('wpbs-featured'); ?>

		<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>

		<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>

	    </header> <!-- end article header -->

	    <section class="post_content clearfix" itemprop="articleBody">
		<?php the_content(); ?>

		<?php wp_link_pages(); ?>

	    </section> <!-- end article section -->

	    <footer>

		<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags", "wpbootstrap") . ':</span> ', ' ', '</p>'); ?>

		<?php get_template_part('partials/edit','info');?>

	    </footer> <!-- end article footer -->

	</article> <!-- end article -->