<?php
/**
 * @package Vacation
 * Setup the WordPress core custom functions feature.
 *
*/

// get_the_content format text
function get_the_content_format( $str ){
	$raw_content = apply_filters( 'the_content', $str );
	$content = str_replace( ']]>', ']]&gt;', $raw_content );
	return $content;
}
// the_content format text
function the_content_format( $str ){
	echo get_the_content_format( $str );
}

function is_google_font( $font ){
	$notGoogleFont = array( 'Arial', 'Comic Sans MS', 'FreeSans', 'Georgia', 'Lucida Sans Unicode', 'Palatino Linotype', 'Symbol', 'Tahoma', 'Trebuchet MS', 'Verdana' );
	if( in_array($font, $notGoogleFont) ){
		return false;
	}else{
		return true;
	}
}

// subhead section function
function sub_head_section( $more ) {
	$pgs = 0;
	do {
		$pgs++;
	} while ($more > $pgs);
	return $pgs;
}

//[clear]
function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );

//[separator height="20"]
function separator_shortcode_func($atts ) {
	extract( shortcode_atts( array(
		'height' => '50',
	), $atts ) );
	$sptr = '<div style="clear:both; min-height:20px; height:'.$height.'px; background:url('.get_template_directory_uri().'/images/hr_double.png) no-repeat center center transparent;"></div>';
	return $sptr;
}
add_shortcode( 'separator', 'separator_shortcode_func' );


//[column_content]Your content here...[/column_content]
function column_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => '',
		'title'	=> '',
		'image'	=> ''
	), $atts ) );
	$cnt = '';
	$colPos = strpos($type, '_last');
	if($colPos === false){
		$cnt .= '<div class="'.$type.'">';
		$cnt .= (($image != '') ? "<img src='".$image."'><h2>".$title."</h2>" : '');
		$cnt .= do_shortcode($content);
		$cnt .= '</div>';
	}else{
		$type = substr($type,0,$colPos);
		$cnt .= '<div class="'.$type.' last_column">';
		$cnt .= (($image != '') ? "<img src='".$image."'><h2>".$title."</h2>" : '');
		$cnt .= do_shortcode($content);
		$cnt .= '</div>';
	}
	return $cnt;
}
add_shortcode( 'column_content', 'column_content_func' );


//[hr]
function hrule_func() {
	$hrule = '<div class="clear hrule"></div>';
	return $hrule;
}
add_shortcode( 'hr', 'hrule_func' );


//[hr_top]
function hr_top_func() {
	$hr_top = '<div class="clear linktotop"><a title="Top of Page" href="#top">Back to Top</a></div><div class="clear hrule"></div>';
	return $hr_top;
}
add_shortcode( 'hr_top', 'hr_top_func' );


// [searchform]
function searchform_shortcode_func( $atts ){
	return get_search_form( false );
}
add_shortcode( 'searchform', 'searchform_shortcode_func' );

// accordion
function accordion_func( $atts, $content = null ) {
	$acc = '<div>'.get_the_content_format( do_shortcode($content) ).'<div class="clear"></div></div>';
	return $acc;
}
add_shortcode( 'accordion', 'accordion_func' );
function accordion_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Accordion Title',
	), $atts ) );
	$content = wpautop(trim($content));
	$acn = '<div class="accordion-box"><h2>'.$title.'</h2>
			<div class="acc-content">'.$content.'</div><div class="clear"></div></div>';
	return $acn;
}
add_shortcode( 'accordion_content', 'accordion_content_func' );


