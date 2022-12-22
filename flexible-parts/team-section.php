<?php
wp_reset_query();
wp_reset_postdata();
$team_title = get_sub_field('team_title');
$team_lists = get_sub_field('team_lists');

?>
<section class="team-section">
    <?php if (!empty($team_title)) { ?>
    <div class="container">
        <div class="team-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?php echo $team_title; ?></h2>
        </div>
    </div>
    <?php } ?>
    <div class="container">
        <div class="row">
            <?php foreach ($team_lists as $key => $value) { 
                $team_pic = $value['team_pic'];
                $designation = $value['designation'];
                $team_name = $value['team_name'];
                $team_content = $value['team_content'];
                $team_full_content = $value['team_full_content'];
                $linkedin_url = $value['linkedin_url'];
                $social_lists = $value['social_lists'];
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <?php if (!empty($team_pic)) { ?>
                    <div class="team-member-image" data-aos="fade-up" data-aos-duration="1000">
                        <div class="team-member-image-inner">
                            <img src="<?php echo $team_pic; ?>" alt="" />
                        </div>
                    </div>
                    <?php } ?>
                    <div class="team-meta" data-aos="fade-up" data-aos-duration="1000">
                        <?php if (!empty($designation)) { ?>
                        <h5><?php echo $designation; ?></h5>
                        <?php } ?>
                        <?php if (!empty($team_name)) { ?>
                        <h3><?php echo $team_name; ?></h3>
                        <?php } ?>
                        <?php if (!empty($team_content)) { ?>
                        <p><?php echo $team_content; ?></p>
                        <?php } ?>
                        <div class="arrow-cta" data-style="arrow-animation" data-alignment="left">
                            <span class="link_wrap">
                                <a class="link_text" href="#">
                                    <svg class="next-arrow" width="20px" height="25px" viewBox="0 0 50 80" xml:space="preserve">
                                        <polyline stroke="#000000" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round" points="0, 0 45, 40 0, 80"></polyline>
                                    </svg>
                                    <span class="line"></span> 
                                </a>
                            </span>
                        </div>
                    </div>
                    
                </div>
                <div class="team-member-details-wrap">
                    <div class="inner-wrap">
                        <div class="team-member-details">
                            <div class="bio-inner">
                                <span class="mobile-close"></span>
                                <?php if (!empty($designation)) { ?>
                                <div class="title"><?php echo $designation; ?></div>
                                <?php } ?>
                                <?php if (!empty($team_name)) { ?>
                                <h2><?php echo $team_name; ?></h2>
                                <?php } ?>
                                <div class="team-desc">
                                    <?php echo $team_full_content; ?>

                                    <?php
                                        $linkedin_url = $social_lists['linkedin_url'];
                                        $instagram_url = $social_lists['instagram_url'];
                                        $github_url = $social_lists['github_url'];
                                    ?>
                                    <div class="bottom-meta">
                                        <?php if (!empty($linkedin_url)) { ?>
                                        <a href="<?php echo $linkedin_url?>" target="_blank"><i class="icon-default-style fa fa-linkedin"></i></a>
                                        <?php } ?>
                                        <?php if (!empty($instagram_url)) { ?>
                                        <a href="<?php echo $instagram_url?>" target="_blank"><i class="icon-default-style fa fa-instagram"></i></a>
                                        <?php } ?>
                                        <?php if (!empty($github_url)) { ?>
                                        <a href="<?php echo $github_url?>" target="_blank"><i class="icon-default-style fa fa-github-alt"></i></a>
                                        <?php } ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="team_member_picture">
                            <div class="team_member_picture_wrap">
                                <div class="team_member_image" style="background-image: url(<?php echo $team_pic; ?>)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>