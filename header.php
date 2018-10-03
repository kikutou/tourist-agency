 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Vacation
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/x-icon" href="<?php echo esc_url( of_get_option('favicon', true) ); ?>" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php wp_head(); ?>
<style type="text/css">
	<?php if((of_get_option('innerpageslider', true) == 'hide') && is_page()) { ?>
		.header{ background-color:<?php echo of_get_option('headbgcolor',true); ?>}
	<?php } ?>
</style>
<script>
	jQuery(window).load(function() {
		// Animate loader off screen
		jQuery(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>

<body <?php body_class(); ?>>
<?php if(is_home() || is_front_page()) { ?>
<div class="se-pre-con"></div>
<?php } ?>

<?php if ( (of_get_option('innerpageslider', true) != 'hide') || is_front_page() ) { ?>
    <div class="slider-main">
       <?php
	   		
			$slideimage = '';
			$slideimage = array(
					'1'	=>	get_template_directory_uri().'/images/slides/slider1.jpg',
					'2'	=>  get_template_directory_uri().'/images/slides/slider2.jpg',
					'3'	=>  get_template_directory_uri().'/images/slides/slider3.jpg',
					'4'	=>  get_template_directory_uri().'/images/slides/slider1.jpg',
					'5'	=>  get_template_directory_uri().'/images/slides/slider2.jpg',
					'6'	=>  get_template_directory_uri().'/images/slides/slider3.jpg',
					'7'	=>  get_template_directory_uri().'/images/slides/slider1.jpg',
					'8'	=>  get_template_directory_uri().'/images/slides/slider2.jpg',
					'9'	=>  get_template_directory_uri().'/images/slides/slider3.jpg',
					'10'	=>  get_template_directory_uri().'/images/slides/slider2.jpg',
			);
	   
			$slAr = array();
			$m = 0;
			for ($i=1; $i<11; $i++) {
				if ( of_get_option('slide'.$i, true) != "" ) {
					$imgSrc 	= of_get_option('slide'.$i, $slideimage[$i]);
					$imgTitlesm	= of_get_option('slidetitlesmall'.$i, true);
					$imgTitlelg	= of_get_option('slidetitlelarge'.$i, true);
					$imgDesc	= of_get_option('slidedesc'.$i, true);
					$imglink	= of_get_option('slidelink'.$i, true);
					if ( strlen($imgSrc) > 10 ) {
						$slAr[$m]['image_src'] = of_get_option('slide'.$i, $slideimage[$i]);
						$slAr[$m]['image_titlesm'] = of_get_option('slidetitlesmall'.$i, true);
						$slAr[$m]['image_titlelg'] = of_get_option('slidetitlelarge'.$i, true);
						$slAr[$m]['image_desc'] = of_get_option('slidedesc'.$i, true);
						$slAr[$m]['image_url'] = of_get_option('slidelink'.$i, true);
						$m++;
					}
				}
				
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_titlesm'].$sv['image_titlelg']);?>" title="<?php if ( ($sv['image_titlelg']!='') && ($sv['image_desc']!='')) { echo '#slidecaption'.$n ; } ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="top-bar">
                    	<?php if( of_get_option('slidetitlesmall'.$sln, true) != '' ){ ?>
                            <h4><?php echo of_get_option('slidetitlesmall'.$sln, 'Sub Heading 1'); ?></h4>
                        <?php } ?>
                        <?php if( of_get_option('slidetitlelarge'.$sln, true) != '' ){ ?>
                            <h2><?php echo of_get_option('slidetitlelarge'.$sln, 'Slide Title 1'); ?></h2>
                        <?php } ?>
                        <?php if( of_get_option('slidedesc'.$sln, true) != '' ){ ?>
                            <p><?php echo of_get_option('slidedesc'.$sln, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur'); ?></p>
                        <?php } ?>
						<?php if( of_get_option('slideurl'.$sln, true) != ''){ ?>
                        	<a class="read-more" href="<?php echo of_get_option('slideurl'.$sln,'#'); ?>"><?php _e('Learn More','vacation'); ?></a>
                        <?php } ?>
                    </div>
                    </div><?php 
                } ?>
                
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </div>
      </div><!-- slider -->
<?php } ?>


      <div class="main-container">
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>