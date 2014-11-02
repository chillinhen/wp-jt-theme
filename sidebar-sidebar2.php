<div id="sidebar2" role="complementary">

    <?php if (is_active_sidebar('sidebar2')) : ?>

	<?php dynamic_sidebar('sidebar2'); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
<?php if (current_user_can('edit_post')) : ?>
        <div class="alert alert-message">

    	<p><?php _e("Please activate some Widgets", "wpbootstrap"); ?>.</p>

        </div>
	<?php endif; ?>

    <?php endif; ?>

</div>