<?php
/*
  Template Name: Homepage
 */
?>
<?php get_header(); ?>

	    <div class="content">
		<div class="row clearfix">
		    <?php $number = 1; ?>
		    <?php while ($number <= 3) : ?>
			<?php
			$teaser_post = get_field('teaser-0' . $number);

			if ($teaser_post):
			    ?>

			    <?php
			    // override $post
			    $post = $teaser_post;
			    setup_postdata($post);
			    ?>
			    <div class="col-md-4">
				<?php get_template_part('partials/teaser', get_post_format()); ?>
			    </div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly   ?>

			<?php endif; ?>
			<?php $number++; ?>
		    <?php endwhile; ?>
		</div>
	    </div>
	    



<?php get_footer(); ?>


