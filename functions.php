<?php 

function wp_news_resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.1', 'all');
	wp_enqueue_style( 'Script', get_template_directory_uri() . '/css/bootstrap.js', array(), '1.1', 'all');
	wp_enqueue_style('Bootstrap_script', get_template_directory_uri().'/js/bootstrap.js', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts','wp_news_resources');

//Navigation menus
register_nav_menus(array(
	'primary'=>__('Primary menu'),
	'footer'=>__('Footer menu'),
	'sidebar'=>__('Right Sidebar')
	));
//Customize excerpt word count length
function custom_excerpt_length(){
	return 25;
}
add_filter('excerpt_length','custom_excerpt_length');



//Theme featured image setup
function setup_featured_image(){
//Navigation menus
register_nav_menus(array(
	'primary'=>__('Primary menu'),
	'footer'=>__('Footer menu')
	));
//Add featured image support
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','setup_featured_image');


//Add widgets
function ourWidgetsInit(){
	register_sidebar(array(
		'name'=>'Right Sidebar',
		'id'=>'sidebar1',
		'before_widget'=>'<div class="widget-item">',
		'after_widget'=>'</div>'
		));
	register_sidebar(array(
		'name'=>'Footer area 1',
		'id'=>'footer1',
		'before_widget'=>'<div class="widget-item">',
		'after_widget'=>'</div>'
		));
	register_sidebar(array(
		'name'=>'Footer area 2',
		'id'=>'footer2',
		'before_widget'=>'<div class="widget-item">',
		'after_widget'=>'</div>'
		));
	register_sidebar(array(
		'name'=>'Footer area 3',
		'id'=>'footer3',
		'before_widget'=>'<div class="widget-item">',
		'after_widget'=>'</div>'
		));

}
add_action('widgets_init','ourWidgetsInit');


//Customize appearance option
function customAppearance($wp_customize){
	//All Link color
	$wp_customize->add_setting('wpnews_link_color',array(
		'default'=>'#006ec3',
		'transport'=>'refresh'));
	//All button color
	$wp_customize->add_setting('wpnews_btn_color',array(
		'default'=>'#006ec3',
		'transport'=>'refresh'));
	$wp_customize->add_section('wpnews_color', array(
		'title'=> __('Standard colors','wpnews'),
		'priority'=> 30));
	//control for link
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpnews_color_control', array(
		'label'=>__('Link color','WP news'),
		'section'=>'wpnews_color',
		'settings'=>'wpnews_link_color')));
	//controll for button
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wpnews_btn_color_control', array(
		'label'=>__('Button color','WP news'),
		'section'=>'wpnews_color',
		'settings'=>'wpnews_btn_color')));
}
add_action('customize_register','customAppearance');

//Output Customize css
function Customize_Css(){?>
	<style>
		a:link,
		a:visited{
			color: <?php echo get_theme_mod('wpnews_link_color'); ?>;
		}
		input#searchsubmit{
			background: <?php echo get_theme_mod('wpnews_btn_color'); ?>;
		}
	</style>
<?php }
add_action('wp_head','Customize_Css');


//All Footer Callout section
function wp_news_footer_callout($wp_customize){
	$wp_customize->add_section('wp_news_footer_callout_section',array(
		'title'=>'footer callout title'));
	$wp_customize->add_setting('wp_news_footer_callout_headline',array(
		'default'=>'Example Headline Text!'));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'wp_footer_callout_control',array(
		'label'=>'Headline',
		'section'=>'wp_news_footer_callout_section',
		'settings'=>'wp_news_footer_callout_headline')));


	$wp_customize->add_setting('wp_news_footer_callout_text',array(
		'default'=>'Example Paragraph Text!'));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'wp_footer_callout_text_control',array(
		'label'=>'Paragraph',
		'section'=>'wp_news_footer_callout_section',
		'settings'=>'wp_news_footer_callout_text',
		'type'=>'textarea')));

}
add_action('customize_register','wp_news_footer_callout');