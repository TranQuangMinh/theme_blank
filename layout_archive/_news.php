<div class="listing listing-style3 m-t-25 layout_news">
	<div class="row">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				echo '<div class="col-sm-6 col">';
				$classThumbnail = 'resize-frame';
				include get_template_directory() . '/loop/_item_slider_image_title_des.php';
				echo '</div>';
			}
		}
		?>
	</div>
</div>