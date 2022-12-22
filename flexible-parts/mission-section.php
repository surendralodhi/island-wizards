<?php
wp_reset_query();
wp_reset_postdata();
$mission_title = get_sub_field('mission_title');
$mission_content = get_sub_field('mission_content');
$mission_lists = get_sub_field('mission_lists');
$cta = get_sub_field('cta');
$mission_image = get_sub_field('mission_image');

?>
<section class="mission-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-content">
                    <div class="mission-desc">
                        <?php if(!empty($mission_title)) {?>
                        <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo $mission_title; ?></h2>
                        <?php }?>
                        <?php if(!empty($mission_content)) {?>
                        <p data-aos="fade-up" data-aos-duration="1000"><?php echo $mission_content; ?></p>
                        <?php }?>
                        <?php if(!empty($mission_lists)){ ?>
                        <ul>
                            <?php foreach ($mission_lists as $key => $value) { 
                                $mission_list = $value['mission_list'];
                            ?>
                            <li data-aos="fade-up" data-aos-duration="1000"><?php echo $mission_list; ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <?php if(!empty($cta)) {?>
                        <div class="link_wrap" data-aos="fade-up" data-aos-duration="1000">
                            <a class="text-link" href="<?php echo $cta['url']?>">
                                <span class="text"><?php echo $cta['title']; ?></span>
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
            <div class="col-md-6">
                <div class="revealed-bg" data-aos="fade-up" data-aos-duration="1000">
                    <div class="image-bg-wrap">
                        <div class="inner-bg-wrap">
                            <div class="image-bg" style="background-image:url(<?php echo $mission_image; ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>