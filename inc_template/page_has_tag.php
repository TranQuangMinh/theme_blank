<div class="row">
	<div class="col-md-4">
		<div class="single-left">
			<div class="list-sub-cate">
				<ul class="">
					<li class="title-main"><h3
							class="title-term"><?php echo $tag->name ?></h3></li>
					<?php while ($lists->have_posts()) : $lists->the_post(); ?>
						<li><a class="<?php echo get_the_ID() == $currentPageId ? 'current-item' : '' ?>"
						       href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="content-wysiwyg">
			<div class="single-post-page">
				<div class="entry ">
					<h1 class="title-post"><?php the_title() ?></h1>
					<div>
						<?php the_content() ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
