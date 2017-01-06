<div class="header-site-mobile">

	<div class="logo">
		<a href="<?php echo get_bloginfo('url') ?>">
			<img src="<?php echo tie_get_option('logo_header_mobile') ?>" alt=""> <br>
			
		</a>
	</div>
	<span class="text">Mặt Hoa Da Phấn</span>

	<a href="" class="btn btn-menu"></a>
</div>

<div class="main-menu-mobile">
	<div class="header-menu btn">Đóng lại</div>
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