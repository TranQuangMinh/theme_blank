<?php get_header(); ?>
<?php
	$objCurrent = get_queried_object();
	$bannerCategory = get_field('banner', 'product_cat_' . $objCurrent->term_id);
?>
<?php do_action('open_body') ?>

	<div class="list-product layout-4">
		<div class="wrap-list">
			<div class="row">
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-3 col-sm-2 col">
						<?php include 'inc_template/item_content_list.php' ?>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="pagi_navigation"><?php wp_pagenavi(); ?></div>
		</div>
	</div>

<?php do_action('close_body') ?>

<?php get_footer() ?>