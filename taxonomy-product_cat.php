<?php get_header(); ?>
<?php
	$objCurrent = get_queried_object();
	$bannerCategory = get_field('banner', 'product_cat_' . $objCurrent->term_id);
?>
<?php do_action('open_body') ?>

	<?php
		include 'inc_template/filter_product.php';

		if ($bannerCategory)
			echo '<div class="banner-category"><img src="'. $bannerCategory['url'] .'" alt="'. $objCurrent->name .'" class="banner-img"></div>';
	?>

	<div class="list-product layout-4">
		<div class="wrap-list">
			<div class="row" id="reciever-listing">
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-3 col-sm-2 col">
						<?php include 'inc_template/item_content_list.php' ?>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="page_navigation_ajax none-masonry">
				<?php
				the_posts_pagination( array(
					'next_text'          => __( 'Load more', 'twentyfifteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
				) );
				?>
			</div>
		</div>
	</div>

<?php do_action('close_body') ?>

<?php get_footer() ?>