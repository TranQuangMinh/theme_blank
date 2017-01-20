<?php

class template {
	public static function pagination() {
		global $wp_query;
		$big = 999999999;
		$pa = paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages,
			'before_page_number' => '<span class="screen-reader-text"></span>',
			'prev_text' => '<span class="fa fa-angle-double-left"></span>',
			'next_text' => '<span class="fa fa-angle-double-right"></span>'
		));

		return $pa;
	}
}