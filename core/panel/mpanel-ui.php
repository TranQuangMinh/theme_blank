<?php
function panel_options() {
	$categories_obj = get_categories('hide_empty=0');
	$categories = array();
	foreach ($categories_obj as $pn_cat) {
		$categories[$pn_cat->cat_ID] = $pn_cat->cat_name;
	}

	$tags_obj = get_tags('hide_empty=0');
	$tags = array();
	foreach ($tags_obj as $pn_cat) {
		$tags[$pn_cat->term_id] = $pn_cat->name;
	}

	$args = array(
			'sort_order' => 'desc',
			'sort_column' => 'id',
			'hierarchical' => 1,
			'exclude' => '',
			'include' => '',
			'meta_key' => '',
			'meta_value' => '',
			'authors' => '',
			'child_of' => 0,
			'parent' => -1,
			'exclude_tree' => '',
			'number' => '',
			'offset' => 0,
			'post_type' => 'page',
			'post_status' => 'publish'
		);
	$pages = get_pages($args);
	$optionsPage = array();
	foreach ($pages as $page) {
		$optionsPage[$page->ID] = $page->post_title;
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
			<li class="tie-tabs general"><a href="#tab_home"><span></span>Trang chủ</a></li>
			<li class="tie-tabs general"><a href="#tab_footer"><span></span>Footer</a></li>
			<li class="tie-tabs general"><a href="#tab_social"><span></span>Liên kết mạng xã hội</a></li>
			<li class="tie-tabs general"><a href="#tab_contact"><span></span>Thông tin Liên hệ</a></li>
		</ul>
		<div class="clear"></div>
		</div> <!-- .mo-panel-tabs -->
		
		
		<div class="mo-panel-content">
			<form action="/" name="tie_form" id="tie_form">

				<?php require_once('forms/_forms_tab_0.php'); ?>
				<?php require_once('forms/_forms_tab_home.php'); ?>
				<?php require_once('forms/_forms_tab_footer.php'); ?>
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