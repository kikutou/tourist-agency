<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Vacation
 */

get_header(); 
?>

<?php if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) : ?>

    <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
				<?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                
                    endwhile;
                    // Previous/next post navigation.
                    vacation_pagination();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results', 'index' );
                
                endif;
                ?>
            </div>
            <?php get_sidebar();?>
            <div class="clear"></div>
        </div>
    </div>


<?php else: ?>

	<?php
	
	$options = array();
	
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
			'content'		=> '[column_content type="one_half"]<iframe width="570" height="326" src="https://www.youtube.com/embed/inao7EX3SkI" frameborder="0" allowfullscreen></iframe>[/column_content][column_content type="one_half_last"]<h3>Our recent trip to tropical island Bora Bora</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus lorem eu augue luctus eleifend. Donec dignissim auctor neque id porta. Sed vestibulum eros ut mauris ornare, id auctor massa pharetra. Curabitur sit amet ornare odio. Nam euismod dui non nisl malesuada egestas. Sed suscipit malesuada erat nec malesuada. Maecenas sit amet scelerisque neque, sed egestas odio. Nunc pellentesque, enim quis fringilla ornare, ipsum augue elementum dolor, eu facilisis nisi justo id ex. Donec porttitor magna at pulvinar consectetur. Sed ac ultrices est, quis iaculis lacus. Praesent posuere imperdiet feugiat. <a href="#" class="blog-more">Buy This Template</a>[/column_content]',
		
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
	
    if( of_get_option('numsection', 6) > 0 ) { 
        $numSections = esc_attr( of_get_option('numsection', 6) );
        for( $s=1; $s<=$numSections; $s++ ){ 
            $title 			= ( of_get_option('sectiontitle'.$s, true) != '' ) ? esc_html( of_get_option('sectiontitle'.$s, $section_text[$s]['section_title']) ) : '';
			$titlecolor		= ( of_get_option('sectiontitlecolor'.$s, true) != '' ) ? esc_html( of_get_option('sectiontitlecolor'.$s, $section_text[$s]['section_title_color']) ) : '';
			$subtitle 			= ( of_get_option('sectionsubtitle'.$s, true) != '' ) ? esc_html( of_get_option('sectionsubtitle'.$s, $section_text[$s]['section_sub_title']) ) : '';
			$subtitlecolor		= ( of_get_option('sectionsubtitlecolor'.$s, true) != '' ) ? esc_html( of_get_option('sectionsubtitlecolor'.$s, $section_text[$s]['section_sub_title_color']) ) : '';
			$secid			= ( of_get_option('menutitle'.$s, true) != '') ? esc_html( of_get_option('menutitle'.$s, $section_text[$s]['menutitle']) ) : '';
            $class			= ( of_get_option('sectionclass'.$s, true) != '' ) ? esc_html( of_get_option('sectionclass'.$s, $section_text[$s]['class']) ) : '';
            $content		= ( of_get_option('sectioncontent'.$s, true) != '' ) ? of_get_option('sectioncontent'.$s, $section_text[$s]['content']) : ''; 
			$hide			= ( of_get_option('hidesec'.$s, true) != '' ) ? of_get_option('hidesec'.$s, false) : '';
            $bgcolor		= ( of_get_option('sectionbgcolor'.$s, true) != '' ) ? of_get_option('sectionbgcolor'.$s, $section_text[$s]['bgcolor']) : '';
            $bgimage		= ( of_get_option('sectionbgimage'.$s, true) != '' ) ? of_get_option('sectionbgimage'.$s, $section_text[$s]['bgimage']) : '';
            ?>
            <section <?php if( $bgcolor || $bgimage) { ?>style="<?php echo ($bgcolor != '') ? 'background-color:'.$bgcolor.'; ' : '' ; echo ($bgimage != '') ? 'background-image:url('.$bgimage.'); background-repeat:no-repeat; background-position: center center; background-attachment:fixed; background-size: cover; ' : '' ; echo ($hide) != false ? 'display:none;': ''; ?>"<?php } ?> id="<?php echo $secid; ?>" class="<?php echo ( of_get_option('menutitle'.$s, true) != '' ) ? 'menu_page' : '';?>">
            	<div class="container" <?php if(($class == 'our-projects') || ($class == 'map')){ ?>style="width:100%"<?php } ?>>
                    <div class="<?php echo ( ($s>22) && $class=='') ? 'top-grey-box' : $class; ?>">
                        <?php if( $title != '' ) { ?>
                        <h2 class="section-title" style="color:<?php echo $titlecolor; ?>"><?php echo $title; ?></h2>
						<div class="section-subtitle" style="color:<?php echo $subtitlecolor; ?>"><?php echo $subtitle; ?></div>
                    <?php } ?>
                    <?php the_content_format( $content ); ?>
                     </div><!-- middle-align -->
                    <div class="clear"></div>
                    </div><!-- container -->
            </section><div class="clear"></div>
        
            <?php 
        }
    }
    ?>

<?php endif; ?>
<?php get_footer(); ?>