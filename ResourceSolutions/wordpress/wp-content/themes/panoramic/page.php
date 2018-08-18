<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package panoramic
 */

get_header(); ?>

	<?php //get_template_part( 'library/template-parts/content-wrapper', 'open' ); ?>

    <?php if ( ! is_front_page() ) : ?>
    
        <?php if ( function_exists( 'bcn_display' ) ) : ?>
        <div class="breadcrumbs">
            <?php bcn_display(); ?>
        </div>
        <?php endif; ?>
        
    <?php endif; ?>

	<div id="primary" class="content-area <?php echo esc_attr( get_theme_mod( 'panoramic-rpwe-site-content-layout', customizer_library_get_default( 'panoramic-rpwe-site-content-layout' ) ) ); ?> <?php echo esc_attr( !is_active_sidebar( 'sidebar-1' ) ? 'full-width' : '' ); ?>">
		<main id="main" class="site-main" role="main">
            
            <?php get_template_part( 'library/template-parts/page-title' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'library/template-parts/content', 'page' ); ?>

				<?php
					// If comments are open load up the comment template
					if ( comments_open() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <?php get_sidebar(); ?>
    
    <?php //get_template_part( 'library/template-parts/content', 'close' ); ?>
    
<?php get_footer(); ?>