<div class="heaer-site">
	<div class="container">
		<div class="top-bar">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo get_bloginfo('url') ?>">
							<img src="<?php echo tie_get_option('logo_header') ?>" alt=""> <br>
							<span class="text">Mặt Hoa Da Phấn</span>
						</a>
					</div>
				</div>
				<div class="col-md-7">
					<div class="contact">
						<a href=""><span class="fa fa-phone"></span> <?php echo tie_get_option('contact_hotline') ?> </a>
						<a href=""><span class="fa fa-street-view"></span>  <?php echo tie_get_option('contact_address') ?> </a>
						<a href=""><span class="fa fa-envelope"></span> <?php echo tie_get_option('contact_email') ?> </a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="social">
						<a href="<?php echo tie_get_option('facebook_link') ?>"><span class="fa fa-facebook"></span></a>
					</div>
				</div>
			</div>
			
		</div>
		<div class="main-menu">
			<div class="wrap-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
					) );
				?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>