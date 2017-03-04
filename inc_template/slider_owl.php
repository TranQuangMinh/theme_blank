<?php if ($productSliders->have_posts()) :  ?>
	<div class="block-product-feature">
		<div class="container">
			<div class="wrap-padding">
				<div class="entry-list owl-carousel owl-theme" id="<?php echo $idSlider ?>">
					<?php while ($productSliders->have_posts()): $productSliders->the_post(); ?>
						<?php include 'item_content_list.php' ?>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>

			<?php if (isset($linkMore) && $linkMore !== '') : ?>
				<div class="readmore-link">
					<a href="<?php echo @$linkMore ?>" class="btn"><?php echo __('View all') ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<script>
		$ = jQuery;
		$(document).ready(function () {
			$('.block-product-feature').find('#<?php echo $idSlider ?>').owlCarousel({
				responsive: {
					0: { items: 1},
					768: { items: 2},
					1000: { items: 4}
				},
				nav: true,

				onInitialized: function (event) {
					$(event.target).find('.thumbnail').each(function(index, el){
						$(el).height( $(el).width() * 1.333 )
					});
				}
			});
		});
	</script>
<?php endif; ?>