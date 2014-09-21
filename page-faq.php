<?php get_header(); ?>
   
	<?php
	query_posts(array(
	    'post_type' => 'faq',
	    'post_status' => 'publish',
	    'orderby' => 'date',
	    'order' => 'DESC'
	));
	?>
	<div id="accordion">
	<?php if (have_posts()) : ?>
    	
		<?php while (have_posts()) : the_post(); ?>

		    <?php $counter = 1;?>
		    <h3>
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $counter; ?>">
			    <?php the_title(); ?>
			</a>
		    </h3>
		    <div id="collapse_<?php echo $counter; ?>" class="collapse in"><?php the_content(); ?></div>

		    <?php $counter++; ?>
		<?php endwhile; ?>
    	
	<?php endif; ?>
	    </div>


<?php get_footer(); ?>