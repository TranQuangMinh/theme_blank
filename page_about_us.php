<?php /* Template Name: Giới thiệu */ ?>

<?php
	get_header();
	$galleryAbout = get_field('gallery', get_the_ID());
?>
<div class="body-page container">
	<div class="section section-about">
		<div class="col-md-7">
			<h1 class="title-style1"><?php echo get_the_title(); ?></h1>
			<div class="entry-body">
				<?php echo get_field('description') ; ?>
			</div>
		</div>
		<div class="col-md-5">
			<div class="slider-galleries ">
				<ul class="wrap list-unstyled owl-carousel">
					<?php
					foreach ($galleryAbout as $item) {
						echo '<li><img src="'. $item['sizes']['medium'] .'" alt=""></li>';
					}
					?>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer() ?>
