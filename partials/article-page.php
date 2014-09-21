<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <header>

	<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>

    </header> <!-- end article header -->

    <section class="post_content clearfix" itemprop="articleBody">
	<?php the_content(); ?>

    </section> <!-- end article section -->

    <footer>

	<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags", "wpbootstrap") . ':</span> ', ', ', '</p>'); ?>

    </footer> <!-- end article footer -->

</article>