// remove excerpt more
function new_excerpt_more( $more ) {
	return '... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

// get post categories function
function getPostCategories(){
	$categories = get_the_category();
	$catOut = '';
	$separator = ', ';
	$catOutput = '';
	if($categories){
		foreach($categories as $category) {
			$catOutput .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'vacation' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		$catOut = ''.trim($catOutput, $separator);
	}
	return $catOut;
}

// replace last occurance of a string.
function str_lreplace($search, $replace, $subject){
	$pos = strrpos($subject, $search);
	if($pos !== false){
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}


function flythemes_pullquote_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'align' => '',
	), $atts ) );
	$quote = ($content == '' ) ? "<blockquote class=\"align-{$align}\">This is a pullquote. Lorem ipsum dolor sit amet, consectetur adipiscing elit sed pharetra aliquet metus.</blockquote>" : "<blockquote class=\"align-{$align}\">$content</blockquote>";

	return $quote;
}
add_shortcode( 'pullquote', 'flythemes_pullquote_func' );

function vacation_dropcap_func( $atts, $content = null ) {
	$dcap = '<span class="dropcap">'.$content.'</span>';
	return $dcap;
}
add_shortcode( 'dropcap', 'vacation_dropcap_func' );


function vacation_custom_testimonails() {
	$return_string = '';
   query_posts('post_type=testimonial&posts_per_page=-1'); 
   if ( have_posts() ) : 
      $return_string .= '<div class="testimonials-slider">';	  
       while ( have_posts() ) : the_post();
	     $return_string .= '<div class="slide">';					
		 $return_string .= '<div class="testimonials-carousel-thumbnail">'.(( has_post_thumbnail()) ?  get_the_post_thumbnail( get_the_ID(), array(88,88) ) : '').'</div>';			
		 $return_string .= '<div class="testimonials-name">'.get_the_title().'</div>';
		  $return_string .= '<div class="testimonials-carousel-content"><p>'.get_the_excerpt().'</p></div>'; 	
		 $return_string .= '</div>'; 		 
      endwhile;		 
	  $return_string .= '</div>';
	   
	  else:
	  $return_string .= '<div class="testimonials-slider">
	  			<div class="slide">							
							    <div class="testimonials-carousel-thumbnail"><img src="'.get_template_directory_uri().'/images/test1.jpg" alt="" /></div>
								<div class="testimonials-name">Jhon Doe</div>                        
                                <div class="testimonials-carousel-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec massa commodo, luctus turpis non, vehicula erat. Integer efficitur suscipit placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sed nisi in sem porta fringilla sit amet eu sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et eros id ante sagittis elementum varius nec metus. Curabitur vitae pharetra quam. </p></div>			                
				</div>
				
				<div class="slide">							
							    <div class="testimonials-carousel-thumbnail"><img src="'.get_template_directory_uri().'/images/test2.jpg" alt="" /></div>
								<div class="testimonials-name">Jenny Doe</div>                         
                                <div class="testimonials-carousel-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec massa commodo, luctus turpis non, vehicula erat. Integer efficitur suscipit placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sed nisi in sem porta fringilla sit amet eu sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et eros id ante sagittis elementum varius nec metus. Curabitur vitae pharetra quam. </p></div>
				</div>			
			</div>			
		  ';			
	  endif;  
	 
   wp_reset_query();
   return $return_string;
  
}
add_shortcode( 'testimonials', 'vacation_custom_testimonails' );


function blogpostsoutput_func( $atts ){
   extract( shortcode_atts( array(
		'show' => 3,
	), $atts ) );
	$postoutput = '';
	wp_reset_query();
	$n = 0;
	query_posts(  array( 'posts_per_page'=>$show, 'post__not_in' => get_option('sticky_posts') )  );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$n++;
			if( $n%3 == 0 )
			$nomgn = 'lastcols';
			else
			$nomgn = ' ';
			if ( has_post_thumbnail()) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				$imgUrl = $large_image_url[0];
			}else{
				$imgUrl = get_template_directory_uri().'/images/img_404.png';
			}
			$postoutput .= '<div class="blogposts '.$nomgn.'">							
                		<a class="blogthumbs" href="'.get_the_permalink().'"><img src="'.$imgUrl.'" alt=" " /></a>
						<h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>
						<div class="cat_comments">
						<div class="cat"><i class="fa fa-calendar"></i>On '.get_the_date('j F Y').'</div> 
						<div class="comnt"><i class="fa fa-comments"></i><a href="'.get_comments_link().'">'.get_comments_number().' Comments</a></div>  
					     <div class="clear"></div>
						</div>
						'.content(45).'
                    	<a href="'.get_the_permalink().'" class="blog-more">Read More</a>                 
                        </div>
						';

		endwhile; else : $postoutput .= 'There is no blog post found';
	endif;
	wp_reset_query();
	$postoutput .= '<div class="clear"></div>';
	
	return $postoutput;
}
add_shortcode( 'blogposts', 'blogpostsoutput_func' );


