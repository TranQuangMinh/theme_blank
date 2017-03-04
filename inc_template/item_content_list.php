<?php $_id = uniqid(); ?>
<a id="id_<?php echo $_id ?>" href="<?php the_permalink() ?>" class="item">
	<div id="idth_<?php echo $_id ?>" class="thumbnail th-fix">
		<?php the_post_thumbnail() ?>

		<?php if (get_field('arrival')) : ?>
			<span class="arrival"><?php echo get_field('arrival') ?></span>
		<?php endif; ?>
	</div>
	<div class="summary">
		<h5 class="title"><?php the_title() ?></h5>
		<div class="price-block">
			<?php if (get_field('price_old') > 0) : ?>
				<div class="price-old"><?php echo helper::numberFormat(get_field('price_old')) ?></div>
			<?php endif; ?>

			<?php if (get_field('price') > 0) : ?>
				<div class="price  <?php echo get_field('price_old') > 0 ? 'has-sale' : ''  ?>"><?php echo helper::numberFormat(get_field('price')) ?></div>
			<?php endif; ?>
		</div>

		<?php if (get_field('price_old') > 0) : ?>
			<div class="flash-sale">- SALE <?php echo 100 - number_format(get_field('price') / ( get_field('price_old') / 100 ))  ?>% -</div>
		<?php endif; ?>
	</div>
	<script>
		$ = jQuery;
		$(document).ready(function () {
			$("#idth_<?php echo $_id ?>").height( $("#idth_<?php echo $_id ?>").width() * 1.333 )
		});
	</script>
</a>
