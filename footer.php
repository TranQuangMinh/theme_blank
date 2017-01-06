<div class="footer-site">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="footer-col">
					<h3 class="title-col">Giới thiệu</h3>
					<div class="content-col">
						<?php echo nl2br(htmlspecialchars_decode(tie_get_option('footer_info'))) ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="footer-col">
					<h3 class="title-col">Danh mục</h3>
					<div class="content-col">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
						) );
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="footer-col">
					<h3 class="title-col">Thông tin liên hệ</h3>
					<div class="content-col">
						<?php echo nl2br(htmlspecialchars_decode(tie_get_option('footer_contact'))) ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="footer-col">
					<h3 class="title-col">Bản đồ</h3>
					<div class="">
						<?php echo nl2br(htmlspecialchars_decode(tie_get_option('footer_map'))) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<a href="" class="logo">
					<img src="<?php echo tie_get_option('logo_header') ?>" alt="">
					Mặt Hoa Da Phấn
				</a>
			</div>
			<div class="col-md-4 col-sm-7 text-center mobile-text-left tablet-text-left">
				<span class="text-copy">
					Copyright © 2016 Goha All rights reserved.
				</span>
			</div>
			<div class="col-md-4 text-right col-sm-5">
				<div class="social">
					<a href="<?php echo tie_get_option('facebook_link') ?>"><span class="fa fa-facebook"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
