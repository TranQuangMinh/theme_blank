<?php
/* Template Name: Liên hệ */

	get_header();
?>
<?php if ( have_posts() ) : ?>
<div class="body-page container">
	<div class="section section-contact>
		<div class="">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="title-post"><?php echo get_the_title(); ?></h1>
				<div class="wysiwyg-content contact-form">
					<?php the_content(); ?>
					<form action="<?php echo get_home_url() ?>/wp-admin/admin-ajax.php?action=send_email" class="m-t-15" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Tên *</label>
									<input name="name" required type="text" class="form-control" id="" placeholder="Nhập họ tên">
								</div>
								<div class="form-group">
									<label for="">Email *</label>
									<input required name="email" type="text" class="form-control" id="" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="">Số điện thoại *</label>
									<input name="phone" required type="text" class="form-control" id="" placeholder="Nhập số điện thoại">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Lời nhắn *</label>
									<textarea required name="content" id="" cols="30" rows="8" class="form-control" placeholder="Nhập tin nhắn"> </textarea>
								</div>

							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Dịch vụ</label>
									<select name="service" id="" class="form-control">
										<option value="">Chọn dịch vụ cần tư vấn</option>
										<?php
										$service = new WP_Query(array(
											'cat' => tie_get_option('service')
										));
										while ($service->have_posts()) {
											$service->the_post();
											echo '<option value="'. get_the_title() .'">'. get_the_title() .'</option>';
										}
										wp_reset_postdata();
										?>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Ngày</label>
									<input name="date" required type="text" class="form-control datetimepicker" id="" placeholder="Chọn ngày">
								</div>
							</div>

						</div>

						<div class="form-group">
							<button class="btn btn btn-success btn-submit-form">Gửi liên hệ</button>
						</div>
					</form>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php endif; ?>
<?php get_footer() ?>
