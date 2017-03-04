<div id="tab_home" class="tabs-wrap">
	<h2>Trang chủ</h2> <?php echo $save ?>

	<div class="tiepanel-item">
		<?php
		tie_options(
			array(
				"name" => "Từ khóa hiển trị trang chủ",
				"id"   => "home_tag",
				"type" => "text"
			)
		);
		?>
	</div>

	<?php for ( $i = 1; $i <= 3; $i ++ ) : ?>
		<div class="tiepanel-item">
			<?php
			tie_options(
				array(
					"name" => "Banner " . $i,
					"id"   => "special_banner_" . $i,
					"type" => "upload"
				)
			);
			tie_options(
				array(
					"name" => "Tiêu đề lớn" . $i,
					"id"   => "big_text_" . $i,
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "Tiêu đề nhỏ" . $i,
					"id"   => "small_text_" . $i,
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "Liên kết" . $i,
					"id"   => "special_link_" . $i,
					"type" => "text"
				)
			);
			tie_options(
				array(
					"name" => "Mô tả" . $i,
					"id"   => "special_des_" . $i,
					"type" => "textarea"
				)
			);
			tie_options(
				array(
					"name" => "Nút" . $i,
					"id"   => "special_button_" . $i,
					"type" => "text"
				)
			);
			?>
		</div>
	<?php endfor; ?>
</div>