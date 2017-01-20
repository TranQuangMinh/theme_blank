<div class="item">
    <a href="<?php the_permalink() ?>">
        <div class="wrap-th">
        	<div data-ratio="<?php echo isset($ratioResize) ? $ratioResize : '' ?>" class="thumbnail <?php echo isset($classThumbnail) ? $classThumbnail : '' ?>"><?php the_post_thumbnail() ?></div>
        </div>
        <?php if (!isset($hiddenTitle) || $hiddenTitle != true): ?>
        	<div class="wrap-title">
        		<span class="title"><?php the_title(); ?></span>
        	</div>
    	<?php endif; ?>
    </a>
</div>