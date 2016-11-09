<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div>
		<lable class="screen-reader-text" for="s">Search:</lable>
		<input type="search" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
		<input type="submit" id="searchsubmit" value="Search"/>
	</div>
</form>