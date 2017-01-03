<?php
function panel_options() {
	$categories_obj = get_categories('hide_empty=0');
	$categories = array();
	foreach ($categories_obj as $pn_cat) {
		$categories[$pn_cat->cat_ID] = $pn_cat->cat_name;
	}
	
$save='
	<div class="mpanel-submit">
			<input type="hidden" name="action" value="test_theme_data_save" />
	<input type="hidden" name="security" value="'. wp_create_nonce("test-theme-data").'" />
			<input name="save" class="mpanel-save" type="submit" value="Save Changes" />
	</div>';
?>


<div id="save-alert"></div>
<div class="mo-panel">
	<div class="mo-panel-tabs">
		<div class="logo"></div>
		<ul>
			<li class="tie-tabs general"><a href="#tab0"><span></span>Tổng quan</a></li>
			<li class="tie-tabs general"><a href="#tab_social"><span></span>Liên kết mạng xã hội</a></li>
			<li class="tie-tabs general"><a href="#tab_contact"><span></span>Thông tin Liên hệ</a></li>
		</ul>
		<div class="clear"></div>
		</div> <!-- .mo-panel-tabs -->
		
		
		<div class="mo-panel-content">
			<form action="/" name="tie_form" id="tie_form">

				<?php require_once('forms/_forms_tab_0.php'); ?>
				<?php require_once('forms/_forms_tab_social.php'); ?>
				<?php require_once('forms/_forms_tab_contact.php'); ?>

				<div class="mo-footer">
					<?php echo $save; ?>
				</div>
				
			</form>

			<form method="post">
				<div class="mpanel-reset">
					<input type="hidden" name="resetnonce" value="<?php echo wp_create_nonce('reset-action-code'); ?>" />
					<input name="reset" class="mpanel-reset-button" type="submit" onClick="if(confirm('All settings will be rest .. Are you sure ?')) return true ; else return false; " value="Reset All Settings" />
					<input type="hidden" name="action" value="reset" />
				</div>
			</form>

		</div>

		<div class="clear"></div>
	</div>
<?php
}	
?>