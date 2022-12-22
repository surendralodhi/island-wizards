<?php
wp_reset_query();
wp_reset_postdata();
$services_title = get_sub_field('services_title');
$services_lists = get_sub_field('services_lists');

?>
<section class="services-section">
    <div class="container-fluid">
        <div class="title" data-aos="fade-up" data-aos-duration="1000">
            <?php if(!empty($services_title)) {?>
            <h2><?php echo $services_title; ?></h2>
            <?php } ?>
        </div>
        <div class="row">
            <?php if(!empty($services_lists)){ ?>
            <?php foreach ($services_lists as $key => $value) { 
                $service_pic = $value['service_pic'];
                $service_icon = $value['service_icon'];
                $service_title = $value['service_title'];
                $service_url = $value['service_url'];
                $service_text = $value['service_text'];
            ?>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="sixb-fancy-box single-service" data-aos="fade-up" data-aos-duration="1000">
                    <div class="box-bg" style="background-image: url(<?php echo $service_pic; ?>);"></div>
                    <div class="inner">
                        <div class="heading-wrap">
                            <?php if(!empty($service_icon)) {?>
                            <span class="icon-wrap">
                                <span>
                                    <img src="<?php echo $service_icon; ?>" alt="">
                                </span>
                            </span>
                            <?php } ?>
                            <?php if(!empty($service_title)) {?>
                            <h2><a href="<?php echo $service_url; ?>"><?php echo $service_title; ?></a></h2>
                            <?php } ?>
                        </div>
                        <?php if(!empty($service_text)) {?>
                        <div class="hover-content"><?php echo $service_text; ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>