<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php 
			if (have_posts()):
				while (have_posts()): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile;

				else:
					echo "<p>No content found</p>";
			endif;
			?>
		</div>
		<div class="col-md-4">
		<?php dynamic_sidebar('sidebar1'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>