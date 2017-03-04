<?php
get_header(); ?>
<?php do_action('open_body') ?>

<?php
while (have_posts()) : the_post();
	$currentPageId = get_the_ID();
	$tags = wp_get_post_terms(get_the_ID() , 'post_tag');
	if (isset($tags[0])) {
		$tag = $tags[0];
	} else {
		$tag = false;
	}

	if ($tag) {
		$lists = new WP_Query(array(
			'post_type' => 'page',
			'order' => 'ASC',
			'orderby' => 'menu_order',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'post_tag',
					'field' => 'id',
					'terms' => $tag->term_id
				)
			)
		));
		include PATH_THEME . '/inc_template/page_has_tag.php';
	} else {
		include PATH_THEME . '/inc_template/page_no_tag.php';
	}
	?>


<?php endwhile; ?>
<?php do_action('close_body') ?>
<?php get_footer(); ?>