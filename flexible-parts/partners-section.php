<?php
wp_reset_query();
wp_reset_postdata();
$partners_title = get_sub_field('partners_title');
$partners_lists = get_sub_field('partners_lists');
?>
<section class="partners-section">
    <div class="title" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <?php if (!empty($partners_title)) { ?>
            <h2><?php echo $partners_title ?></h2>
            <?php } ?>
        </div>
    </div>
    <div class="partners-wrap">
        <div class="container">
            <div class="row">
                <?php foreach ($partners_lists as $key => $value) {
                    $partners_logo = $value['partners_logo'];
                ?>
                <div class="partners-logo" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="<?php echo $partners_logo?>" alt="">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>