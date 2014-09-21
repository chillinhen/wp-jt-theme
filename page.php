<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_template_part('partials/article', 'page'); ?>

    <?php endwhile; ?>		

<?php else : ?>

<?php endif; ?>


<?php get_footer(); ?>