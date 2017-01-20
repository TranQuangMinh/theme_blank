<?php
/* Template Name: Bảng giá */

	get_header();
?>
<?php if ( have_posts() ) : ?>
<div class="body-page container">
	<div class="block-service-popular"><?php echo do_shortcode( '[service_popular]' ); ?></div>
	<div class="section section-about n-p-t">
		<div class="">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="title-post"><?php echo get_the_title(); ?></h1>
				<div class="wysiwyg-content pricelist">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php endif; ?>
<?php get_footer() ?>
