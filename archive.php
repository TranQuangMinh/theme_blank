<?php
get_header();

$term = get_queried_object();
$template = 'news';
if (get_field('template', $term->taxonomy . '_' . $term->term_id)) {
	$template = get_field('template', $term->taxonomy . '_' . $term->term_id);
}
?>
<div class="body-page">
	<div class="section-news">
		<div class="container">
			<?php echo do_shortcode( '[service_popular]' ); ?>
			<div class="">
				<h1 class="title-style2 text-center"><?php single_term_title() ?></h1>
				<div class="des-block m-b-15"><?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?></div>
				<div class="wrap-post">
					<?php
					include 'layout_archive/_'. $template .'.php';
					?>
				</div>

				<div class="pagination">
					<?php
						echo template::pagination();
					?>
				</div>
			</div>
		</div>
	</div>

</div>
<?php get_footer() ?>
