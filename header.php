<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div class="container">
		<!-- Site-header -->
		<header class="site-header">
			<div class="row">
				<div class="col-md-6">
					<h1>
						<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</h1>
					<h5>
						<?php bloginfo('description'); ?>
						<?php if (is_page('database')) { ?>
							Thanks for visit our page
						<?php } ?>
					</h5>
				</div>
				<div class="col-md-6 text-right">
					<?php get_search_form(); ?>
				</div>
			</div>
			
			<nav class="site-nav">
			<?php 
			$args=array(
				'theme_location'=>'primary'
			);
			 ?>
				<?php wp_nav_menu($args); ?>
			</nav>
		</header><!-- Site-header -->
	</div>
			