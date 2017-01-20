<div class="item">
    <div data-ratio="<?php echo isset($ratioResize) ? $ratioResize : '' ?>" class="thumbnail <?php echo isset($classThumbnail) ? $classThumbnail : '' ?>"><?php the_post_thumbnail() ?></div>
    <div class="summary">
        <div class="cont">
            <?php echo helper::niceWordsByChars(get_the_content(), 200); ?>
        </div>
        <span class="title"><?php the_title(); ?></span>
    </div>
</div>