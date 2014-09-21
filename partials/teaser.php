
<?php global $more; $more = FALSE; ?>

<div class="box">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php the_content('...'); ?>

	<?php get_template_part('partials/edit', 'info'); ?>
</div>