<?php
wp_reset_query();
wp_reset_postdata();
$hero_image = get_sub_field('hero_image');
$hero_title = get_sub_field('hero_title');
$hero_button = get_sub_field('button');
?>
<section class="hero-section" style="background-image: url(<?php echo $hero_image; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hero-text">
                    <?php if(!empty($hero_title)){ ?>
                    <h1 data-aos="fade-up"><?php echo $hero_title; ?></h1>
                    <?php } ?>
                    <?php if(!empty($hero_button)){ ?>
                    <div class="link_wrap btn" data-aos="fade-up" data-aos-duration="1000">
                        <a class="text-link" href="<?php echo $hero_button['url']; ?>">
                            <span class="text"><?php echo $hero_button['title']; ?></span>
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
</section>