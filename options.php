<?php 

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'Vacation-pro';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'vacation'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
	// Typography Body
	$typography_body = array(
		'size' => '13px',
		'face' => 'Arimo',
		'style' => 'normal',
		'color' => '#5b5b5b' );
		
	// Typography Logo
	$typography_logo = array(
		'size' => '27px',
		'face' => 'Roboto',
		'style' => 'bold',
		'color' => '#ffffff' );
		
	// Typography tagline
	$typography_tagline = array(
		'size' => '12px',
		'face' => 'Arimo',
		'style' => 'normal',
		'color' => '#ffffff' );
		
	// Typography Navigation
	$typography_nav = array(
		'size' => '15px',
		'face' => 'Roboto',
		'style' => 'bold',
		'color' => '#ffffff' );
		
	// Typography Slide Title Small
	$typography_sldone = array(
		'size' => '20px',
		'face' => 'Roboto',
		'style' => 'normal',
		'color' => '#d1d1d1' );
		
	// Typography Slide Title Large
	$typography_sldtwo = array(
		'size' => '40px',
		'face' => 'Roboto',
		'style' => 'bold',
		'color' => '#ffffff' );
		
	// Typography Slide description
	$typography_slddesc = array(
		'size' => '13px',
		'face' => 'Arimo',
		'style' => 'normal',
		'color' => '#ffffff' );
		
	// Typography Services title
	$typography_sertitle = array(
		'size' => '25px',
		'face' => 'Roboto',
		'style' => 'normal',
		'color' => '#242424' );
		
	// Typography Places title
	$typography_placestitle = array(
		'size' => '20px',
		'face' => 'Roboto',
		'style' => 'normal',
		'color' => '#464545' );
		
	// Typography Places Sub title
	$typography_plsubtitle = array(
		'size' => '17px',
		'face' => 'Open Sans',
		'style' => 'normal',
		'color' => '#6d6d6d' );
		
	// Typography One Half Videos title
	$typography_onehalftitle = array(
		'size' => '30px',
		'face' => 'Roboto',
		'style' => 'normal',
		'color' => '#464545' );
		
	// Typography Testimonials title
	$typography_testtitle = array(
		'size' => '18px',
		'face' => 'Roboto',
		'style' => 'normal',
		'color' => '#343434' );
		
	// Typography Section title
	$typography_sectitle = array(
		'size' => '35px',
		'face' => 'Roboto',
		'style' => 'normal',);
		
	// Typography Section sub title
	$typography_secsubtitle = array(
		'size' => '19px',
		'face' => 'Roboto',
		'style' => 'normal',);
		
	// Typography Page title
	$typography_pagetitle = array(
		'size' => '25px',
		'face' => 'Roboto',
		'style' => 'bold',
		'color'	=> '#222222');
		
	// Typography widget title
	$typography_widgettitle = array(
		'size' => '18px',
		'face' => 'Roboto',
		'style' => 'bold',
		'color'	=> '#464545');
		
	// Typography footer title
	$typography_footertitle = array(
		'size' => '20px',
		'face' => 'Roboto',
		'style' => 'bold',
		'color'	=> '#ffffff');
		
	// Typography footer content
	$typography_footercontent = array(
		'size' => '12px',
		'face' => 'Arimo',
		'style' => 'normal',
		'color'	=> '#989898');

	// array of section content.
	$section_text = array(
		1 => array(
			'section_title'		=> 'Planing Your Next Vacation',
			'section_title_color'	=> '#242424',
			'section_sub_title' => 'Ready to plan your next getway? Get advice from Vacation',
			'section_sub_title_color' => '#464545',
			'menutitle'			=> '',
			'bgcolor' 			=> '#f5f5f5',
			'bgimage'			=> '',
			'class'				=> 'services',
			'content'			=> '[services icon="plane" title="Tour" link="#"]Donec a mattis augue. Fusce porttitor, risus ac tincidunt gravida, libero eros ullamcorper massa, ac fringilla felis magna id nisi. Vivamus tortor metus, venenatis[/services][services icon="building" title="Hotel" link="#"]Donec a mattis augue. Fusce porttitor, risus ac tincidunt gravida, libero eros ullamcorper massa, ac fringilla felis magna id nisi. Vivamus tortor metus, venenatis[/services][services icon="map-marker" title="Destination" link="#"]Donec a mattis augue. Fusce porttitor, risus ac tincidunt gravida, libero eros ullamcorper massa, ac fringilla felis magna id nisi. Vivamus tortor metus, venenatis [/services]',
			
		),
		
		2 => array(
			'section_title'	=> 'Places you have to see',
			'section_title_color'	=> '#242424',
			'section_sub_title' => 'Special Tours and Adventures Only For You',
			'section_sub_title_color' => '#464545',
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> 'places',
			'content'		=> '[places days="25" image="'.get_template_directory_uri().'/images/austria.jpg" title="Austria" resort="Tropicana Resort" doller="2.499" link="#"][places days="25" image="'.get_template_directory_uri().'/images/san-francisco.jpg" title="San Francisco" resort="Tropicana Resort" doller="2.499" link="#"][places days="25" image="'.get_template_directory_uri().'/images/sydney-bridge.jpg" title="Sydney Bridge" resort="Tropicana Resort" doller="2.499" link="#"][places days="25" image="'.get_template_directory_uri().'/images/hawaii-beach.jpg" title="Hawaii Beach Honolulu" resort="Tropicana Resort" doller="2.499" link="#" last="yes"]',
		),

		3 => array(
			'section_title'	=> 'Special Offers',
			'section_title_color'	=> '#242424',
			'section_sub_title' => 'Our favourite packages, hand-picked for you.',
			'section_sub_title_color' => '#464545',
			'menutitle'		=> '',
			'bgcolor' 		=> '',			
			'bgimage'		=> get_template_directory_uri().'/images/special-bg.jpg',
			'class'			=> 'special',
			'content'		=> '[special discount="30" image="'.get_template_directory_uri().'/images/paris.jpg" title="Eiffel Tower, Paris " doller="199.00" link="#"][special discount="30" image="'.get_template_directory_uri().'/images/tower-bridge.jpg" title="Tower Bridge, London " doller="199.00" link="#"][special discount="30" image="'.get_template_directory_uri().'/images/sydney.jpg" title="Sydney Opera, Australia " doller="199.00" last="yes" link="#"]',
		),

		4 => array(
			'section_title'	=> 'Recent Blog',
			'section_title_color'	=> '#242424',
			'section_sub_title' => 'Recent Posts from the Blog',
			'section_sub_title_color' => '#464545',
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> 'blogs',
			'content'		=> '[blogposts show="2"]',
		),
		
		5 => array(
			'section_title'	=> 'Feel the Tropical Head',
			'section_title_color'	=> '#242424',
			'section_sub_title' => 'Watch Our Latest Videos and Get Inspired',
			'section_sub_title_color' => '#464545',
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> get_template_directory_uri().'/images/tropical-bg.jpg',
			'class'			=> 'videos',
			'content'		=> '[column_content type="one_half"]<iframe width="570" height="326" src="https://www.youtube.com/embed/inao7EX3SkI" frameborder="0" allowfullscreen></iframe>[/column_content][column_content type="one_half_last"]<h3>Our recent trip to tropical island Bora Bora</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus lorem eu augue luctus eleifend. Donec dignissim auctor neque id porta. Sed vestibulum eros ut mauris ornare, id auctor massa pharetra. Curabitur sit amet ornare odio. Nam euismod dui non nisl malesuada egestas. Sed suscipit malesuada erat nec malesuada. Maecenas sit amet scelerisque neque, sed egestas odio. Nunc pellentesque, enim quis fringilla ornare, ipsum augue elementum dolor, eu facilisis nisi justo id ex. Donec porttitor magna at pulvinar consectetur. Sed ac ultrices est, quis iaculis lacus. Praesent posuere imperdiet feugiat.<br/> <a href="#" class="blog-more">Buy This Template</a>[/column_content]',
		
		),
		
		6 => array(
			'section_title'	=> 'What Our Client Say',
			'section_title_color'	=> '#242424',
			'section_sub_title' => 'We have more than 6,000 Satisfied Clients',
			'section_sub_title_color' => '#464545',
			'menutitle'		=> '',
			'bgcolor' 		=> '',
			'bgimage'		=> '',
			'class'			=> 'testimonials',
			'content'		=> '[testimonials]',
			
		),	
		
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'vacation'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'vacation'),
		'desc' => __('Upload your main logo here', 'vacation'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Favicon', 'vacation'),
		'desc' => __('Upload favicon for website', 'vacation'),
		'id' => 'favicon',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Custom CSS', 'vacation'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'vacation'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Sticky Header', 'vacation'),
		'desc' => __('Check this to disable sticky header on scroll', 'vacation'),
		'id' => 'headstick',
		'std' => true,
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => __('Add Email', 'vacation'),
		'desc' => __('Add Email address for header top.', 'vacation'),
		'id' => 'heademail',
		'std' => 'info@vacation.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Add Contact Number', 'vacation'),
		'desc' => __('Add Contact number for header top.', 'vacation'),
		'id' => 'headcontact',
		'std' => '123 456 7809',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Add Social Icon', 'vacation'),
		'desc' => __('Add Social icon for header top.', 'vacation'),
		'id' => 'socialtop',
		'std' => '[social_area][social icon="facebook" link="#linkfb"][social icon="twitter" link="#linktweet"][social icon="linkedin" link="#"][social icon="rss" link="#"][social icon="google-plus" link="#"][social icon="pinterest-p" link="#"][social icon="skype" link="#"][social icon="tumblr" link="#"][/social_area]',
		'type' => 'textarea');
		
		
	// font family start 
	$options[] = array(
		'name' => __('Font Typogarphy', 'vacation'),
		'desc' => __('Select font family/size/color/style for the body text.', 'vacation'),
		'id' => 'bodyfontface',
		'type' => 'typography',
		'std' => $typography_body );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the textual logo', 'vacation'),
		'id' => 'logofontface',
		'type' => 'typography',
		'std' => $typography_logo );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the tagline', 'vacation'),
		'id' => 'taglinefontface',
		'type' => 'typography',
		'std' => $typography_tagline );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for the navigation text', 'vacation'),
		'id' => 'navfontface',
		'type' => 'typography',
		'std' => $typography_nav );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for slide title small', 'vacation'),
		'id' => 'sldtitleone',
		'type' => 'typography',
		'std' => $typography_sldone );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for slide title large', 'vacation'),
		'id' => 'sldtitletwo',
		'type' => 'typography',
		'std' => $typography_sldtwo );
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for slider description', 'vacation'),
		'id' => 'slddscfontface',
		'type' => 'typography',
		'std' => $typography_slddesc);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for three box title below slider', 'vacation'),
		'id' => 'sertitlefont',
		'type' => 'typography',
		'std' => $typography_sertitle);	
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for three/four box and blogposts title', 'vacation'),
		'id' => 'placestitlefont',
		'type' => 'typography',
		'std' => $typography_placestitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for four box places sub title', 'vacation'),
		'id' => 'plsubtitlefont',
		'type' => 'typography',
		'std' => $typography_plsubtitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for videos one half title', 'vacation'),
		'id' => 'onehalftitlefont',
		'type' => 'typography',
		'std' => $typography_onehalftitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for testimonials title', 'vacation'),
		'id' => 'testtitlefont',
		'type' => 'typography',
		'std' => $typography_testtitle);	
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for section title', 'vacation'),
		'id' => 'sectitlefont',
		'type' => 'typography',
		'std' => $typography_sectitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for section sub title', 'vacation'),
		'id' => 'secsubtitlefont',
		'type' => 'typography',
		'std' => $typography_secsubtitle);
	
	$options[] = array(
		'desc' => __('Select font family/size/color/style for page title', 'vacation'),
		'id' => 'pagetitlefont',
		'type' => 'typography',
		'std' => $typography_pagetitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for widget title', 'vacation'),
		'id' => 'widgettitlefont',
		'type' => 'typography',
		'std' => $typography_widgettitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for footer title', 'vacation'),
		'id' => 'footertitlefont',
		'type' => 'typography',
		'std' => $typography_footertitle);
		
	$options[] = array(
		'desc' => __('Select font family/size/color/style for footer content', 'vacation'),
		'id' => 'footercontentfont',
		'type' => 'typography',
		'std' => $typography_footercontent);
	
		
	
	// font colors start

	$options[] = array(
		'name' => __('Font Colors', 'vacation'),
		'desc' => __('Select font color for navigation hover', 'vacation'),
		'id' => 'navhovercolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for section title', 'vacation'),
		'id' => 'sectitlecolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for three box bellow the slider', 'vacation'),
		'id' => 'hovertitle',
		'std' => '#ffffff',
		'type' => 'color');
			
	$options[] = array(
		'desc' => __('Select font color for three box availability button below the slider', 'vacation'),
		'id' => 'checkbtn',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for three box availability button below the slider', 'vacation'),
		'id' => 'checkhvbtn',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for three/four box days/discount number', 'vacation'),
		'id' => 'daysdiscount',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for three/four box doller amount', 'vacation'),
		'id' => 'dolleramount',
		'std' => '#464545',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font / border color for three/four box check availability button', 'vacation'),
		'id' => 'fourbxchkbutton',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for four box check availability button', 'vacation'),
		'id' => 'fourbxchkhvbutton',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for four box check availability button', 'vacation'),
		'id' => 'fourbxchkhvbutton',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for postmeta', 'vacation'),
		'id' => 'postmetacolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for one half content', 'vacation'),
		'id' => 'onehalfconcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select copyright font color for footer', 'vacation'),
		'id' => 'copyfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select color for links / anchor tags', 'vacation'),
		'id' => 'linkcolor',
		'std' => '#464545',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font color for links / anchor tags on hover', 'vacation'),
		'id' => 'linkhovercolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for contact button', 'vacation'),
		'id' => 'cntfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select color for social icon', 'vacation'),
		'id' => 'socialiconcol',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover color for social icon', 'vacation'),
		'id' => 'socialiconcolhv',
		'std' => '#222222',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font hover color for footer anchor tag', 'vacation'),
		'id' => 'footanchor',
		'std' => '#00b1e9',
		'type' => 'color');
		
								
	// Background start
	
	$options[] = array(
		'name' => __('Background Colors', 'vacation'),
		'desc' => __('Select background color for body', 'vacation'),
		'id' => 'bodybgcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for header top strip', 'vacation'),
		'id' => 'topstripbgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for header navigation', 'vacation'),
		'id' => 'navhvbgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for contact button', 'vacation'),
		'id' => 'cntbgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover background color for contact button', 'vacation'),
		'id' => 'cnthvbgcolor',
		'std' => '#222222',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for three box below slider', 'vacation'),
		'id' => 'serbgcolor',
		'std' => '#ececec',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for three box inner below slider', 'vacation'),
		'id' => 'serinbgcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select hover background color for three box below slider', 'vacation'),
		'id' => 'serhvbgcolor',
		'std' => '#b1e0f4',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover background color for three box inner below slider', 'vacation'),
		'id' => 'serinhvbgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for three box/four box hover check availability button', 'vacation'),
		'id' => 'checkbgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select hover background color for three box check availability button below slider', 'vacation'),
		'id' => 'checkhvbgcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for four/three box days/discount', 'vacation'),
		'id' => 'fourthreebgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for three box special offers', 'vacation'),
		'id' => 'threebxbgcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for post meta', 'vacation'),
		'id' => 'postmetabg',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for footer section', 'vacation'),
		'id' => 'footbgcolor',
		'std' => '#1d1d1d',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for copyright section', 'vacation'),
		'id' => 'copybgcolor',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for blog pagination', 'vacation'),
		'id' => 'blogpagebg',
		'std' => '#222222',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for blog pagination active/hover', 'vacation'),
		'id' => 'blogpagehvbg',
		'std' => '#00b1e9',
		'type' => 'color');
		
	// Border colors
	$options[] = array(
		'name' => __('Border Colors', 'vacation'),
		'desc' => __('Select border color for slider purchase button', 'vacation'),
		'id' => 'btnborder',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select border color for section title', 'vacation'),
		'id' => 'sectitleborder',
		'std' => '#00b1e9',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select border color for four box places image', 'vacation'),
		'id' => 'plimgborder',
		'std' => '#e2e2e2',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select border color for three/four box title', 'vacation'),
		'id' => 'subtitleborder',
		'std' => '#e7e6e6',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select border color for footer main', 'vacation'),
		'id' => 'footmainborder',
		'std' => '#00b1e9',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select border color for footer title', 'vacation'),
		'id' => 'foottitleborder',
		'std' => '#28292a',
		'type' => 'color');
		
		
	// Slider controls colors
	$options[] = array(
		'name' => __('Slider controls Colors', 'vacation'),
		'desc' => __('Select background color for slider navigation', 'vacation'),
		'id' => 'sldnavbg',
		'std' => '#373a3f',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for slider pager', 'vacation'),
		'id' => 'sldpagebg',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background hover color for slider pager', 'vacation'),
		'id' => 'sldpagehvbg',
		'std' => '#00b1e9',
		'type' => 'color');
		
	// Slider controls colors
		
	$options[] = array(
		'name'	=> __('Header Background Color and Opacity','vacation'),
		'desc' => __('Select background color for header', 'vacation'),
		'id' => 'headbgcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background opacity for header', 'vacation'),
		'id' => 'headbgopacity',
		'std' => '0.2',
		'type' => 'select',
		'options' => array('0.9' => 0.9, '0.8' => 0.8, '0.7' => 0.7, '0.6' => 0.6, '0.5' => 0.5, '0.4' => 0.4, '0.3' => 0.3, '0.2' => 0.2, '1' => 1));
		
	$options[] = array(
		'desc' => __('Select background color for slider caption', 'vacation'),
		'id' => 'sldbgcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background opacity for slide caption', 'vacation'),
		'id' => 'sldbgopacity',
		'std' => '0.3',
		'type' => 'select',
		'options' => array('0.9' => 0.9, '0.8' => 0.8, '0.7' => 0.7, '0.6' => 0.6, '0.5' => 0.5, '0.4' => 0.4, '0.3' => 0.3, '0.2' => 0.2, '1' => 1));
		

	//Section Settings
	$options[] = array(
		'name' => __('Sections', 'vacation'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Number of Sections', 'vacation'),
		'desc' => __('Select number of sections', 'vacation'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '6',
		'options' => array_combine(range(1,30), range(1,30)) );

	$numsecs = of_get_option( 'numsection', 6 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'vacation'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'vacation'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name' => __('Section Title Color', 'vacation'),
			'id' => 'sectiontitlecolor'.$n,
			'std' => ( ( isset($section_text[$n]['section_title_color']) ) ? $section_text[$n]['section_title_color'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Section Sub Title', 'vacation'),
			'id' => 'sectionsubtitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_sub_title']) ) ? $section_text[$n]['section_sub_title'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name' => __('Section Sub Title Color', 'vacation'),
			'id' => 'sectionsubtitlecolor'.$n,
			'std' => ( ( isset($section_text[$n]['section_sub_title_color']) ) ? $section_text[$n]['section_sub_title_color'] : '' ),
			'type' => 'color');

		$options[] = array(
			'name' => __('Section ID', 'vacation'),
			'desc'	=> __('Enter your section ID here. SECTION ID MUST BE IN SMALL LETTERS ONLY AND DO NOT ADD SPACE OR SYMBOL.','vacation'),
			'id' => 'menutitle'.$n,
			'std' => ( ( isset($section_text[$n]['menutitle']) ) ? $section_text[$n]['menutitle'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'vacation'),
			'desc' => __('Select background color for section', 'vacation'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'vacation'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');

		$options[] = array(
			'name' => __('Section CSS Class', 'vacation'),
			'desc' => __('Set class for this section.', 'vacation'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'vacation'),
			'desc'	=> __('Check to hide this section', 'vacation'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');

		$options[] = array(
			'name' => __('Section Content', 'vacation'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Homepage Slider', 'vacation'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Inner Page Slider', 'vacation'),
		'desc' => __('Show / Hide inner page slider', 'vacation'),
		'id' => 'innerpageslider',
		'type' => 'select',
		'std' => 'hide',
		'options' => array('show'=>'Show', 'hide'=>'Hide') );
		
	$options[] = array(
		'name' => __('Slider Effects and Timing', 'vacation'),
		'desc' => __('Select slider effect.','vacation'),
		'id' => 'slideefect',
		'std' => 'fade',
		'type' => 'select',
		'options' => array('random'=>'Random', 'fade'=>'Fade', 'fold'=>'Fold', 'sliceDown'=>'Slide Down', 'sliceDownLeft'=>'Slide Down Left', 'sliceUp'=>'Slice Up', 'sliceUpLeft'=>'Slice Up Left', 'sliceUpDown'=>'Slice Up Down', 'sliceUpDownLeft'=>'Slice Up Down Left', 'slideInRight'=>'SlideIn Right', 'slideInLeft'=>'SlideIn Left', 'boxRandom'=>'Box Random', 'boxRain'=>'Box Rain', 'boxRainReverse'=>'Box Rain Reverse', 'boxRainGrow'=>'Box Rain Grow', 'boxRainGrowReverse'=>'Box Rain Grow Reverse' ));
		
	$options[] = array(
		'desc' => __('Animation speed should be multiple of 100.', 'vacation'),
		'id' => 'slideanim',
		'std' => 500,
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add slide pause time.', 'vacation'),
		'id' => 'slidepause',
		'std' => 3000,
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slide Controllers', 'vacation'),
		'desc' => __('Hide/Show Direction Naviagtion of slider.','vacation'),
		'id' => 'slidenav',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Hide/Show pager of slider.','vacation'),
		'id' => 'slidepage',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Pause Slide on Hover.','vacation'),
		'id' => 'slidepausehover',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Yes', 'false'=>'No'));
		
	$options[] = array(
		'name' => __('Slider Image 1', 'vacation'),
		'desc' => __('First Slide', 'vacation'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider1.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall1',
		'std' => 'The country that travels within you',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge1',
		'std' => 'Welcome to Vacation',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc1',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl1',
		'std' => '#',
		'type' => 'text');		
		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'vacation'),
		'desc' => __('Second Slide', 'vacation'),
		'class' => '',
		'id' => 'slide2',
		'std' => get_template_directory_uri()."/images/slides/slider2.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall2',
		'std' => 'We are the best in',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge2',
		'std' => 'A world of wonders',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc2',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl2',
		'std' => '#',
		'type' => 'text');	
	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'vacation'),
		'desc' => __('Third Slide', 'vacation'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider3.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall3',
		'std' => 'there’s more to celebrate',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge3',
		'std' => 'Get 24x7 Support',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc3',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl3',
		'std' => '#',
		'type' => 'text');
			
	
	$options[] = array(
		'name' => __('Slider Image 4', 'vacation'),
		'desc' => __('Fourth Slide', 'vacation'),
		'id' => 'slide4',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall4',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge4',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');				
	
	$options[] = array(
		'name' => __('Slider Image 5', 'vacation'),
		'desc' => __('Fifth Slide', 'vacation'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall5',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge5',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 6', 'vacation'),
		'desc' => __('Sixth Slide', 'vacation'),
		'id' => 'slide6',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall6',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge6',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl6',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 7', 'vacation'),
		'desc' => __('Seventh Slide', 'vacation'),
		'id' => 'slide7',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall7',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge7',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl7',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 8', 'vacation'),
		'desc' => __('Eighth Slide', 'vacation'),
		'id' => 'slide8',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall8',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge8',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl8',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 9', 'vacation'),
		'desc' => __('Ninth Slide', 'vacation'),
		'id' => 'slide9',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall9',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge9',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl9',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 10', 'vacation'),
		'desc' => __('Tenth Slide', 'vacation'),
		'id' => 'slide10',
		'class' => '',
		'std' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Small Title', 'vacation'),
		'id' => 'slidetitlesmall10',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Large Title', 'vacation'),
		'id' => 'slidetitlelarge10',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'vacation'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');
	
	$options[] = array(
		'desc' => __('Slide Url', 'vacation'),
		'id' => 'slideurl10',
		'std' => '',
		'type' => 'text');
		

	//Footer SETTINGS
	$options[] = array(
		'name' => __('Footer', 'vacation'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Footer first column title', 'vacation'),
		'desc' => __('Add title for footer first column.', 'vacation'),
		'id' => 'footnav',
		'std' => 'Navigation',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer second column title', 'vacation'),
		'desc' => __('Add title for footer second column.', 'vacation'),
		'id' => 'recenttitle',
		'std' => 'Recent Trips',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer third column title', 'vacation'),
		'desc' => __('Add title for footer third column.', 'vacation'),
		'id' => 'creditsupp',
		'std' => 'Supported Credit Cards',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column title', 'vacation'),
		'desc' => __('Add title for footer fourth column.', 'vacation'),
		'id' => 'contacttitle',
		'std' => 'Contact Info',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column address area', 'vacation'),
		'desc' => __('Add title for footer fourth column address area.', 'vacation'),
		'id' => 'address',
		'std' => '123, Bridge Street',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column address landmark', 'vacation'),
		'desc' => __('Add title for footer fourth column address landmark.', 'vacation'),
		'id' => 'landmark',
		'std' => 'Curabitur Pharetra Area',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column city/country', 'vacation'),
		'desc' => __('Add title for footer fourth column city/country.', 'vacation'),
		'id' => 'citycountry',
		'std' => 'NY666555, New York',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column phone number', 'vacation'),
		'desc' => __('Add title for footer fourth column phone number.', 'vacation'),
		'id' => 'phone',
		'std' => '1800 555 6789',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column email address', 'vacation'),
		'desc' => __('Add title for footer fourth column email address.', 'vacation'),
		'id' => 'email',
		'std' => 'support@vacation.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer fourth column website URL', 'vacation'),
		'desc' => __('Add title for footer fourth column website URL.', 'vacation'),
		'id' => 'web',
		'std' => 'www.vacation.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Copyright', 'vacation'),
		'desc' => __('Copyright Text for your site.', 'vacation'),
		'id' => 'copytext',
		'std' => '&copy; 2016 Vacation. All Rights Reserved. Vacation Theme by <a href="http://flythemes.net" target="_blank">Flythemes</a>.',
		'type' => 'textarea');	

	//Short codes
	$options[] = array(
		'name' => __('Short Codes', 'vacation'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Blog posts', 'vacation'),
		'desc' => __('<pre>
[blogposts show="2"]
</pre>', 'vacation'),
		'type' => 'info');
		
		
	$options[] = array(
		'name' => __('Testimonial', 'vacation'),
		'desc' => __('<pre>
[testimonials]
</pre>', 'vacation'),
		'type' => 'info');		

	$options[] = array(
		'name' => __('Social Icons', 'vacation'),
		'desc' => __('[social_area]<br>
							[social icon="Icon name" link="Link here"]<br>
						[/socia_area]', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Services Box', 'vacation'),
		'desc' => __('<pre>
[services icon="add fontawesome icon" title="add title" link="link url#"]
	Your content here...
[/services]
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Places Box', 'vacation'),
		'desc' => __('<pre>
[places image="Add url" days="Add days" title="Place title" resort="resort place" doller="doller price" link="link url#" last="type yes to remove margin"]
	
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Special Box', 'vacation'),
		'desc' => __('<pre>
[special image="Add url" discount="Add discount off" title="Place title" doller="doller price" link="link url#" last="type yes to remove margin"]
	
</pre>', 'vacation'),
		'type' => 'info');
	

	$options[] = array(
		'name' => __('2 Column Content', 'vacation'),
		'desc' => __('<pre>
[column_content type="one_half"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_half_last"]
	Column 2 Content goes here...
[/column_content]
</pre>', 'vacation'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('3 Column Content', 'vacation'),
		'desc' => __('<pre>
[column_content type="one_third"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_third"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_third_last"]
	Column 3 Content goes here...
[/column_content]
</pre>', 'vacation'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('4 Column Content', 'vacation'),
		'desc' => __('<pre>
[column_content type="one_fourth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fourth_last"]
	Column 4 Content goes here...
[/column_content]
</pre>', 'vacation'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('5 Column Content', 'vacation'),
		'desc' => __('<pre>
[column_content type="one_fifth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 4 Content goes here...
[/column_content]

[column_content type="one_fifth_last"]
	Column 5 Content goes here...
[/column_content]
</pre>', 'vacation'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Clear', 'vacation'),
		'desc' => __('<pre>
[clear]
</pre>', 'vacation'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('HR / Horizontal separation line', 'vacation'),
		'desc' => __('<pre>
[hr] or &lt;hr&gt;
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Separator / blank space', 'vacation'),
		'desc' => __('<pre>
[separator height="20"]
</pre>', 'vacation'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Tabs', 'vacation'),
		'desc' => __('<pre>
[tabs]
	[tab title="TAB TITLE 1"]
		TAB CONTENT 1
	[/tab]
	[tab title="TAB TITLE 2"]
		TAB CONTENT 2
	[/tab]
	[tab title="TAB TITLE 3"]
		TAB CONTENT 3
	[/tab]
[/tabs]
</pre>', 'vacation'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Toggle Content', 'vacation'),
		'desc' => __('<pre>
[toggle_content title="Toggle Title 1"]
	Toggle content 1...
[/toggle_content]
[toggle_content title="Toggle Title 2"]
	Toggle content 2...
[/toggle_content]
[toggle_content title="Toggle Title 3"]
	Toggle content 3...
[/toggle_content]
</pre>', 'vacation'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Accordion Content', 'vacation'),
		'desc' => __('<pre>
[accordion]
	[accordion_content title="ACCORDION TITLE 1"]
		ACCORDION CONTENT 1
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 2"]
		ACCORDION CONTENT 2
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 3"]
		ACCORDION CONTENT 3
	[/accordion_content]
[/accordion]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Small', 'vacation'),
		'desc' => __('<pre>
[gradient_button size="small" bg_color="#e00" color="#fff" text="Medium Gradient Button" title="Medium Gradient Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Medium', 'vacation'),
		'desc' => __('<pre>
[gradient_button size="medium" bg_color="#060" color="#fff" text="Medium Gradient Button" title="Medium Gradient Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Large', 'vacation'),
		'desc' => __('<pre>
[gradient_button size="large" bg_color="#026" color="#fff" text="Large Gradient Button" title="Large Gradient Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Gradient Button - Xtra Large', 'vacation'),
		'desc' => __('<pre>
[gradient_button size="x-large" bg_color="#00ccff" color="#fff" text="Extra Large Simple Button" title="Extra Large Simple Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Small', 'vacation'),
		'desc' => __('<pre>
[simple_button size="small" bg_color="#c00" color="#fff" text="Small Simple Button" title="Small Simple Button" url="#" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Medium', 'vacation'),
		'desc' => __('<pre>
[simple_button size="medium" bg_color="#060" color="#fff" text="Medium Simple Button" title="Medium Simple Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Large', 'vacation'),
		'desc' => __('<pre>
[simple_button size="large" bg_color="#026" color="#fff" text="Large Simple Button" title="Large Simple Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Xtra Large', 'vacation'),
		'desc' => __('<pre>
[simple_button size="x-large" bg_color="#00ccff" color="#fff" text="Extra Large Simple Button" title="Extra Large Simple Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Round Button - Light', 'vacation'),
		'desc' => __('<pre>
[round_button style="light" text="Round Button" title="Round Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Round Button - Dark', 'vacation'),
		'desc' => __('<pre>
[round_button style="dark" text="Round Button" title="Round Button" url="" position="left"]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Message Box - Success', 'vacation'),
		'desc' => __('<pre>
[message type="success"]This is a sample of the \'success\' style message box shortcode. To use this style use the following shortcode[/message]
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Error', 'vacation'),
		'desc' => __('<pre>
[message type="error"]This is a sample of the \'error\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Warning', 'vacation'),
		'desc' => __('<pre>
[message type="warning"]This is a sample of the \'warning\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Info', 'vacation'),
		'desc' => __('<pre>
[message type="info"]This is a sample of the \'info\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - About', 'vacation'),
		'desc' => __('<pre>
[message type="about"]This is a sample of the \'about\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'vacation'),
		'type' => 'info');

	$options[] = array(
		'name' => __('List Styles', 'vacation'),
		'desc' => __('<pre>
[unordered_list style="list-1"]&lt;li&gt;List style 1&lt;/li&gt;[/unordered_list]
</pre>
<br />You can use above shortcode OR simply add class to ul. You can choose from list-1 to list-10 styles.<br />
<pre>
&lt;ul class="list-1"&gt;&lt;li&gt;List style 1&lt;/li&gt;&lt;/ul&gt;
</pre>
', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Code', 'vacation'),
		'desc' => __('[code type="php/html"]
		Your code here.
		[/code] 
', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Pullquote', 'vacation'),
		'desc' => __('[pullquote align="left/right"]
		Your quote text...
		[/pullquote] 
', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Horizontal Separator', 'vacation'),
		'desc' => __('[hr_top] 
', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Dropcap', 'vacation'),
		'desc' => __('[dropcap]L[/dropcap] 
', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Search Form', 'vacation'),
		'desc' => __('[searchform] 
', 'vacation'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Contact Form', 'vacation'),
		'desc' => __('[contactform to_email="test@example.com" title="Contact Form"] 
', 'vacation'),
		'type' => 'info');
		
	
	// Support					
	$options[] = array(
		'name' => __('Our Themes', 'vacation'),
		'type' => 'heading');

	$options[] = array(
		'desc' => __('Vacation WordPress theme has been Designed and Created by Flythemes.', 'vacation'),
		'type' => 'info');	

	 $options[] = array(
		'desc' => __('<a href="'.esc_url(THEME_URL).'" target="_blank"><img src="'.get_template_directory_uri().'/images/flylogo.jpg"></a>', 'vacation'),
		'type' => 'info');	

	return $options;
}