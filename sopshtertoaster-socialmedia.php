<?php
/*
Plugin Name: Sophstertoaster - social media plugin
Description: Social media plugin for Sophstertoaster.com
*/
/* Start Adding Functions Below this Line */

class sopshtertoaster_sm_widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'sopshtertoaster_sm_widget',
			__('SophsterToaster Social Media Widget', 'sophstertoaster_sm_domain'),
			array( 'description' => __('Social media plugin for Sophstertoaster.com',  'sophstertoaster_sm_domain'), )
		);
	}
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['aftertitle'];
			
		echo __( 'Hello', 'sophstertoaster_sm_domain' );
		echo $args['after_widget'];
	}
	
	public function form($instance) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title' , 'sophstertoaster_sm_domain' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?> name="<?php echo $this->get_field_name( 'title' ); ?> type="text" value="<?php echo esc_attr( $title ); ?> />
		</p>
		<?php
	}
	
	public function update( $new_instance, $old_instance) {
		$instance=array();
		$instance['title']=( ! empty( $new_instance['title'] ) ) ?strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // sophstertoaster_sm_widget

function sophstertoaster_load_widget() {
	register_widget( 'sopshtertoaster_sm_widget' );
}
add_action( 'widgets_init', 'sophstertoaster_load_widget' );

/* Stop Adding Functions Below this Line */
?>
