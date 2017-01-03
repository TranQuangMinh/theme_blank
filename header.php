<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="heaer-site">
		<div class="container">
			<div class="top-bar">
				<div class="row">
					<div class="col-md-3">
						<div class="logo"><a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo tie_get_option('logo_header') ?>" alt=""></a></div>
					</div>
					<div class="col-md-6">
						<div class="contact">
							<a href=""><span class="fa fa-phone"></span> <?php echo tie_get_option('contact_hotline') ?> </a>
							<a href=""><span class="fa fa-street-view"></span>  <?php echo tie_get_option('contact_address') ?> </a>
							<a href=""><span class="fa fa-envelope"></span> <?php echo tie_get_option('contact_email') ?> </a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="social">
							<a href="<?php echo tie_get_option('facebook_link') ?>"><span class="fa fa-facebook"></span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
