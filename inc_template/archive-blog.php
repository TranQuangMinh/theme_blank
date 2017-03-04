<div class="content-wysiwyg">
	<div class="list-blog">
		<div class="wrap" id="reciever-listing">
			<?php while (have_posts()) : the_post(); ?>
				<div class="item">
					<div class="banner">
						<div class="frame-square">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>

					<div class="summary">
						<div class="entry">
							<?php $category  = get_the_category()[0]; ?>
							<a href="<?php echo get_term_link($category, 'category') ?>" class="category"><?php echo $category->name ?></a>
							<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="title-post"><?php the_title() ?></a>
							<div class="des"><?php echo helper::niceWordsByChars(get_the_content(), 80) ?></div>
							<div class="link">
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="morelink">Read more</a>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="page_navigation_ajax none-masonry">
		<?php
		the_posts_pagination( array(
			'next_text'          => __( 'Load more', 'twentyfifteen' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
		) );
		?>
	</div>

</div>