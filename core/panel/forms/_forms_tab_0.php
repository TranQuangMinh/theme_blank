<div id="tab0" class="tabs-wrap">
	<h2>Tổng quan</h2> <?php echo $save ?>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  "name" => "Logo",
				"id" => "logo_header",
				"type" => "upload")
			);
			tie_options(
				array(  "name" => "Logo Mobile",
				"id" => "logo_header_mobile",
				"type" => "upload")
			);
		?>
	</div>
</div>