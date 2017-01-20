<?php
	get_header();
?>
<?php if ( have_posts() ) : ?>
<div class="body-page container">
	<div class="section section-about">
		<div class="">
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
				<hr>
				<div class="wysiwyg-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php endif; ?>
<?php get_footer() ?>
