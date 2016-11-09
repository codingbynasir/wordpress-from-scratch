<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php 
			if (have_posts()):?>
				<h2>Search result for: <?php the_search_query(); ?></h2>
				<?php while (have_posts()): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile;

				else:
					echo "<p>No content found</p>";
			endif;
			?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>