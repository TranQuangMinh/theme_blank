<?php
	get_header();

	$pageAbout = get_post(tie_get_option('page_about'));
	$galleryAbout = get_field('gallery', $pageAbout->ID);

	$categoryPromotion = get_category(tie_get_option('category_promotion'));
	$the_query_promotion = new WP_Query( array(
		'posts_per_page' => 12,
		'cat' => $categoryPromotion->term_id
	) );

	$categoryNews = get_category(tie_get_option('category_news'));
	$the_query_news = new WP_Query( array(
		'posts_per_page' => 12,
		'cat' => $categoryNews->term_id
	) );

	$categoryCustomer = get_category(tie_get_option('category_custom'));
	$the_query_customer = new WP_Query( array(
		'posts_per_page' => 12,
		'cat' => $categoryCustomer->term_id
	) ); 

	$serviceAll = 2;
	$the_query_all = new WP_Query( array(
		'cat' => $serviceAll
	) );
?>

<div class="slider-home">
	<?php echo do_shortcode("[rev_slider alias='". tie_get_option('slider_home') ."']"); ?>
</div>

<div class="section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="title-style1"><?php echo $pageAbout->post_title; ?></div>
				<div class="entry-body">
					<?php echo get_field('description', $pageAbout->ID) ; ?>
					<div class="text-right">
						<a class="text-pink" href=""><i>Xem thêm <span class="fa fa-angle-right"></span></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="slider-galleries ">
					<ul class="wrap list-unstyled owl-carousel">
						<?php
							foreach ($galleryAbout as $item) {
								echo '<li><img src="'. $item['sizes']['medium'] .'" alt=""></li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php /*
<div class="section section-title text-center">
	<span class="text">Sứ mệnh & Cam kết</span>
</div>
<div class="section section-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<h3 class="title-style1">Sứ mệnh</h3>
					<div class="wysiwyg"><?php echo nl2br(get_option('su_menh')) ?></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3 class="title-style1">Cam kết</h3>
					<div class="wysiwyg"><?php echo nl2br(get_option('cam_ket')) ?></div>
				</div>
			</div>
		</div>
	</div>
</div>
*/?>
<div class="container">
	<?php echo do_shortcode( '[service_popular]' ); ?>
</div>

<div class="section section-title text-center">
	<span class="text">Tất cả dịch vụ</span>
</div>

<div class="section section-service-full">
	<div class="container">
		<div class="slider">
			<div class="wrap owl-carousel listing-style1">
				<?php
				if ( $the_query_all->have_posts() ) {
					while ( $the_query_all->have_posts() ) {
						$the_query_all->the_post();
						include "loop/_item_slider_image_title.php";
					}
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>

<div class="section section-news section-promotion">
	<div class="container">
		<div class="text-center">
			<h3 class="title-style2"><?php echo $categoryPromotion->name ?></h3>
			<div class="des-block m-b-15"><?php echo $categoryPromotion->description ?></div>
			<div class="wrap-post">
				<div class="listing listing-style2 m-t-25">
					<div class="row">
						<?php
						if ( $the_query_promotion->have_posts() ) {
							while ( $the_query_promotion->have_posts() ) {
								$the_query_promotion->the_post();
								echo '<div class="col-sm-4">';
									include "loop/_item_slider_image_title.php";
								echo '</div>';
							}
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php /*
<div class="section section-news n-p-b">
	<div class="container">
		<div class="text-center">
			<h3 class="title-style2"><?php echo $categoryNews->name ?></h3>
			<div class="des-block m-b-30"><?php echo $categoryNews->description ?></div>
			<div class="wrap-post">
				<div class="listing-style3">
					<div class="row">
						<?php
						if ( $the_query_news->have_posts() ) {
							while ( $the_query_news->have_posts() ) {
								$the_query_news->the_post();
								echo '<div class="col-md-6 col">';
									include "loop/_item_slider_image_title_des.php";
								echo '</div>';
							}
						}
						wp_reset_postdata();
						?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-news">
	<div class="container">
		<div class="text-center">
			<h3 class="title-style2"><?php echo $categoryCustomer->name ?></h3>
			<div class="wrap-post slider-customer">
				<div class="listing listing-style4 owl-carousel">
					<?php
					if ( $the_query_customer->have_posts() ) {
						while ( $the_query_customer->have_posts() ) {
							$the_query_customer->the_post();
							include "loop/_item_slider_customer.php";
						}
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</div>
*/ ?>
<?php get_footer() ?>
