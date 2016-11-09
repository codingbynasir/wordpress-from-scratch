<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php 
			if (have_posts()):
				while (have_posts()): the_post(); ?>
					<article class="post">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="post-info"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date(" F j, Y || g:i a"); ?>
						By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></a> Posted in <i class="fa fa-folder-open" aria-hidden="true"></i><?php $categories= get_the_category();
						$separator=",";
						$output="";
						if ($categories) {
							foreach ($categories as $category) {
								$output.='<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.$separator.'</a>';
							}
							echo trim($output, $separator);
						 } ?></p>
						<p><?php the_content(); ?></p>
					</article>
				<?php endwhile;

				else:
					echo "<p>No content found</p>";
			endif;
			?>
		</div>
		<div class="col-md-4">
			<h2> Right sidebar will be here</h2>
		</div>
	</div>
</div>
<?php get_footer(); ?>