<?php get_header(); ?>
<?php do_action('open_body') ?>

<?php
	$objCurrent = get_queried_object();
	$template = get_field('template', 'category_' . $objCurrent->term_id) != '' ? get_field('template', 'category_' . $objCurrent->term_id) : 'default';
	include PATH_THEME . '/inc_template/archive-'. $template .'.php';
?>

<?php do_action('close_body') ?>
<?php get_footer(); ?>