function vacation_contactform_func( $atts ) {
    $atts = shortcode_atts( array(
        'to_email' => get_bloginfo('admin_email'),
		'title' => 'Contact enquiry - '.esc_url( get_home_url() ),
    ), $atts );

	$cform = "<div class=\"main-form-area\" id=\"contactform_main\">";

	$cerr = array();
	if( isset($_POST['c_submit']) && $_POST['c_submit']=='Submit' ){
		$name 			= trim( $_POST['c_name'] );
		$email 			= trim( $_POST['c_email'] );
		$phone 			= trim( $_POST['c_phone'] );
		//$website		= trim( $_POST['c_website'] );
		$comments 		= trim( $_POST['c_comments'] );
		//$captcha 		= trim( $_POST['c_captcha'] );
		//$captcha_cnf	= trim( $_POST['c_captcha_confirm'] );

		if( !$name )
			$cerr['name'] = 'Please enter your name.';
		if( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) 
			$cerr['email'] = 'Please enter a valid email.';
		if( !$phone )
			$cerr['phone'] = 'Please enter your phone number.';
		if( !$comments )
			$cerr['comments'] = 'Please enter your question / comments.';
		//if( !$captcha || (md5($captcha) != $captcha_cnf) )
			//$cerr['captcha'] = 'Please enter the correct answer.';

		if( count($cerr) == 0 ){
			$subject = $atts['title'];
			$headers = "From: ".$name." <" . strip_tags($email) . ">\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			$message = '<html><body>
							<table>
								<tr><td>Name: </td><td>'.$name.'</td></tr>
								<tr><td>Email: </td><td>'.$email.'</td></tr>
								<tr><td>Phone: </td><td>'.$phone.'</td></tr>								
								<tr><td>Comments: </td><td>'.$comments.'</td></tr>
							</table>
						</body>
					</html>';
			mail( $atts['to_email'], $subject, $message, $headers);
			$cform .= '<div class="success_msg">Thank you! A representative will get back to you very shortly.</div>';
			unset( $name, $email, $phone, $website, $comments, $captcha );
		}else{
			$cform .= '<div class="error_msg">';
			$cform .= implode('<br />',$cerr);
			$cform .= '</div>';
		}
	}

	//$capNum1 	= rand(1,4);
	//$capNum2 	= rand(1,5);
	//$capSum		= $capNum1 + $capNum2;
	//$sumStr		= $capNum1." + ".$capNum2 ." = ";

	$cform .= "<form name=\"contactform\" action=\"#contactform_main\" method=\"post\">
			<div class=\"leftdiv\">
				<p><input type=\"text\" name=\"c_name\" value=\"". ( ( empty($name) == false ) ? $name : "" ) ."\" placeholder=\"Name\" /></p>
				<p><input type=\"email\" name=\"c_email\" value=\"". ( ( empty($email) == false ) ? $email : "" ) ."\" placeholder=\"Email\" /></p>
				<p><input type=\"tel\" name=\"c_phone\" value=\"". ( ( empty($phone) == false ) ? $phone : "" ) ."\" placeholder=\"Phone\" /></p>
			</div>
			<div class=\"rightdiv\">			
			<p><textarea name=\"c_comments\" placeholder=\"Message\">". ( ( empty($comments) == false ) ? $comments : "" ) ."</textarea></p></div><div class=\"clear\"></div>";	
	$cform .= "<p><input type=\"submit\" name=\"c_submit\" value=\"Submit\" /></p>
		</form>
	</div>";

    return $cform;
}
add_shortcode( 'contactform', 'vacation_contactform_func' );



