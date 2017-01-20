<?php 

	function servicePopular() {
		$servicePopular = get_tag(tie_get_option('tag_service_popular'));
		$the_query_tag = new WP_Query( array(
			'posts_per_page' => 12,
			'tag_id' => $servicePopular->term_id
		) );
		ob_start();
?>
			<div class="section section-service">
				<div class="">
					<div class="relative">
						<div class="block-intro">
							<h3 class="title-style1 icon-w">Các <?php echo $servicePopular->name  ?></h3>
							<div class="content"><?php echo nl2br($servicePopular->description) ?></div>
						</div>

						<div class="slider-product">
							<div class="wrap-slider listing-style1">
								<div class="wrap-inner owl-carousel">
									<?php
									if ( $the_query_tag->have_posts() ) {
										while ( $the_query_tag->have_posts() ) {
											$the_query_tag->the_post();
											$hiddenTitle = true;
											include  get_template_directory() . "/loop/_item_slider_image_title.php";
										}
									}
									unset($hiddenTitle);
									wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
<?php 
	return ob_get_clean();
} 

add_shortcode('service_popular', 'servicePopular');

?>