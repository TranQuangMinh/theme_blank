<?php
/*
 * Template Name: AboutUs
 */
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
	<div class="page-about">
		<div class="thumbnail-img">
			<?php the_post_thumbnail( 'full' ) ?>
		</div>

		<div class="content-wysiwyg"><?php the_content() ?></div>

	</div>

	<div class="our-story text-center">
		<div class="page-about">
			<h3 class="title title-style1"><?php echo get_field( 'our_story' ) ?></h3>
			<div class="entry"><?php echo get_field( 'content_our_story' ) ?></div>
		</div>
	</div>

	<div class="page-about">
		<div class="who-are-you">
			<h3 class="title title-style1"><?php echo get_field( 'our_story' ) ?></h3>
			<div class="list-users">
				<div class="entry">
					<div class="row">
						<?php if( have_rows('users') ):  ?>
							<?php while ( have_rows('users') ) : the_row(); ?>
								<div class="item col-sm-4 text-center">
									<div class="avatar"><img src="<?php echo get_sub_field('avatar')['url'] ?>" alt=""></div>
									<div class="username"><?php echo the_sub_field('name') ?></div>
									<div class="job"><?php echo the_sub_field('job') ?></div>
									<div class="des"><?php echo the_sub_field('description') ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>