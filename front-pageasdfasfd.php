<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php 
			if (have_posts()):
				while (have_posts()): the_post();
					the_content();
				endwhile;

				else:
					echo "<p>No content found</p>";
			endif;
			//new 
			$latest_cat = new WP_Query('cat=6&posts_per_page=5&orderby=title&order=ASC');
			echo "<h1 class='well'>Latest Post</h1>";
			if ($latest_cat->have_posts()):
				while ($latest_cat->have_posts()): $latest_cat->the_post();?>
					<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_content(); ?></p>
				<?php endwhile;

				else:
					echo "<p>No content found</p>";
			endif;
			?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>