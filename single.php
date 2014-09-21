<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php get_template_part('partials/article', get_post_format()); ?>

    <?php endwhile; ?>			

<?php else : ?>

<?php get_template_part('partials/article', '404'); ?>

<?php endif; ?>


<?php get_footer(); ?>