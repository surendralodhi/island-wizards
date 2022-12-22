<?php
wp_reset_query();
wp_reset_postdata();
$about_image = get_sub_field('about_image');
$about_title = get_sub_field('about_title');
$about_text = get_sub_field('about_text');
$cta = get_sub_field('cta');
$about_quote = get_sub_field('about_quote');
$author_pic = get_sub_field('author_pic');
$author_name = get_sub_field('author_name');
$author_designation = get_sub_field('author_designation');
?>
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="revealed-bg" data-aos="fade-up">
                    <div class="image-bg-wrap">
                        <div class="inner-bg-wrap">
                            <div class="image-bg" style="background-image:url(<?php echo $about_image ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <div class="about-desc">
                        <?php if(!empty($about_title)){ ?>
                            <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $about_title; ?></h2>
                        <?php } ?>
                        <?php if(!empty($about_text)){ ?>
                            <p data-aos="fade-up" data-aos-duration="1000"><?php echo $about_text; ?></p>
                        <?php } ?>
                        <?php if(!empty($cta)){ ?>
                        <div class="link_wrap" data-aos="fade-up" data-aos-duration="1000">
                            <a class="text-link" href="<?php echo $cta['url']; ?>">
                                <span class="text"><?php echo $cta['title']; ?></span>
                                <svg class="next-arrow" aria-hidden="true" width="20px" height="25px" viewBox="0 0 50 80" xml:space="preserve">
                                    <polyline stroke="#ffffff" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round" points="0, 0 45, 40 0, 80"/>
                                </svg>  
                                <span class="line"></span> 
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-xl-6 col-lg-8">
                            <div class="divider-border"></div>
                            <div class="single-testimonial">
                                <?php if(!empty($about_quote)){ ?>
                                <p><?php echo $about_quote; ?></p>
                                <?php } ?>
                                <div class="testi-author">
                                    <?php if(!empty($author_pic)){ ?>
                                        <img class="image-icon" src="<?php echo $author_pic; ?>" alt="">
                                    <?php } ?>
                                    <span class="wrap">
                                        <?php if(!empty($author_name)){ ?>
                                            <div class="name"><?php echo $author_name; ?></div>
                                        <?php } ?>
                                        <?php if(!empty($author_designation)){ ?>
                                            <div class="designation"><?php echo $author_designation ?></div>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>