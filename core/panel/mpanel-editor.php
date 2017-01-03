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
				<li class="tie-tabs info"><a href="#info"><span></span>Nội dung footer</a></li>
			</ul>
			<div class="clear"></div>
		</div> <!-- .mo-panel-tabs -->
		<div class="mo-panel-content"> 
			<form method="post" action="options.php">
			    <?php settings_fields( 'codex-settings-group' ); ?>

			   <div id="info" class="tabs-wrap"> 
			   <h2>Nội dung chỉnh sửa bằng editor</h2> <?php echo $save ?> 
                    <div class="tiepanel-item">
   						<h3>Nội dung </h3>
   						<div class="option-item">
   							<?php if ( function_exists( 'wp_editor' ) ): ?>
   					    		<?php wp_editor( get_option('texteditor'), 'texteditor' ) ?>	
   					        	<?php else: ?>
   					        		<textarea rows="10" cols="60" id="texteditor" name="texteditor"><?php echo get_option('texteditor'); ?></textarea>
   					        	<?php endif; ?>
   							<?php echo $save; ?>
   						</div>
   					</div><!-- end one item --> 
				</div>

			</form>
		</div><!-- .mo-panel-tabs -->
</div>
<?php }
?>
