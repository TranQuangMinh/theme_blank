<?php
class WP_widget_demo extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname' => 'widget_demo',
			'description' => __( 'Thử viết widget.' ),


		);
		parent::__construct( 'demo-widget', __( 'Demo widget' ), $widget_ops );
		$this->alt_option_name = 'widget_demo';
	}

	public function widget( $args, $instance ) {
	    echo '<pre>';
	    print_r($instance);
	    echo '</pre>';
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['cate'] = (int) $new_instance['cate'];
		$instance['posts_per_page'] = (int) $new_instance['posts_per_page'];
		return $instance;
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'chưa có data';
		$cate     = isset( $instance['cate'] ) ? esc_attr( $instance['cate'] ) : '';
		$posts_per_page     = isset( $instance['posts_per_page'] ) ? esc_attr( $instance['posts_per_page'] ) : '';
		$term = get_categories();
?>
		<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
				<label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>"><?php _e( 'Số lượng bài:' ); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="number" value="<?php echo $posts_per_page; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'cate' ); ?>"><?php _e( 'Chuyen muc:' ); ?></label>
			<select name="<?php echo $this->get_field_name( 'cate' ); ?>" id="<?php echo $this->get_field_id( 'cate' ); ?>">
				<?php foreach ($term as $key => $value) : ?>
					<option <?php echo $cate == $value->term_id ? 'selected' : ''  ?> value="<?php echo $value->term_id ?>"><?php echo $value->name ?> <?php echo $value->term_id ?></option>
				<?php endforeach; ?>
			</select>
		</p>
<?php
	}
}

function wpb_load_widget_news() {
    register_widget( 'WP_widget_demo' );
}
add_action( 'widgets_init', 'wpb_load_widget_news' );