add_action("admin_init", "admin_init");
function admin_init(){
	add_meta_box("video_file_url-meta", "Video File URL", "video_file_url", "photogallery", "normal", "low"); 
}

function video_file_url () {
	global $post;  
	$custom     = get_post_custom($post->ID);  
	$video_file_url  = isset ( $custom["video_file_url"][0] ) ? $custom["video_file_url"][0] : '';  ?> 
	<style>
	.amount_input { margin:0; padding:6px; width:80%; }
	</style>
	<table width="100%"> 
		<tr><td width="110">Video File URL : </td><td colspan="2"><input class="amount_input" type="text" name="video_file_url"  value="<?php echo $video_file_url; ?>"  /></td></tr> 
		<tr><td></td><td><strong>YouTube video url:</strong></td><td>http://www.youtube.com/watch?v=qqXi8WmQ_WM</td></tr> 
		<tr><td></td><td width="120"><strong>Vimeo video url:</strong></td><td>http://vimeo.com/8245346</td></tr> 
	</table>
	<?php
}

add_action('save_post', 'save_details');
function save_details(){
	global $post; 
	if ( isset($_POST["video_file_url"]) ) {
		update_post_meta($post->ID, "video_file_url", $_POST["video_file_url"]);
	} 
}


// add shortcode for features
function vacation_services($fly_var, $content = null){
		extract( shortcode_atts(array(
			'icon'	=> 'icon',
			'title'	=> 'title',
			'link'  => 'link'
		), $fly_var));
		
		return '<div id="services-box"><div class="services-inner">
				<i class="fa fa-'.$icon.' fa-3x"></i>
				<h2>'.$title.'</h2>				
				<p>'.$content.'</p>
				<a class="check" href="'.$link.'">Check Availability</a>				
				</div></div>';
}
add_shortcode('services','vacation_services');


// add shortcode for features
function vacation_places($fly_var){
		extract( shortcode_atts(array(
			'image'	=> '',
			'days'  => '',
			'title'	=> '',
			'resort'=> '',
			'doller'=> '',
			'link'  => '',
			'last'  => ''
		), $fly_var));
		
		return '<div class="places-box" id="'.(($last == 'yes') ? 'last' : '').'">
				<div class="place-img">
				<div class="duration"><h4>'.$days.'</h4><p>Days</p></div>
				<img class="cir-img" src="'.$image.'">
				</div>
				<h2>'.$title.'</h2>
				<h3>'.$resort.'</h3>
				<h5>$ '.$doller.'</h5>				
				<a class="check" href="'.$link.'">Check Availability</a>				
				</div>';
}
add_shortcode('places','vacation_places');


// add shortcode for features
function vacation_special($fly_var){
		extract( shortcode_atts(array(
			'image'	=> '',
			'discount'  => '',
			'title'	=> '',
			'doller'=> '',
			'link'  => '',
			'last'  => ''
		), $fly_var));
		
		return '<div class="special-box" id="'.(($last == 'yes') ? 'last' : '').'">
				<div class="discount"><h4>'.$discount.'%</h4><p>Off</p></div>
				<img src="'.$image.'">
				<div class="special-inner">				
				<h2>'.$title.'</h2>
				<h3>$ '.$doller.'</h3>				
				<a class="check" href="'.$link.'">See tour details</a>				
				</div></div>';
}
add_shortcode('special','vacation_special');


