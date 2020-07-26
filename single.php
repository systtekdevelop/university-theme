<?php
/**
 * The single template file
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

<?php 
    while(have_posts()) {
        
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        
    <?php }

?>

<?php get_footer(); ?>


