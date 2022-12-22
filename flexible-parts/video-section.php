<?php
wp_reset_query();
wp_reset_postdata();
$video_title = get_sub_field('video_title');
$bg_video_url = get_sub_field('bg_video_url');
$popup_video_switch = get_sub_field('popup_video_switch');
$popup_video_url = get_sub_field('popup_video_url');

?>
<section class="video-section full-width-section">
    <div class="video-color-overlay"></div>
    <?php if (!empty($bg_video_url)): ?>
    <video class="video-bg" width="1800" height="700" preload="auto" loop autoplay muted playsinline>
        <source src="<?php echo $bg_video_url; ?>"  type="video/mp4">
    </video>
    <?php endif ?>
    <?php if(!empty($popup_video_url)) { ?> 
    <div class="video-text <?php if($popup_video_switch) { ?>popup-video<?php } ?>">
        <a href="<?php echo $popup_video_url; ?>" data-fancybox>
            <div class="play">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600px" height="800px" x="0px" y="0px" viewBox="0 0 600 800" enable-background="new 0 0 600 800" xml:space="preserve"><path fill="none" d="M0-1.79v800L600,395L0-1.79z"></path> </svg>
            </div>
            <?php if(!empty($video_title)) { ?> 
            <div class="link-text">
                <h2><?php echo $video_title; ?></h2>
            </div>
            <?php } ?>
        </a>
    </div>    
    <?php } ?>
</section>