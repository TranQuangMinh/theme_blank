<div id="tab0" class="tabs-wrap">
	<h2>Tổng quan</h2> <?php echo $save ?>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  "name" => "Logo",
				"id" => "logo_header",
				"type" => "upload")
			);
		?>
		<?php
			tie_options(
				array(  "name" => "Logo nhỏ",
				"id" => "logo_header_small",
				"type" => "upload")
			);
		?>
	</div>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  "name" => "Hình nền Menu",
				"id" => "bg-menu",
				"type" => "upload")
			);
		?>
	</div>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  "name" => "Shortcode slider Home",
				"id" => "slideHome",
				"type" => "text")
			);
		?>
	</div>
</div>