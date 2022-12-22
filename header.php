<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage ISLANDWIZARDS
 * @since Island Wizards 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php } ?>
        <?php
            if( class_exists('acf') ) {
                $favicon = get_field( 'islandwizards_options_favicon', 'option' );
                if( !empty( $favicon ) ) {
        ?>
            <!-- Favicon -->
            <link rel="shortcut icon" href="<?php echo $favicon['url']; ?>" type="image/x-icon" />
        <?php
                }
            }
        ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php 
    if(class_exists('acf')){
        $site_logo = get_field('islandwizards_options_site_logo','option');
    }
    ?>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>"><img class="white-logo" src="<?php echo $site_logo['url']?>" alt=""></a>
                        <a href="<?php echo home_url(); ?>"><img class="dark-logo" src="<?php echo $site_logo['url']?>" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-9 col-md-9 d-flex align-items-center justify-content-end">
                    <div class="nav-menu">
                        <a class="menulinks"><i></i></a>
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'mainmenu',
                                    'container'      => '',
                                 ) );
                            ?>
                         <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>