<?php
function minh_settings_page() {
	$save = '<div class="mpanel-submit">
					<input name="save" class="mpanel-save" type="submit" value="Save Changes" />
	</div>';
?>
<div class="mo-panel">
	<div class="mo-panel-tabs">
		<div class="logo"></div>
		<ul>
			<li class="tie-tabs panel_su_menh"><a href="#panel_su_menh"><span></span>Sứ mệnh</a></li>
			<li class="tie-tabs panel_cam_ket"><a href="#panel_cam_ket"><span></span>Cam kết</a></li>
			<li class="tie-tabs panel_dich_vu"><a href="#panel_dich_vu"><span></span>Các dịch vụ phổ biến</a></li>
		</ul>
		<div class="clear"></div>
	</div>
	<div class="mo-panel-content">
		<form method="post" action="options.php">
			<?php settings_fields( 'codex-settings-group' ); ?>
			
			<div id="panel_su_menh" class="tabs-wrap">
				<h2>Sứ mệnh</h2> <?php echo $save ?>
				<div class="tiepanel-item">
					<h3>Nội dung </h3>
					<div class="option-item">
						<?php 
							wp_editor( get_option('su_menh'), 'su_menh', array(
								'editor_height' => '400px'
							)) 
						?>
						<?php echo $save; ?>
					</div>
				</div>
			</div>
			
			<div id="panel_cam_ket" class="tabs-wrap">
				<h2>Cam kết</h2> <?php echo $save ?>
				<div class="tiepanel-item">
					<h3>Nội dung </h3>
					<div class="option-item">
						<?php 
							wp_editor( get_option('cam_ket'), 'cam_ket', array(
								'editor_height' => '400px'
							)) 
						?>
						<?php echo $save; ?>
					</div>
				</div>
			</div>
			
			<div id="panel_dich_vu" class="tabs-wrap">
				<h2>Các dịch vụ phổ biến</h2> <?php echo $save ?>
				<div class="tiepanel-item">
					<h3>Nội dung </h3>
					<div class="option-item">
						<?php 
							wp_editor( get_option('dich_vu'), 'dich_vu', array(
								'editor_height' => '400px'
							)) 
						?>
						<?php echo $save; ?>
					</div>
				</div>
			</div>

		</form>
	</div>
</div>
<?php } ?>