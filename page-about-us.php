<?php
/*
 * Template Name: AboutUs
 */
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
    <div class="content-wysiwyg"><?php the_content() ?></div>
<?php endwhile; ?>
<?php get_footer(); ?>