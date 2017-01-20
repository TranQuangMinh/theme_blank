<div class="item">
    <a href="<?php the_permalink() ?>">
        <div data-ratio="<?php echo isset($ratioResize) ? $ratioResize : '' ?>" class="thumbnail <?php echo isset($classThumbnail) ? $classThumbnail : '' ?>"><?php the_post_thumbnail() ?></div>
        <?php if (!isset($hiddenTitle) || $hiddenTitle != true): ?>
        	<span class="title"><?php the_title(); ?></span>
    	<?php endif; ?>

	    <?php if (isset($showPrice) && $showPrice == 1): ?>
        	<span class="price"><?php echo get_field('price') ?></span>
    	<?php endif; ?>
    </a>
</div>