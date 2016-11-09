	<div class="container">
		<div class="callout">
			<h1><?php echo get_theme_mod('wp_news_footer_callout_headline'); ?></h1>
			<h5><?php echo get_theme_mod('wp_news_footer_callout_text'); ?></h5>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php dynamic_sidebar('footer1'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('footer2'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('footer3'); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<footer class="site-footer">
			<nav class="site-nav">
			<?php 
			$args=array(
				'theme_location'=>'footer'
			);

			 ?>
				<?php wp_nav_menu($args); ?>
			</nav>
			<p><?php bloginfo('name'); ?>- &copy; <?php echo date('y'); ?></p>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>