<?php
$parent = false;
$lists = get_terms( array(
	'taxonomy'   => $current->taxonomy,
	'parent'     => $current->term_id,
	'hide_empty' => false
) );

if ( ! $lists ) {
	$lists  = get_terms( array(
		'taxonomy'   => $current->taxonomy,
		'parent'     => $current->parent,
		'hide_empty' => false
	) );
	$parent = get_term_by( 'id', $current->parent, $current->taxonomy );
}
?>
<div class="list-sub-cate">
	<ul class="">
		<li class="title-main"><h1
				class="title-term"><?php echo isset( $parent ) && $parent ? $parent->name : $current->name ?></h1></li>

		<li class="">
			<?php $itemLink = isset( $parent ) && $parent ? $parent : $current;  ?>
			<a class="<?php echo $current->term_id == $itemLink->term_id ? 'current-item' : '' ?>"
			   href="<?php echo get_term_link( $itemLink, $itemLink->taxonomy ) ?>">
				All <?php echo $itemLink->name ?>
			</a>
		</li>

		<?php if ( count( $lists ) > 0 ) : ?>
			<?php foreach ( $lists as $item ) : ?>
				<li><a class="<?php echo $current->term_id == $item->term_id ? 'current-item' : '' ?>"
				       href="<?php echo get_term_link( $item, $item->taxonomy ) ?>"><?php echo $item->name ?></a></li>
			<?php endforeach; ?>
		<?php endif; ?>
	</ul>
</div>