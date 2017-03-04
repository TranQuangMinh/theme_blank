<div class="footer-site">
	<div class="header-footer container">
		<a href="" onclick="backtotop(event)">
			<span class="fa fa-chevron-up"></span>
			Back to top
			<span class="fa fa-chevron-up"></span>
		</a>
	</div>

	<div class="">
		<div class="footer-cols text-center">
			<div class="row">

				<div class="col-md-4 item col-md-push-4">
					<form action="" class="newsletter">
						<h4 class="title">Join our newsletter</h4>
						<p class="des">And receive 10% off you next order</p>
						<div class="group-input">
							<input type="text" placeholder="Enter your email">
							<button type="submit">Submit</button>
						</div>
					</form>
				</div>

				<div class="col-md-4 item col-md-pull-4">
					<h4 class="title">Support</h4>
					<div class="entry">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_left'
						) );
						?>
					</div>
				</div>

				<div class="col-md-4 item">
					<h4 class="title">Company</h4>
					<div class="entry">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_right'
						) );
						?>
						<p class="social">
							<a href="<?php echo tie_get_option('facebook_link') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/fb-g.png" alt=""></a>
							<a href="<?php echo tie_get_option('instagram_link') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/in-g.png" alt=""></a>
							<a href="<?php echo tie_get_option('pinterest_link') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/desktop/img/pin-g.png" alt=""></a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright text-center"> Ⓒ 2017 Lilya. All rights reserved</div>
	</div>
</div>


<?php wp_footer(); ?>
<div id="fb-root"></div>

<script>
	// Setting FB
	var FB;
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1141269002637416',
			xfbml      : true,
			version    : 'v2.8'
		});
		FB.AppEvents.logPageView();
	};

	(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1141269002637416";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	function shareFb(event, url) {
		event.preventDefault();
		FB.ui({
			method: 'share',
			href: url,
		}, function(response){

		});
	}

	$ = jQuery;
	$(document).ready(function () {

	});




	function backtotop(event) {
		event.preventDefault();
		$('body, html').animate({
			scrollTop: 0
		}, 800);
	}
</script>
</body>
</html>
