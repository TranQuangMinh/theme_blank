<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="overlay-menu btn"></div> 
	<div class="header-site">
		<div class="container">
			<div class="block-languge">
				<a class="active" href="">ENG</a> /
				<a href="http://vi.lilya.vaydepsaigon.com">VIE</a>
			</div>
			
			<div class="block-cart">
				<form action="" class="form-search">
					<button type="submit"></button>
					<input type="text" name="s">
					<input type="hidden" name="post_type" value="product">
				</form>
			</div>

			<div class="logo text-center"   >
				<a title="<?php echo bloginfo('name') ?>" href="<?php echo bloginfo('url') ?>">
					<img class="big"  src="<?php echo tie_get_option('logo_header')?>" alt="">
					<img class="small" src="<?php echo tie_get_option('logo_header_small')?>" alt="">
				</a>
			</div>
		</div>
		
		<a href="" class="btn btn-menu visible-xs visible-sm"></a>


		<div class="menu-mega">
			<div class="container">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary'
				));
				?>
			</div>
			<style>
				.mega-menu > .sub-menu{
					background-image: url(<?php echo tie_get_option('bg-menu') ?>);
				}
			</style>
		</div>
	</div>
