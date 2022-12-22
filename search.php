<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage ISLANDWIZARDS
 * @since Island Wizards 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
            
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'islandwizards' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'islandwizards' ),
				'next_text'          => __( 'Next page', 'islandwizards' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'islandwizards' ) . ' </span>',
			) );

                    // If no content, include the "No posts found" template.
                    else :
                            get_template_part( 'template-parts/content', 'none' );

                    endif;
		?>
            
	</main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>