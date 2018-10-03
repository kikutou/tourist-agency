<?php
/**
 * Vacation functions and definitions
 *
 * @package Vacation
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}	
$content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}


if ( ! function_exists( 'vacation_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vacation_setup() {

	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'vacation', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_image_size('homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vacation' ),
		'navigation'	=> __('Footer Navigation', 'vacation'),
		'credit' => __('Credit Card Support', 'vacation'),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // vacation_setup
add_action( 'after_setup_theme', 'vacation_setup' );


function vacation_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vacation' ),
		'description'   => __( 'Appears on blog page sidebar', 'vacation' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vacation' ),
		'description'   => __( 'Appears on page sidebar', 'vacation' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Widget', 'vacation' ),
		'description'   => __( 'Appears on header of the page', 'vacation' ),
		'id'            => 'sidebar-3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="header-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Left', 'vacation' ),
		'description'   => __( 'Appears on Left side of footer ', 'vacation' ),
		'id'            => 'sidebar-4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="footer-title">',
		'after_title'   => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Right', 'vacation' ),
		'description'   => __( 'Appears on Right side of footer ', 'vacation' ),
		'id'            => 'sidebar-5',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="footer-title">',
		'after_title'   => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'vacation' ),
		'description'   => __( 'Appears on footer as a first column ', 'vacation' ),
		'id'            => 'sidebar-6',
		'before_widget' => '<div class="footer-col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'vacation' ),
		'description'   => __( 'Appears on footer as a second column ', 'vacation' ),
		'id'            => 'sidebar-7',
		'before_widget' => '<div class="footer-col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'vacation' ),
		'description'   => __( 'Appears on footer as a third column ', 'vacation' ),
		'id'            => 'sidebar-8',
		'before_widget' => '<div class="footer-col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'vacation' ),
		'description'   => __( 'Appears on footer as a fourth column ', 'vacation' ),
		'id'            => 'sidebar-9',
		'before_widget' => '<div class="footer-col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'vacation_widgets_init' );

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );


function vacation_scripts() {
	wp_enqueue_style( 'vacation-gfonts-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' );
	wp_enqueue_style( 'vacation-gfonts-arimo', '//fonts.googleapis.com/css?family=Arimo');
	wp_enqueue_style( 'vacation-gfonts-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' );
	
	wp_enqueue_style( 'vacation-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'vacation-editor-style', get_template_directory_uri().'/editor-style.css' );
	wp_enqueue_style( 'vacation-base-style', get_template_directory_uri().'/css/style_base.css' );
	wp_enqueue_style( 'vacation-responsive-style', get_template_directory_uri().'/css/theme-responsive.css' );
	wp_enqueue_style( 'vacation-nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	if ( (of_get_option('innerpageslider', true) != 'hide') || is_home() || is_front_page() ) { 
		wp_enqueue_script( 'vacation-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	}
	wp_enqueue_script( 'vacation-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'vacation-smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array('jquery') );
	wp_enqueue_script( 'vacation-filter-scripts', get_template_directory_uri().'/js/filter-gallery.js' );	
	wp_enqueue_style( 'vacation-font-awesome-style', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'vacation-animation-style', get_template_directory_uri().'/css/animation.css' );
	wp_enqueue_script( 'vacation_bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery') );
	wp_enqueue_style( 'vacation-bxslider-style', get_template_directory_uri()."/css/jquery.bxslider.css" );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vacation_scripts' );

/*function vacation_font_scripts() {
	$typebody 		  		  = of_get_option('bodyfontface');
	wp_enqueue_style( 'vacation-gfonts', '//fonts.googleapis.com/css?family='.rawurlencode($typebody['face']) );
}
add_action( 'wp_enqueue_scripts', 'vacation_font_scripts' );*/


