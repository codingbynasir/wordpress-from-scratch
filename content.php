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
						 
	<p><?php echo get_the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Read more</a>
	</p>
</article>
