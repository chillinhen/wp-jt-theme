	<?php 
	if ( current_user_can('edit_post') ) :?>
	<hr>
	<span class="meta pull-left">
	    <?php __("Posted"); ?>
	    <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time>
	    <?php __("by"); ?>
	    <?php the_author_posts_link(); ?> <span class="amp">&</span>
	    <?php __("filed under"); ?> <?php the_category(', '); ?><span class="amp">&</span>
	    <?php the_tags('<span class="tags tags-title">' . __("Schlagworte") . ':</span> ', ' '); ?>
	</span>
	
	<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-action pull-right"><i class="fa fa-pencil-square"></i> <?php __("Edit post"); ?></a>

	
	<?php endif;?>