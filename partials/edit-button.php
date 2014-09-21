	<?php 
	if ( current_user_can('edit_post') ) :?>

	<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-action edit"><i class="fa fa-pencil-square fa-lg"></i> <?php __("Edit post"); ?></a>

	
	<?php endif;?>