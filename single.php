<?php

get_header(); ?>
<?php do_action('open_body') ?>

<?php
	while (have_posts()) : the_post();
	$terms = wp_get_post_terms(get_the_ID() , 'category');
?>
	<div class="content-wysiwyg">
		<div class="single-post-news">
			<div class="thumbnail-main text-center"><?php the_post_thumbnail('full') ?></div>
			<div class="entry ">
				<div class="">
					<h1 class="title-post"><?php the_title() ?></h1>
					<div class="meta">
						<?php
						if (count($terms) > 0) {
							$links = [];
							foreach ($terms as $item)  {
								$links[] = '<a href="'. get_term_link($item, 'category') .'" title="'. $item->name .'">'. $item->name .'</a>';
							}
							echo implode(' - ', $links);
						} ?>
						<span class="text-date">, <?php echo get_the_date() ?></span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class=""><?php the_content() ?></div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="social text-center">
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
			<div class="clearfix"></div>
			<div class="single-pagination">
				<?php
				the_post_navigation( array(
					'prev_text'          => __( 'Older posts' ),
					'next_text'          => __( 'Newer posts' )
				) );
				?>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php do_action('close_body') ?>
<?php get_footer(); ?>