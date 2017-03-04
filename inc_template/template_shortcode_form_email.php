<form action="<?php echo get_admin_url() ?>/admin-ajax.php?action=sendemail" class="form-sendemail" method="post">
	<div class="form-group">
		<input type="text" required class="form-control" id="" name="name" placeholder="* Name">
	</div>
	<div class="form-group">
		<input type="text" required class="form-control" id="" name="email" placeholder="* Email">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" id="" placeholder="Phone" name="phone">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" id="" placeholder="Subject" name="subject">
	</div>
	<div class="form-group">
		<textarea required name="" id="" cols="30" rows="10" class="form-control" name="content" placeholder="* Message"></textarea>
	</div>
	<p class="text-red"><b>* Required field</b></p>
	<div>
		<button type="submit" class="btn btn-send-mail">Send</button>
	</div>

	<input type="hidden" name="redirect_url" value="<?php echo $wporg_atts['url_redirect'] ?>">
	<input type="hidden" name="emailreceiver" value="<?php echo $wporg_atts['emailreceiver'] ?>">
</form>