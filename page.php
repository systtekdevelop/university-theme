<?php
/**
 * The main page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage University_Theme
 * @since University Theme 1.0
 * @version 1.0
 *
**/

?>

<?php get_header(); ?>

<?php while(have_posts() ): the_post(); ?>
        
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url( <?php echo get_theme_file_uri( '/images/ocean.jpg' ) ?> );"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title(); ?></h1>
                <div class="page-banner__intro">
                    <p>DON'T FORGET TO REPLACE ME LATER</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a href="<?php echo wp_get_post_parent_id( get_the_ID() ); ?>" class="metabox__blog-home-link"><i class="fa fa-home"></i>Back To <?php get_the_title(); ?></a><span class="metabox__main">Our History</span></p>
        </div>
        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>

        
<?php endwhile ?>

<?php get_footer(); ?>