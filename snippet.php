<div class="content">
    <div class="row clearfix">
	<?php $number = 1; ?>
	<?php while ($number <= 3) : ?>
	    <?php
	    $related_post = get_field('related_post_0' . $number);

	    if ($related_post):
		?>

		<?php
		// override $post
		$post = $related_post;
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


