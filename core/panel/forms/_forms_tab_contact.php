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
			tie_options(
				array(
					"name" => "Email nhận liên hệ",
					"id" => "contact_email_receive",
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "Trang cảm ơn",
					"id" => "page_thank",
					"type" => "select",
					"options" => $optionsPage
				)
			);
			tie_options(
				array(
					"name" => "Chuyên mục cho phép book",
					"id" => "service",
					"type" => "select",
					"options" => $categories
				)
			);
		?>
	</div>
</div>