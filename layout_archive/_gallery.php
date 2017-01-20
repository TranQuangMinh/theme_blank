<div class="listing listing-style1 m-t-25 layout_gallery">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				echo '<div class="col-sm-4 col-md-3 col-xs-6 col">';
				$classThumbnail = 'resize-frame';
				include get_template_directory() . '/loop/_item_gallery.php';
				echo '</div>';
			}
		}
		?>
	</div>
</div>