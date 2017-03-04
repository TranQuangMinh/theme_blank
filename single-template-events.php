<?php
/*
 * Template Name: Events
 * Template Post Type: post
 */
get_header(); ?>
<?php do_action('open_body') ?>

<?php
while (have_posts()) : the_post();

$terms = wp_get_post_terms(get_the_ID() , 'category');
?>

	<div class="row">
		<div class="col-md-3 sidebar-fix">
			<div class="single-left">

				<?php
				if ($terms) {
					$current = $terms[0];
					include "inc_template/sidebar_left_archive.php";
					unset($current);
				}
				?>
			</div>
		</div>
		<div class="col-md-9 primary-fix">
			<div class="content-wysiwyg">
				<div class="single-post-event">
					<div class="thumbnail-main"><?php the_post_thumbnail('full') ?></div>
					<div class="entry row">
						<div class="left-content pull-left col-md-5">
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
							<div class="social text-center">
								<a href="" onclick="shareFb(event, '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>')" class="link-share share-fb">
									<img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/fb.png" alt="Chia sẻ qua Facebook">
								</a>
							</div>
						</div>
						<div class="right-content pull-right col-md-7"><?php the_content() ?></div>
						<div class="clearfix"></div>
					</div>
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
	</div>

<?php endwhile; ?>
<?php do_action('close_body') ?>
<?php get_footer(); ?>