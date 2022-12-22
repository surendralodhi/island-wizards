<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage ISLANDWIZARDS
 * @since Island Wizards 1.0
 */
?>
<?php 
    if(class_exists('acf')){
        $footer_top_title = get_field('footer_top_title','option');
        $footer_top_cta = get_field('footer_top_cta','option');
        $footer_about_text = get_field('footer_about_text','option');
        $copyright = get_field('copyright','option');
        $footer_archives_title = get_field('footer_archives_title','option');
        $footer_archives = get_field('footer_archives','option');
        $footer_categories_title = get_field('footer_categories_title','option');
        $footer_categories = get_field('footer_categories','option');
        $footer_recent_posts_title = get_field('footer_recent_posts_title','option');
        $footer_recent_posts = get_field('footer_recent_posts','option');
    }
?>
    <!-- Footer start here -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    	<?php if(!empty($footer_top_title)){ ?>
                        <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $footer_top_title; ?></h2>
                	<?php } ?>
                    </div>
                    <div class="col-md-6 footer-btn d-md-flex align-items-md-center justify-content-md-end">
                        <?php if(!empty($footer_top_cta)){ ?>
                        <div class="link_wrap btn">
                            <a class="text-link" href="<?php echo $footer_top_cta['url']; ?>">
                                <span class="text"><?php echo $footer_top_cta['title']; ?></span>
                                <svg class="next-arrow" aria-hidden="true" width="20px" height="25px" viewBox="0 0 50 80" xml:space="preserve">
                                    <polyline stroke="#ffffff" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round" points="0, 0 45, 40 0, 80"/>
                                </svg>  
                                <span class="line"></span> 
                            </a>
                        </div>
                	<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-col">
                        <div class="aboutus">
                        	<?php echo $footer_about_text; ?>
                        	<p><?php echo $copyright; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-col">
                        <div class="footer-links">
                            <h4><?php echo $footer_archives_title; ?></h4>
                            <ul>
                                <li><a href="#">September 2019</a></li>
                                <li><a href="#">July 2019</a></li>
                                <li><a href="#">April 2019</a></li>
                                <li><a href="#">March 2019</a></li>
                                <li><a href="#">February 2019</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-col">
                        <div class="footer-links">
                            <h4><?php echo $footer_categories_title; ?></h4>
                            <ul>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">Music</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-col">
                        <div class="footer-links">
                            <h4><?php echo $footer_recent_posts_title; ?></h4>
                            <ul>
                                <li><a href="#">Wake up and smell the roses</a></li>
                                <li><a href="#">Wake up and smell the roses</a></li>
                                <li><a href="#">Wake up and smell the roses</a></li>
                                <li><a href="#">Wake up and smell the roses</a></li>
                                <li><a href="#">Wake up and smell the roses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- Footer End here -->
        <?php wp_footer(); ?>
    </body>
</html>
