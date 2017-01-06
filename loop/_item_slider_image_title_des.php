<div class="item">
    <a href="<?php the_permalink() ?>">
        <div class="thumbnail"><?php the_post_thumbnail() ?></div>
        <div class="summary">
            <span class="title"><?php the_title(); ?></span>
            <div class="meta">
                <span><span class="fa fa-clock-o"></span> <?php echo get_the_date() ?></span>
                <span><span class="fa fa-user"></span> <?php echo get_the_author() ?></span>
            </div>
            <div class="cont">
                <?php echo helper::niceWordsByChars(get_the_content(), 200); ?>
            </div>
        </div>
    </a>
</div>