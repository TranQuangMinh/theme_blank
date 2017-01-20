<div class="item">
    <a href="<?php the_permalink() ?>">
        <div data-ratio="<?php echo isset($ratioResize) ? $ratioResize : '' ?>" class="thumbnail <?php echo isset($classThumbnail) ? $classThumbnail : '' ?>"><?php the_post_thumbnail() ?></div>
        <div class="summary">
            <span class="title"><?php the_title(); ?></span>
            <div class="meta">
                <span><span class="fa fa-clock-o"></span> <?php echo get_the_date() ?></span>
            </div>
            <div class="cont">
                <?php echo helper::niceWordsByChars(get_the_content(), 200); ?>
            </div>
        </div>
    </a>
</div>