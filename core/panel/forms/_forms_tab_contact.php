<div id="tab_contact" class="tabs-wrap">
	<h2>Các thông tin liên hệ</h2> <?php echo $save ?>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  
					"name" => "Hotline",
					"id" => "contact_hotline",
					"type" => "text"
				)
			);
			tie_options(
				array(  
					"name" => "Địa chỉ",
					"id" => "contact_address",
					"type" => "text"
				)
			);
			tie_options(
				array(  
					"name" => "Email",
					"id" => "contact_email",
					"type" => "text"
				)
			);
		?>
	</div>
</div>