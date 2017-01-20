<?php
	get_header();
?>
<?php if ( have_posts() ) : ?>
<div class="body-page container">
	<div class="section section-about">
		<div class="row">
			<div class="col-sm-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1 class="title-post"><?php echo get_the_title(); ?></h1>
					<div class="meta-post">
						<span><span class="fa fa-clock-o"></span> <?php echo get_the_date() ?></span>
						<?php if (get_field('price')) : ?>
							<span class="price">
								Giá: <span class="text-price"><?php echo get_field('price'); ?></span>
							</span>
						<?php endif; ?>
					</div>
					<div class="wysiwyg-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="col-sm-4">
				<div class="widget-block">
					<h3 class="title-widget title-style1">Tin liên quan</h3>
					<div class="content-widget">
						<div class="related-list">
							<?php
								$postRelated = get_field('related_link', get_the_ID());
								if (!$postRelated) {
									$postRelated = wp_get_post_categories(get_the_ID());
									$query_post_related = new WP_Query(array(
										'category__in' => $postRelated,
										'posts_per_page' => tie_get_option('limit_related'),
										'post__not_in' => array(get_the_ID())
									));
									$postRelated = $query_post_related->get_posts();
								}
								foreach ($postRelated as $key => $value) : ?>
								<div class="item">
									<div class="entry">
										<a href="<?php the_permalink($value->ID) ?>" class="thumbnail">
											<?php echo  get_the_post_thumbnail($value->ID); ?>
										</a>
										<div class="summary">
											<div class="wrap-summary">
												<a href="<?php the_permalink($value->ID) ?>" class="title">
												<?php echo $value->post_title; ?>
												<span class="text-read-more">Xem thêm</span>
											</a>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<?php endif; ?>
<?php get_footer() ?>
