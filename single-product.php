<?php get_header(); ?>

	<?php do_action('open_body') ?>
		<?php while (have_posts()): the_post(); ?>
		<?php
			$colors = get_the_terms(
				get_the_ID(),
				'product_color'
			);
		?>
		<div class="row">
			<div class="col-md-4" id="sidebar-single-product">
				<div class="single-left">
					<h1 class="title">
						<?php the_title() ?>
					</h1>
					<div class="price-block">
						<?php if (get_field('price_old') > 0) : ?>
							<div class="price-old"><?php echo helper::numberFormat(get_field('price_old')) ?> VND</div>
						<?php endif; ?>

						<?php if (get_field('price') > 0) : ?>
							<div class="price  <?php echo get_field('price_old') > 0 ? 'has-sale' : ''  ?>"><?php echo helper::numberFormat(get_field('price')) ?> VND</div>
						<?php endif; ?>
					</div>

					<div class="wysiwyg item-block">
						<h3 class="title-block-content">Description</h3>
						<div class="entry">
							<?php echo get_field('description') ?>
						</div>
					</div>
					<div class="wysiwyg item-block">
						<h3 class="title-block-content">Materials</h3>
						<div class="entry">
							<?php echo get_field('materials') ?>
						</div>
					</div>
					<div class="wysiwyg item-block">
						<h3 class="title-block-content">Colors</h3>
						<div class="entry">
							<?php
							foreach ($colors as $color)  {
								echo '<span class="item-color" style="background-color: '. $color->name .'">'. $color->name .'</span>';
							} ?>
						</div>
					</div>

					<a href="" class="add-to-wish">Add to wishlist</a>
					
					<div class="social text-center m-t-30">
						<a href="<?php echo tie_get_option('facebook_link') ?>" class="link-share share-fb">
							<img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/fb.png" alt="">
						</a>
						<a href="<?php echo tie_get_option('instagram_link') ?>" class="link-share share-fb">
							<img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/in.png" alt="">
						</a>
						<a href="<?php echo tie_get_option('pinterest_link') ?>" class="link-share share-fb">
							<img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/pin.png" alt="">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-8" id="primary-product">
				<div class="content-wysiwyg">
					<?php the_content() ?>
				</div>
			</div>
		</div>
        <?php endwhile; ?>


		<div class="block-related">
			<div class="header-related"><span class="text">Related</span></div>
			<?php
			$productCats = get_the_terms(
				get_the_ID(),
				'product_cat'
			);

			$cats = array(
				'relation' => 'OR'
			);
			foreach ($productCats as $cat) {
				$cats[] = array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => $cat->slug
				);
			}

			$productSliders = new WP_Query(array(
				'tax_query' => $cats,
				'post_type' => 'product',
				'post__not_in' => [get_the_ID()],
				'posts_per_page' => 8
			));
			$idSlider = 'related_slider';
			$offLink = '1';
			include 'inc_template/slider_owl.php' ;
			unset($offLink);
			unset($idSlider);
			unset($productSliders);
			?>
		</div>
	<?php do_action('close_body') ?>
<?php get_footer() ?>