function media_css_hook(){
	
	?>
    	
    	<script>
jQuery(window).scroll( function(){
	var wwd = jQuery(window).width();
	if( wwd > 939 ){
		fixedHeader(); 	// fix header on page scroll
	}
});

// function to fix header on page scroll / load
var fixedHeader = function(){
	var hdrHt = jQuery('div.header').height();
	var scrPos = jQuery(window).scrollTop();
	var aBarHt = jQuery('#wpadminbar').height();
	<?php if( of_get_option('headstick',true) != true) { ?>
	if( scrPos > (hdrHt+35)/3 ){
		jQuery('div.header').addClass('fixed');
		jQuery('div.header').next();
	}else{
		jQuery('div.header').removeClass('fixed');
		jQuery('div.header').next();
	}
	<?php } ?>
}
			jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({
        	effect:'<?php echo of_get_option('slideefect','fade'); ?>', //sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse
		  	animSpeed: <?php echo of_get_option('slideanim',500); ?>,
			pauseTime: <?php echo of_get_option('slidepause',3000); ?>,
			directionNav: <?php echo of_get_option('slidenav','true'); ?>,
			controlNav: <?php echo of_get_option('slidepage','true'); ?>,
			pauseOnHover: <?php echo of_get_option('slidepausehover','true'); ?>,
    });
});
		</script>
    <?php
		
	}
add_action('wp_head','media_css_hook');


