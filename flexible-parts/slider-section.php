<?php
wp_reset_query();
wp_reset_postdata();
$slider_title = get_sub_field('slider_title');
$slider_lists = get_sub_field('slider_lists');
?>
<section class="slider-section">
    <div class="container">
        <div class="title" data-aos="fade-up" data-aos-duration="1000">
            <?php if (!empty($slider_title)) { ?>
            <h2><?php echo $slider_title; ?></h2>
            <?php } ?>
        </div>
    </div>
    <div class="container-fluid">
        <?php if (!empty($slider_lists)) { ?>
        <div class="culture-slider">
            <?php foreach ($slider_lists as $key => $value) {
                $slider_pic = $value['slider_pic'];
            ?>
            <div class="single-silde">
                <img src="<?php echo $slider_pic; ?>" alt="">
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <div class="cursor"></div>
    </div>
</section>