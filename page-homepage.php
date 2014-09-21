<?php
/*
  Template Name: Homepage
 */
?>

<?php get_header(); ?>





<div class="content">
    <div class="row clearfix">
	<!-- Teaser 01 -->
	<?php
	$teaser_01 = get_field('teaser-01');

	if ($teaser_01):
	    ?>
	    <?php
	    // override $post
	    $post = $teaser_01;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-4">
		<?php get_template_part('partials/teaser', get_post_format()); ?>
    	</div>
	    <?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<!-- Teaser 02 -->
	<?php
	$teaser_02 = get_field('teaser-02');

	if ($teaser_02):
	    ?>
	    <?php
	    // override $post
	    $post = $teaser_02;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-4">
		<?php get_template_part('partials/teaser', get_post_format()); ?>
    	</div>
	    <?php wp_reset_postdata(); ?>
	<?php endif; ?>  

	<!-- Teaser 03 -->
	<?php
	$teaser_03 = get_field('teaser-03');

	if ($teaser_03):
	    ?>
	    <?php
	    // override $post
	    $post = $teaser_03;
	    setup_postdata($post);
	    ?>
    	<div class="col-md-4">
		<?php get_template_part('partials/teaser', get_post_format()); ?>
    	</div>
	    <?php wp_reset_postdata(); ?>
	<?php endif; ?>  
    </div>
</div>





<?php get_footer(); ?>