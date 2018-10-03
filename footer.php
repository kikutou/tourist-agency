<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Vacation
 */
?>

<footer id="main-footer">
		<div class="container">
        	<?php if(!dynamic_sidebar('sidebar-6')) : ?>
        		<div class="footer-col"><h2><?php echo of_get_option('footnav','Navigation'); ?></h2>
                <?php wp_nav_menu( array('theme_location'  => 'navigation') ); ?>
                </div><!-- footer-col -->
                <?php endif; ?>
                
                <?php if(!dynamic_sidebar('sidebar-7')) : ?>
                <div class="footer-col"><h2><?php echo of_get_option('recent','Recent Trips'); ?></h2>
                	<?php $foot_query = new WP_Query('post_type=post&showposts=6'); ?>
                    <?php while($foot_query->have_posts() ) : $foot_query->the_post(); ?>
                    		<div class="foot-post">
                            	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                               
                            </div><!-- foot-post -->
                    <?php endwhile; ?>
                </div><!-- footer-col -->
                <?php endif; ?>
                
                <?php if(!dynamic_sidebar('sidebar-8')) : ?>
                <div class="footer-col"><h2><?php echo of_get_option('creditsupp','Supported Credit Cards'); ?></h2>
                		<?php wp_nav_menu( array('theme_location'  => 'credit') ); ?>
                </div><!-- footer-col -->
                <?php endif; ?>
                
                <?php if(!dynamic_sidebar('sidebar-9')) : ?>
        		<div class="footer-col"><h2><?php echo of_get_option('contacttitle','Contact Info'); ?></h2>
                <p><?php echo of_get_option('address','123, Bridge Street'); ?></p>
                <p><?php echo of_get_option('landmark','Curabitur Pharetra Area'); ?></p>
                <p><?php echo of_get_option('citycountry','NY666555, New York'); ?></p>
                <p>Phone : <?php echo of_get_option('phone','1800 555 6789'); ?></p>
                <p>Email : <a href="mailto:<?php echo of_get_option('email','support@vacation.com'); ?>"><?php echo of_get_option('email','support@vacation.com'); ?></a></p>
                <p>Web   : <a href="<?php echo of_get_option('web','www.vacation.com'); ?>"><?php echo of_get_option('web','www.vacation.com'); ?></a></p>
                </div><!-- footer-col -->
                <?php endif; ?>
                <div class="clear"></div>
        </div><!-- container -->
</footer><!-- #main-footer -->
        <div class="copyright-wrapper">
        	<div class="inner">
                <div class="copyright">
                	<?php if(!dynamic_sidebar('sidebar-5')) : ?>
                    	<p><?php if( of_get_option('copytext',true) != ''){ echo of_get_option('copytext','&copy; 2016 Vacation. All Rights Reserved. Vacation Theme by <a href="http://flythemes.net" target="_blank">Flythemes</a>.'); }; ?></p>               
                    <?php endif; ?>
                </div><!-- copyright --><div class="clear"></div>         
            </div><!-- inner -->
        </div>
    </div>
<a href="#" class="scrollToTop"></a>  
<?php wp_footer(); ?>

</body>
</html>