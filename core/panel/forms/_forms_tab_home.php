<div id="tab_home" class="tabs-wrap">
	<h2>Các thông tin liên hệ</h2> <?php echo $save ?>
	<div class="tiepanel-item">
		<?php
			tie_options(
				array(  
					"name" => "Alias slider",
					"id" => "slider_home",
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "Page giới thiệu",
					"id" => "page_about",
					"type" => "select",
					"options" => $optionsPage
				)
			);
			tie_options(
				array(
					"name" => "Chuyên mục khuyến mãi",
					"id" => "category_promotion",
					"type" => "select",
					"options" => $categories
				)
			);
			tie_options(
				array(
					"name" => "Chuyên mục góc làm đẹp",
					"id" => "category_news",
					"type" => "select",
					"options" => $categories
				)
			);
			tie_options(
				array(
					"name" => "Chuyên mục Khách hàng",
					"id" => "category_custom",
					"type" => "select",
					"options" => $categories
				)
			);
			tie_options(
				array(
					"name" => "Tag dịch vụ phổ biến",
					"id" => "tag_service_popular",
					"type" => "select",
					"options" => $tags
				)
			);
		?>
	</div>
</div>