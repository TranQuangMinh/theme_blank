<?php
	$types = get_terms(array(
		'taxonomy' => 'product_type',
	));

	$colors = get_terms(array(
		'taxonomy' => 'product_color',
	));

	$currentType = isset($_GET['product_type']) ? $_GET['product_type'] : '';
	$currentColor = isset($_GET['product_color']) ? $_GET['product_color'] : '';
	$currentSort = isset($_GET['sort']) ? $_GET['sort'] : '';
	$currentPrice = isset($_GET['product_price']) ? $_GET['product_price'] : '';
?>
<form action="" class="form-filter">
	<div class="header-filter">
		<a href="" class="btn-open-filter" data-target="box-filter">Filter</a>
	</div>
	<div id="box-filter" class="block-checkbox">
		<div class="col">
			<h5 class="title">Sort by</h5>
			<ul class="list-unstyled">
				<li>
					<label for="sort_1">
						<input id="sort_1" <?php echo $currentSort == '' ? 'checked' : '' ?>  type="radio" name="sort" value="">
						<span class="text">Lasted</span>
					</label>
				</li>
				<li>
					<label for="sort_1">
						<input id="sort_1" <?php echo $currentSort == '1' ? 'checked' : '' ?>  type="radio" name="sort" value="1">
						<span class="text">Feature</span>
					</label>
				</li>
				<li>
					<label for="sort_2">
						<input id="sort_2" <?php echo $currentSort == '2' ? 'checked' : '' ?>  type="radio" value="2" name="sort">
						<span class="text">Price: High to low</span>
					</label>
				</li>
				<li>
					<label for="sort_3">
						<input id="sort_3" <?php echo $currentSort == '3'  ? 'checked' : '' ?>  type="radio" value="3" name="sort">
						<span class="text">Price: Low to high </span>
					</label>
				</li>
			</ul>
		</div>

		<div class="col">
			<h5 class="title">Type</h5>
			<ul class="list-unstyled">
				<li>
					<label for="product_type_all">
						<input id="product_type_all" <?php echo $currentType == '' ? 'checked' : '' ?>  type="radio" name="product_type" value="">
						<span class="text">All</span>
					</label>
				</li>
				<?php foreach ($types as $type) : ?>
					<li>
						<label for="product_type_<?php echo $type->term_id ?>">
							<input <?php echo $currentType == $type->slug ? 'checked' : '' ?> id="product_type_<?php echo $type->term_id ?>" type="radio" name="product_type" value="<?php echo $type->slug ?>">
							<span class="text"><?php echo$type->name ?></span>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="col">
			<h5 class="title">Color</h5>
			<ul class="list-unstyled">
				<li>
					<label for="product_color_all">
						<input id="product_color_all" <?php echo $currentType == '' ? 'checked' : '' ?>  type="radio" name="product_color" value="">
						<span class="text">All</span>
					</label>
				</li>
				<?php foreach ($colors as $color) : ?>
					<li>
						<label for="product_color_<?php echo $color->term_id ?>">
							<input <?php echo $currentColor == $color->slug ? 'checked' : '' ?> id="product_color_<?php echo $color->term_id ?>" type="radio" name="product_color" value="<?php echo $color->slug ?>">
							<span class="text"><?php echo $color->name ?></span>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="col">
			<h5 class="title">Price</h5>
			<ul class="list-unstyled">
				<?php
				$prices = [
					'' => 'All',
					'200000' => '200,000 VND',
					'300000' => '300,000 VND',
					'400000' => '400,000 VND',
					'500000' => '500,000 VND',
					'600000' => '600,000 VND',
					'700000' => '700,000 VND'
				];
				foreach ($prices as $key => $price) : ?>
					<li>
						<label for="price_<?php echo $key ?>">
							<input id="price_<?php echo $key ?>" type="radio" name="product_price" <?php echo $currentPrice == $key ? 'checked' : '' ?> value="<?php echo $key ?>">
							<span class="text"><?php echo $price ?></span>
						</label>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="f-pattaya"><i>* Yoo can select several options at once</i></p>
		<div class="block-action">
			<button class="btn btn-reset" type="reset">Clear</button>
			<a class="btn" href="<?php echo get_term_link($objCurrent, $objCurrent->taxonomy) ?>">Cancel</a>
			<button class="btn btn-submit" type="submit">Ok</button>
		</div>
		
	</div>
</form>