function vacation_custom_head_codes() { 
	if ( function_exists('of_get_option') ){
		$typebody 		  		  = of_get_option('bodyfontface');
		$typelogo 				  = of_get_option('logofontface');
		$typetagline 			  = of_get_option('taglinefontface');
		$typenav	 			  = of_get_option('navfontface');
		$typesldone	 			  = of_get_option('sldtitleone');
		$typesldtwo	 			  = of_get_option('sldtitletwo');
		$typeslddesc 			  = of_get_option('slddscfontface');
		$typesertitle 			  = of_get_option('sertitlefont');
		$typeplacestitle 		  = of_get_option('placestitlefont');
		$typeplsubtitle 		  = of_get_option('plsubtitlefont');
		$typeonehalftitle 		  = of_get_option('onehalftitlefont');
		$typetesttitle 		  	  = of_get_option('testtitlefont');
		$typesectitle 			  = of_get_option('sectitlefont');
		$typesecsubtitle 		  = of_get_option('secsubtitlefont');
		$typepagetitle 			  = of_get_option('pagetitlefont');
		$typewidgettitle		  = of_get_option('widgettitlefont');
		$typefootertitle		  = of_get_option('footertitlefont');
		$typefootercontent		  = of_get_option('footercontentfont');
	wp_enqueue_style( 'vacation-gfonts', '//fonts.googleapis.com/css?family='.rawurlencode($typebody['face'].'|'.$typelogo['face'].'|'.$typetagline['face'].'|'.$typenav['face'].'|'.$typesldone['face'].'|'.$typesldtwo['face'].'|'.$typeslddesc['face'].'|'.$typesertitle['face'].'|'.$typeplacestitle['face'].'|'.$typeplsubtitle['face'].'|'.$typeonehalftitle['face'].'|'.$typetesttitle['face'].'|'.$typesectitle['face'].'|'.$typesecsubtitle['face'].'|'.$typepagetitle['face'].'|'.$typefootertitle['face']) );
		if ( of_get_option('style2', true) != '' ) {
			echo "<style>". esc_html( of_get_option('style2', true) ) ."</style>";
		}
		echo "<style>";
		if ( of_get_option('bodyfontface', true) != '') {
			echo 'body, .blogposts p, .videos .one_half.last_column p, .testimonial-section, .bx-wrapper .testimonials-carousel-content, .address{font-family:'.$typebody['face'].';font-size:'.$typebody['size'].';color:'.$typebody['color'].';font-weight:'.$typebody['style'].';}';
		}
		if ( of_get_option('bodyfontcolor', true) != '' ) {
			echo 'body, .contact-form-section .address, .testimonial-section .testimonial-box .testimonial-content .testimonial-mid, .accordion-box .acc-content{color:'. esc_html( of_get_option('bodyfontcolor', true) ) .';}';
		}
		if( of_get_option('bodyfontsize',true) != ''){
			echo "body{font-family:".$typebody['face'].";font-size:".$typebody['size'].";color:".$typebody['color'].";font-weight:".$typebody['style'].";}";
		}
		if( of_get_option('logofontface',true) != ''){
			echo ".header .header-inner .logo h1, .logo a{font-family:".$typelogo['face'].";color:".$typelogo['color'].";font-size:".$typelogo['size'].";font-weight:".$typelogo['style']."}";
		}
		if( of_get_option('taglinefontface',true) != ''){
			echo ".header .header-inner .logo p{font-family:".$typetagline['face'].";color:".$typetagline['color'].";font-size:".$typetagline['size'].";font-weight:".$typetagline['style']."}";
		}
		if ( of_get_option('navfontface', true) != '') {
			echo '.header .header-inner .nav ul{font-family:'. $typenav['face'] .';font-size:'.$typenav['size'].';color:'.$typenav['color'].';font-weight:'.$typenav['style'].'}';
		}
		if ( of_get_option('navfontcolor', true) != '' ) {
			echo '.header .header-inner .nav ul li a, .header .header-inner .nav ul li ul li a{color:'. $typenav['color'] .';}';
		}
		if ( of_get_option('navhovercolor', true) != '' ) {
			echo '.header .header-inner .nav ul li a:hover{color:'. esc_html( of_get_option('navhovercolor', '#ffffff') ) .';}';
		}
		if( of_get_option('sldtitleone',true) != ''){
			echo "#slider .top-bar h4{font-family:".$typesldone['face'].";color:".$typesldone['color'].";font-size:".$typesldone['size'].";font-weight:".$typesldone['style']."}";
		}
		if( of_get_option('sldtitletwo',true) != ''){
			echo "#slider .top-bar h2{font-family:".$typesldtwo['face'].";color:".$typesldtwo['color'].";font-size:".$typesldtwo['size'].";font-weight:".$typesldtwo['style']."}";
		}
		if( of_get_option('slddscfontface',true) != ''){
			echo "#slider .top-bar p{font-family:".$typeslddesc['face'].";color:".$typeslddesc['color'].";font-size:".$typeslddesc['size'].";font-weight:".$typeslddesc['style']."}";
		}
		if( of_get_option('sertitlefont',true) != ''){
			echo ".services-inner h2{font-family:".$typesertitle['face'].";color:".$typesertitle['color'].";font-size:".$typesertitle['size'].";font-weight:".$typesertitle['style']."}";
		}
		if( of_get_option('placestitlefont',true) != ''){
			echo ".places-box h2, .special-inner h2, .blogposts h2{font-family:".$typeplacestitle['face'].";color:".$typeplacestitle['color'].";font-size:".$typeplacestitle['size'].";font-weight:".$typeplacestitle['style']."}";
		}
		if( of_get_option('placestitlefont',true) != ''){
			echo ".blogposts h2 a{color:".$typeplacestitle['color']."}";
		}
		if( of_get_option('plsubtitlefont',true) != ''){
			echo ".places-box h3{font-family:".$typeplsubtitle['face'].";color:".$typeplsubtitle['color'].";font-size:".$typeplsubtitle['size'].";font-weight:".$typeplsubtitle['style']."}";
		}
		if( of_get_option('onehalftitlefont',true) != ''){
			echo ".videos .one_half.last_column h3{font-family:".$typeonehalftitle['face'].";color:".$typeonehalftitle['color'].";font-size:".$typeonehalftitle['size'].";font-weight:".$typeonehalftitle['style']."}";
		}
		if( of_get_option('testtitlefont',true) != ''){
			echo ".bx-wrapper .testimonials-name{font-family:".$typetesttitle['face'].";color:".$typetesttitle['color'].";font-size:".$typetesttitle['size'].";font-weight:".$typetesttitle['style']."}";
		}
		if( of_get_option('sectitlefont',true) != '' ){
			echo "h2.section-title{font-family:".$typesectitle['face'].";font-size:".$typesectitle['size'].";font-weight:".$typesectitle['style']."}";
		}
		if( of_get_option('secsubtitlefont',true) != '' ){
			echo ".section-subtitle{font-family:".$typesecsubtitle['face'].";font-size:".$typesecsubtitle['size'].";font-weight:".$typesecsubtitle['style']."}";
		}
		if( of_get_option('pagetitlefont',true) != '' ){
			echo "h1.entry-title{font-family:".$typepagetitle['face'].";font-size:".$typepagetitle['size'].";font-weight:".$typepagetitle['style'].";color:".$typepagetitle['color']."}";
		}
		if( of_get_option('widgettitlefont',true) != '' ){
			echo "h3.widget-title{font-family:".$typewidgettitle['face'].";font-size:".$typewidgettitle['size'].";font-weight:".$typewidgettitle['style'].";color:".$typewidgettitle['color']."}";
		}
		if( of_get_option('footertitlefont',true) != '' ){
			echo ".footer-col h2{font-family:".$typefootertitle['face'].";font-size:".$typefootertitle['size'].";font-weight:".$typefootertitle['style'].";color:".$typefootertitle['color']."}";
		}
		if( of_get_option('footercontentfont',true) != '' ){
			echo "#main-footer, .copyright ul li, .footer-col ul li a, .footer-col .foot-post a, .footer-col a{font-family:".$typefootercontent['face'].";font-size:".$typefootercontent['size'].";font-weight:".$typefootercontent['style'].";color:".$typefootercontent['color']."}";
		}
		if ( of_get_option('footbgcolor', true) != '' ) {
			echo '#main-footer{background-color:'. of_get_option('footbgcolor', '#1d1d1d') .';}';
		}
		if ( of_get_option('linkcolor', true) != '' ) {
			echo 'a, .cat_comments, .cat_comments .cat i.fa, .cat_comments .comnt i.fa{color:'. esc_html( of_get_option('linkcolor', '#464545') ) .';}';
		}
		if ( of_get_option('linkhovercolor', true) != '' ) {
			echo 'a:hover{color:'. esc_html( of_get_option('linkhovercolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('bodybgcolor', true) != '' ) {
			echo 'body{background-color:'. esc_html( of_get_option('bodybgcolor', '#ffffff') ) .';}';
		}
		
		if ( of_get_option('topstripbgcolor', true) != '' ) {
			echo '.header .header-inner .header-top{background-color:'. esc_html( of_get_option('topstripbgcolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('navhvbgcolor', true) != '' ) {
			echo '.header .header-inner .nav ul li a:hover, .header .header-inner .nav ul li.current-menu-item{background-color:'. esc_html( of_get_option('navhvbgcolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('serbgcolor', true) != '' ) {
			echo '#services-box{background-color:'. esc_html( of_get_option('serbgcolor', '#ececec') ) .';}';
		}
		if ( of_get_option('serinbgcolor', true) != '' ) {
			echo '.services-inner{background-color:'. esc_html( of_get_option('serinbgcolor', '#ffffff') ) .';}';
		}
		if ( of_get_option('serhvbgcolor', true) != '' ) {
			echo '#services-box:hover{background-color:'. esc_html( of_get_option('serhvbgcolor', '#b1e0f4') ) .';}';
		}
		if ( of_get_option('serinhvbgcolor', true) != '' ) {
			echo '#services-box:hover .services-inner{background-color:'. esc_html( of_get_option('serinhvbgcolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('checkbgcolor', true) != '' ) {
			echo '#services-box a.check, .places-box a.check:hover{background-color:'. esc_html( of_get_option('checkbgcolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('checkhvbgcolor', true) != '' ) {
			echo '#services-box:hover a.check{background-color:'. esc_html( of_get_option('checkhvbgcolor', '#ffffff') ) .';}';
		}
		if ( of_get_option('fourthreebgcolor', true) != '' ) {
			echo '.duration, .special-box .discount{background-color:'. esc_html( of_get_option('fourthreebgcolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('threebxbgcolor', true) != '' ) {
			echo '.special-box{background-color:'. esc_html( of_get_option('threebxbgcolor', '#ffffff') ) .';}';
		}
		if ( of_get_option('cntbgcolor', true) != '' ) {
			echo 'a.read-more, input.search-submit, .post-password-form input[type=submit], #contact input[type="submit"]{background-color:'. esc_html( of_get_option('cntbgcolor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('cnthvbgcolor', true) != '' ) {
			echo 'a.read-more:hover, input.search-submit:hover, .post-password-form input[type=submit]:hover, #contact input[type="submit"]:hover{background-color:'. esc_html( of_get_option('cnthvbgcolor', '#222222') ) .';}';
		}
		if ( of_get_option('postmetabg', true) != '' ) {
			echo 'a.blog-more{background-color:'. esc_html( of_get_option('postmetabg', '#00b1e9') ) .';}';
		}
		if ( of_get_option('cntfontcolor', true) != '' ) {
			echo 'a.read-more, .common_btn{color:'. esc_html( of_get_option('cntfontcolor', '#ffffff') ) .';}';
		}
		if ( of_get_option('socialiconcol', true) != '' ) {
			echo '.header-top .top-right .social-icons a, .top-left p a, .top-left .fa-envelope, .top-left .fa-phone, .top-left p{color:'. esc_html( of_get_option('socialiconcol', '#ffffff') ) .';}';
		}
		if ( of_get_option('socialiconcolhv', true) != '' ) {
			echo '.header-top .top-right .social-icons a:hover{color:'. esc_html( of_get_option('socialiconcolhv', '#222222') ) .';}';
		}
		if ( of_get_option('footanchor', true) != '' ) {
			echo '.footer-col ul li a:hover, .footer-col .foot-post a:hover{color:'. esc_html( of_get_option('footanchor', '#00b1e9') ) .';}';
		}
		if ( of_get_option('copyfontcolor', true) != '' ) {
			echo '.copyright{color:'. esc_html( of_get_option('copyfontcolor', '#ffffff') ) .';}';
		}		
		if ( of_get_option('copybgcolor', true) != '' ) {
			echo '.copyright-wrapper{background-color:'. esc_html( of_get_option('copybgcolor', '#00b1e9') ) .';}';
		}
		if( of_get_option('sldnavbg',true) != ''){
			echo ".nivo-directionNav a{background:url(".get_template_directory_uri()."/images/slide-nav.png) no-repeat scroll 0 0 ".of_get_option('sldnavbg','#373a3f').";}";
		}
		if( of_get_option('sldpagebg',true) != ''){
			echo ".nivo-controlNav a{background-color:".of_get_option('sldpagebg','#ffffff')."}";
		}
		if( of_get_option('sldpagehvbg',true) != ''){
			echo ".nivo-controlNav a.active{background-color:".of_get_option('sldpagehvbg','#00b1e9')."}";
		}
		if( of_get_option('blogpagebg',true) != ''){
			echo ".pagination ul li span, .pagination ul li a{background:".of_get_option('blogpagebg','#222222')."}";
		}
		if( of_get_option('blogpagehvbg',true) != ''){
			echo ".pagination ul li .current, .pagination ul li a:hover{background:".of_get_option('blogpagehvbg','#00b1e9')."}";
		}
		if ( of_get_option('hovertitle', true) != '' ) {
			echo '#services-box:hover h2, #services-box:hover i.fa, #services-box:hover p{color:'. esc_html( of_get_option('hovertitle', '#ffffff') ) .';}';
		}
		if ( of_get_option('checkbtn', true) != '' ) {
			echo '#services-box a.check{color:'. esc_html( of_get_option('checkbtn', '#ffffff') ) .';}';
		}
		if ( of_get_option('checkhvbtn', true) != '' ) {
			echo '#services-box:hover a.check{color:'. esc_html( of_get_option('checkhvbtn', '#00b1e9') ) .';}';
		}
		if ( of_get_option('daysdiscount', true) != '' ) {
			echo '.special-box .discount, .duration{color:'. esc_html( of_get_option('daysdiscount', '#ffffff') ) .';}';
		}
		if ( of_get_option('dolleramount', true) != '' ) {
			echo '.places-box h5, .special-inner h3{color:'. esc_html( of_get_option('dolleramount', '#464545') ) .';}';
		}
		if ( of_get_option('fourbxchkbutton', true) != '' ) {
			echo '.places-box a.check{color:'. esc_html( of_get_option('fourbxchkbutton', '#00b1e9') ) .'; border:1px solid'.of_get_option('fourbxchkbutton', '#00b1e9').'}';
		}
		if ( of_get_option('fourbxchkbutton', true) != '' ) {
			echo '.special-inner a.check{color:'. esc_html( of_get_option('fourbxchkbutton', '#00b1e9') ) .';}';
		}
		if ( of_get_option('fourbxchkhvbutton', true) != '' ) {
			echo '.places-box a.check:hover{color:'. esc_html( of_get_option('fourbxchkhvbutton', '#ffffff') ) .';}';
		}
		if ( of_get_option('postmetacolor', true) != '' ) {
			echo '.blogposts a.blog-more, .videos .one_half.last_column a.blog-more{color:'. esc_html( of_get_option('postmetacolor', '#ffffff') ) .';}';
		}
		if ( of_get_option('onehalfconcolor', true) != '' ) {
			echo '.videos .one_half.last_column p{color:'. esc_html( of_get_option('onehalfconcolor', '#000000') ) .';}';
		}		
		if( of_get_option('btnborder',true) != ''){
			echo "a.contact{border:2px solid".of_get_option('btnborder','#ffffff')."}";
		}
		if( of_get_option('sectitleborder',true) != ''){
			echo "h2.section-title{border-bottom:1px solid".of_get_option('sectitleborder','#00b1e9')."}";
		}
		if( of_get_option('plimgborder',true) != ''){
			echo ".place-img{border:1px solid".of_get_option('plimgborder','#e2e2e2')."}";
		}
		if( of_get_option('subtitleborder',true) != ''){
			echo ".places-box h3{border-bottom:1px solid".of_get_option('subtitleborder','#e7e6e6')."; border-top:1px solid".of_get_option('subtitleborder','#e7e6e6')."}";
		}
		if( of_get_option('subtitleborder',true) != ''){
			echo ".special-inner h2{border-bottom:1px solid".of_get_option('subtitleborder','#e7e6e6').";}";
		}
		if( of_get_option('footmainborder',true) != ''){
			echo "#main-footer{border-top:7px solid".of_get_option('footmainborder','#00b1e9').";}";
		}
		if( of_get_option('foottitleborder',true) != ''){
			echo ".footer-col h2{border-bottom:2px solid".of_get_option('foottitleborder','#28292a').";}";
		}
						
		if( of_get_option('headbgcolor',true) != ''){
			echo "@media screen and (max-width:719px){.header{background-color:".of_get_option('headbgcolor','#000000')." !important;}}";
		}
		
		$head_hex = of_get_option('headbgcolor','#000000');
		list($r,$g,$b) = sscanf($head_hex,'#%02x%02x%02x');
		if( of_get_option('headbgcolor',true) != '' || of_get_option('headbgopacity',true) != ''){
			echo ".header{background-color:rgba(".$r.",".$g.",".$b.",".of_get_option('headbgopacity','0.2').")}";
		}
		
		$sldbg_hex = of_get_option('sldbgcolor','#000000');
		list($r,$g,$b) = sscanf($sldbg_hex,'#%02x%02x%02x');
		if( of_get_option('sldbgcolor',true) != '' || of_get_option('sldbgopacity',true) != ''){
			echo "#slider .top-bar h2, #slider .top-bar p, #slider .top-bar h4{background-color:rgba(".$r.",".$g.",".$b.",".of_get_option('sldbgopacity','0.3').")}";
		}
		
		echo "</style>";
	}
}
add_action('wp_head', 'vacation_custom_head_codes');


function vacation_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load custom functions file.
 */
require get_template_directory() . '/inc/custom-functions.php';


function vacation_custom_blogpost_pagination( $wp_query ){
	$big = 999999999; // need an unlikely integer
	if ( get_query_var('paged') ) { $pageVar = 'paged'; }
	elseif ( get_query_var('page') ) { $pageVar = 'page'; }
	else { $pageVar = 'paged'; }
	$pagin = paginate_links( array(
		'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' 		=> '?'.$pageVar.'=%#%',
		'current' 		=> max( 1, get_query_var($pageVar) ),
		'total' 		=> $wp_query->max_num_pages,
		'prev_text'		=> '&laquo; Prev',
		'next_text' 	=> 'Next &raquo;',
		'type'  => 'array'
	) ); 
	if( is_array($pagin) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $pagin as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	} 
}

// get slug by id
function vacation_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

// custom post type for testimonial
function my_custom_post_testimonial() {
	$labels = array(
		'name'               => __( 'Testimonial','vacation'),
		'singular_name'      => __( 'Testimonial','vacation'),
		'add_new'            => __( 'Add Testimonial','vacation'),
		'add_new_item'       => __( 'Add New Testimonial','vacation'),
		'edit_item'          => __( 'Edit Testimonial','vacation'),
		'new_item'           => __( 'New Testimonial','vacation'),
		'all_items'          => __( 'All Testimonials','vacation'),
		'view_item'          => __( 'View Testimonial','vacation'),
		'search_items'       => __( 'Search Testimonial','vacation'),
		'not_found'          => __( 'No Testimonial found','vacation'),
		'not_found_in_trash' => __( 'No Testimonial found in the Trash','vacation'), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonial'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_icon'		=> 'dashicons-testimonial',
		'menu_position' => null,
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
	);
	register_post_type( 'testimonial', $args );	
}
add_action( 'init', 'my_custom_post_testimonial' );


function vacation_head_manage(){
	if( !is_front_page() && of_get_option('innerpageslider',true) == 'hide') { ?>
    		<style>
					.header{ position:relative !important;}
			</style>
	<?php }
	}
	
add_action('wp_head','vacation_head_manage');