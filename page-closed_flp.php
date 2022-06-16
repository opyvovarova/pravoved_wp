<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pravoved
 */
get_header('second');
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'closed_flp' );
    endwhile; // End of the loop.
get_footer('second');