
</div>
<div class="bottom">
        <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('adress1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('adress2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Login') ) : ?>
		            <?php endif; ?>
		          </div>
    <?php #wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
</div>
</div>
</div>
</div>

<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
