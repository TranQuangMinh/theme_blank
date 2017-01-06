<div class="item">
    <div class="thumbnail"><?php the_post_thumbnail() ?></div>
    <div class="summary">
        <div class="cont">
            <?php echo helper::niceWordsByChars(get_the_content(), 200); ?>
        </div>
        <span class="title"><?php the_title(); ?></span>
    </div>
</div>