function toggle_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Click here to toggle content',
	), $atts ) );
	$tog_content = "<div class=\"toggle_holder\"><h3 class=\"slide_toggle\"><a href=\"#\">{$title}</a></h3>
					<div class=\"slide_toggle_content\">".get_the_content_format( $content )."</div></div>";

	return $tog_content;
}
add_shortcode( 'toggle_content', 'toggle_func' );

function tabs_func( $atts, $content = null ) {
	$tabs = '<div class="tabs-wrapper"><ul class="tabs">'.do_shortcode($content).'</ul></div>';
	return $tabs;
}
add_shortcode( 'tabs', 'tabs_func' );

function tab_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Tab Title',
	), $atts ) );
	$rand = rand(100,999);
	$tab = '<li><a rel="tab'.$rand.'" href="javascript:void(0)"><span>'.$title.'</span></a><div id="tab'.$rand.'" class="tab-content">'.get_the_content_format($content).'</div></li>';
	return $tab;
}
add_shortcode( 'tab', 'tab_func' );

function gradient_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'center',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"grad-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'gradient_button', 'gradient_button_func' );

function simple_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"simple-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'simple_button', 'simple_button_func' );

function round_button_func( $atts ) {
	extract( shortcode_atts( array(
		'style' => 'dark',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"round-btn-{$style} round-btn btn-align-{$position}\">";
	$btn .= "<span>{$text}</span></a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'round_button', 'round_button_func' );

function msg_box_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'info',
		'bg_color' => '#f6f6f6',
		'color' => '#333',
		'start_color' => "#fff",
		'end_color' => "#eee",
		'border' => "#ccc",
		'align' => '',
		'width' => '100%',
	), $atts ) );
	$msg = '';

	if($type == 'success'){
		$msg  = '<div class="msg-success"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'success' style message box shortcode. To use this style use the following shortcode" : $content;
		$msg .= '</div></div>';
	}elseif($type == 'error'){
		$msg  = '<div class="msg-error"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'error' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'warning'){
		$msg  = '<div class="msg-warning"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'warning' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'info'){
		$msg  = '<div class="msg-info"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'info' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'about'){
		$msg  = '<div class="msg-about"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'about' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'custom'){
		$msg  = "<div style=\"width:{$width};\" class=\"msg-align-{$align}\"><div class=\"msg-custom\" style=\"background-color:{$end_color}; background:   -moz-linear-gradient(center top , {$start_color}, {$end_color}); background: -webkit-gradient(linear, 0% 0%, 0% 100%, from({$start_color}), to({$end_color})); background: -webkit-linear-gradient(top, {$start_color}, {$end_color}); background: -ms-linear-gradient(top, {$start_color}, {$end_color}); background: -o-linear-gradient(top, {$start_color}, {$end_color}); border:1px {$border} solid; color:{$color};\">"; 
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div></div><div class="clear"></div>';
	}elseif($type == 'simple'){
		$msg  = "<div class=\"msg-simple\" style=\"background-color:{$bg_color}; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div>';
	}
	return $msg;
}
add_shortcode( 'message', 'msg_box_func' );


function unorderedlist_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => 'list-1',
	), $atts ) );
	$content = wpautop(trim($content));
	$ulist = '<ul class="'.$style.'">'.$content.'</ul>';
	return $ulist;
}
add_shortcode( 'unordered_list', 'unorderedlist_func' );

function vacation_social_area($atts,$content = null){
		return '<div class="social-icons">'.do_shortcode($content).'</div>';
	}
add_shortcode('social_area','vacation_social_area');

function vacation_social($atts){
	extract(shortcode_atts(array(
		'icon'	=> '',
		'link'	=> ''
	),$atts));
		return '<a href="'.$link.'" target="_blank" class="fa fa-'.$icon.' fa-2x" title="'.$icon.'"></a>';
	}
add_shortcode('social','vacation_social');

define('THEME_DOC','http://flythemes.net/documentation/vacation-doc/');