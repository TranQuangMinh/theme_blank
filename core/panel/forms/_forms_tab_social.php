<div id="tab_social" class="tabs-wrap">
	<h2>Các liên kết</h2> <?php echo $save ?>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  
					"name" => "Facebook",
					"id" => "facebook_link",
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "instagram",
					"id" => "instagram_link",
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "Pinterest",
					"id" => "pinterest_link",
					"type" => "text"
				)
			);
		?>
	</div>
</div>