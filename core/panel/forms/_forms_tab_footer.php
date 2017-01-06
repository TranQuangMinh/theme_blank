<div id="tab_footer" class="tabs-wrap">
	<h2>Các thông tin Footer</h2> <?php echo $save ?>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  
					"name" => "Giới thiệu",
					"id" => "footer_info",
					"type" => "textarea"
				)
			);
			tie_options(
				array(
					"name" => "Địa chỉ liên hệ",
					"id" => "footer_contact",
					"type" => "textarea"
				)
			);
			tie_options(
				array(
					"name" => "Mã nhúng google Map",
					"id" => "footer_map",
					"type" => "textarea"
				)
			);
		?>
	</div>
</div>