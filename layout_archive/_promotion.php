<div class="listing listing-style2 m-t-25 layout_promotion">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				echo '<div class="col-sm-4 col-xs-6 col">';
				$classThumbnail = 'resize-frame';
				include get_template_directory() . '/loop/_item_slider_image_title.php';
				echo '</div>';
			}
		}
		?>
	</div>
</div>