
<?php global $more;
$more = FALSE; ?>

<div class="box">
    <h3 class="clearfix"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php the_content('... mehr Infos'); ?>
    <footer class="clearfix">
<?php get_template_part('partials/edit', 'info'); ?>
    </footer>
</div>