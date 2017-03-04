<?php
function change_tax($query) {
	$tax_query = [
		'relation' => 'AND'
	];
	if (isset($_GET['sort'])) {
		if ($_GET['sort'] == 1) {
			$tax_query[] = [
				'taxonomy' => 'product_tag',
				'field' => 'slug',
				'terms' => 'feature'
			];
		} else if ($_GET['sort'] == 2) {
			$query->query_vars['orderby'] = 'meta_value_num';
			$query->query_vars['meta_key'] = 'price';
			$query->query_vars['order'] = 'DESC';
		} else if ($_GET['sort'] == 3) {
			$query->query_vars['orderby'] = 'meta_value_num';
			$query->query_vars['meta_key'] = 'price';
			$query->query_vars['order'] = 'ASC';
		}
	}

	if (isset($_GET['product_price'])) {
		$max = (int) $_GET['product_price'];
		if ($max > 0) {
			$query->query_vars['meta_query'] = [
				[
					'key'     => 'price',
					'value'   => $max,
					'type'    => 'numeric',
					'compare' => '<='
				]
			];
		}
	}

	return $query;
}
add_filter('pre_get_posts', 'change_tax');