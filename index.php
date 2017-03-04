<?php
	get_header();
	$imgs = helper::getImageByFolder('slider-home');
	$tagFeature = get_term_by('slug', tie_get_option('home_tag'), 'product_tag');

	$productFeature = new WP_Query(array(
		'post_type' => 'product',
		'posts_per_page' => 16,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_tag',
				'field' => 'slug',
				'terms' => $tagFeature->slug
			)
		)
	));
?>

<div class="slider-home">
	<div id="slider" class="nivoSlider">
		<?php foreach ($imgs as $item) : ?>
			<?php if ($item['attributes']['link'] !== '') : ?>
				<a href="<?php echo $item['attributes']['link'] ?>">
					<img src="<?php echo $item['full_image'] ?>"/>
				</a>
			<?php else : ?>
				<img src="<?php echo $item['full_image'] ?>"/>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<script type="text/javascript">
		$ = jQuery;
		$(window).on('load', function() {
			$('#slider').nivoSlider({
				'effect': 'fade',
				'afterLoad': function () {
					var l = $('.nivo-controlNav').offset().left;
					$('.nivo-nextNav').css({
						'left': parseInt(l + $('.nivo-controlNav').outerWidth() + 15) + 'px'
					});
					$('.nivo-prevNav').css({
						'left': 'auto',
						'right': $(window).width() - l + 15 + 'px'
					});
				}
			});
		});
	</script>
</div>

<div class="block-special-home">
	<div class="container">
		<div class="wrap-block">
			<div class="row">
				<div class="col-md-8">
					<div class="item item1">
						<div class="entry">
							<div class="banner box-item first-box"><img src="<?php echo __(tie_get_option('special_banner_1')) ?>" alt=""></div>
							<div class="summary box-item">
								<span class="thumbnail-small">
									<span class="big"><?php echo __(tie_get_option('big_text_1')) ?></span>
									<span class="small"><?php echo htmlspecialchars_decode(tie_get_option('small_text_1')) ?></span>
								</span>
								<span class="content"><?php echo __(tie_get_option('special_des_1')) ?></span>
								<a href="<?php echo __(tie_get_option('special_link_1')) ?>" class="btn"><span class="icon1"></span><?php echo __(tie_get_option('special_button_1')) ?><span class="icon2"></span></a>
							</div>
						</div>
					</div>

					<div class="item item2">
						<div href="<?php echo __(tie_get_option('special_link_2')) ?>" class="entry">
							<div class="banner box-item"><img src="<?php echo __(tie_get_option('special_banner_2')) ?>" alt=""></div>
							<div class="summary box-item">
								<span class="thumbnail-small">
									<span class="big"><?php echo __(tie_get_option('big_text_2')) ?></span>
									<span class="small"><?php echo htmlspecialchars_decode(tie_get_option('small_text_2')) ?></span>
								</span>
								<span class="content"><?php echo __(tie_get_option('special_des_2')) ?></span>
								<a href="<?php echo __(tie_get_option('special_link_2')) ?>" class="btn"><span class="icon1"></span><?php echo __(tie_get_option('special_button_2')) ?><span class="icon2"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item item3">
						<div href="<?php echo __(tie_get_option('special_link_3')) ?>" class="entry">
							<div class="banner box-item"><img src="<?php echo __(tie_get_option('special_banner_3')) ?>" alt=""></div>
							<div class="summary box-item">
								<span class="thumbnail-small">
									<span class="big"><?php echo __(tie_get_option('big_text_3')) ?></span>
									<span class="small"><?php echo htmlspecialchars_decode(tie_get_option('small_text_3')) ?></span>
								</span>
								<span class="content"><?php echo __(tie_get_option('special_des_3')) ?></span>
								<a href="<?php echo __(tie_get_option('special_link_3')) ?>" class="btn"><span class="icon1"></span><?php echo __(tie_get_option('special_button_3')) ?><span class="icon2"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$ = jQuery;
		$(document).ready(function () {
			var w = $('.item1').width() / 2;
			$('.box-item').outerWidth(w).outerHeight(w);
		});
	</script>
</div>

<?php if ($tagFeature) : ?>
	<div class="block-feature">
		<div class="container">
			<div class="header-line">
				<span class="text"><?php echo __($tagFeature->name) ?></span>
			</div>
			<div class="des-header text-center">
				<?php echo __($tagFeature->description) ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
	$productSliders = $productFeature;
	$idSlider = 'home_slider';
	$linkMore = get_term_link($tagFeature, 'product_tag');
	include 'inc_template/slider_owl.php' ;
	unset($idSlider);
	unset($productSliders);
?>

<?php get_footer() ?>
