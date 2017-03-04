<div class="row">
	<div class="col-md-3 sidebar-fix">
		<div class="single-left">
			<?php
			$current = $objCurrent;
			include PATH_THEME . "/inc_template/sidebar_left_archive.php";
			unset($current);
			?>
		</div>
	</div>
	<div class="col-md-9 primary-fix">
		<div class="content-wysiwyg">
			<div class="list-news list-masonry">
				<div class="wrap" id="reciever-listing">
					<?php while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink() ?>" class="item">
								<span class="wrap-item">
									<span class="thumbnail"><?php the_post_thumbnail('post-thumbnail') ?></span>
									<div class="summary">
										<h4 class="title"><?php the_title() ?></h4>
										<div class="des"><?php echo helper::niceWordsByChars(get_the_content(), 80) ?></div>
										<span class="readmore">Read more</span>
									</div>
								</span>
						</a>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="page_navigation_ajax">
				<?php
				the_posts_pagination( array(
					'next_text'          => __( 'Load more', 'twentyfifteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
				) );
				?>
			</div>

		</div>
	</div>
</div>