<?php
/*
Plugin Name: Sophstertoaster - social media plugin
Description: Social media plugin for Sophstertoaster.com
Version: 1.2
Author: Matt Harrison
Author URI: http://zerophaze.org
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
			echo $args['before_title'] . $title . $args['after_title'];
			
		//echo __( '<div class="widget-text">Hello</div>', 'sophstertoaster_sm_domain' );
		?>
		<div id="sopshtertoaster_sm_widget_content">
			<div id="sopshtertoaster_sm_widget_row1">
				<a href="<?php echo $instance['facebookURI']; ?>" target="_blank"><img src="<?php echo plugins_url('images/Facebook.png', __FILE__); ?>" alt="Facebook"/> </a>
				<a href="<?php echo $instance['instagramURI']; ?>" target="_blank"><img src="<?php echo plugins_url('images/Instagram.png', __FILE__); ?>" alt="Instagram"/> </a>
				<a href="<?php echo $instance['pinterestURI']; ?>" target="_blank"><img src="<?php echo plugins_url('images/Pinterest.png', __FILE__); ?>" alt="Pinterest"/> </a>
			</div>
			<div id="sopshtertoaster_sm_widget_row2">
				<a href="<?php echo $instance['etsyURI']; ?>" target="_blank"><img src="<?php echo plugins_url('images/Etsy.png', __FILE__); ?>" alt="Etsy"/> </a>
				<a href="<?php echo $instance['twitterURI']; ?>" target="_blank"><img src="<?php echo plugins_url('images/Twitter.png', __FILE__); ?>" alt="Twitter"/> </a>
				<a href="<?php echo $instance['contactURI']; ?>" rel="publisher" target="_blank"><img src="<?php echo plugins_url('images/Contact.png', __FILE__); ?>" alt="Contact"/> </a>
			</div>
		</div>
		<?php
		echo $args['after_widget'];
	}
	
	public function form($instance) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title' , 'sophstertoaster_sm_domain' );
		}
		if ( isset( $instance[ 'instagramURI' ] ) ) {
			$instagramURI = $instance[ 'instagramURI' ];
		}
		else {
			$instagramURI = __( 'Instagram URI', 'sophstertoaster_sm_domain' );
		}
		if ( isset( $instance[ 'facebookURI' ] ) ) {
			$facebookURI = $instance[ 'facebookURI' ];
		}
		else {
			$facebookURI = __( 'Facebook URI', 'sophstertoaster_sm_domain' );
		}
		if ( isset( $instance[ 'etsyURI' ] ) ) {
			$etsyURI = $instance[ 'etsyURI' ];
		}
		else {
			$etsyURI = __( 'Etsy URI', 'sophstertoaster_sm_domain' );
		}
		if ( isset( $instance[ 'pinterestURI' ] ) ) {
			$pinterestURI = $instance[ 'pinterestURI' ];
		}
		else {
			$pinterestURI = __( 'Pinterest URI', 'sophstertoaster_sm_domain' );
		}
				if ( isset( $instance[ 'twitterURI' ] ) ) {
			$twitterURI = $instance[ 'twitterURI' ];
		}
		else {
			$twitterURI = __( 'Twitter URI', 'sophstertoaster_sm_domain' );
		}
		if ( isset( $instance[ 'contactURI' ] ) ) {
			$contactURI = $instance[ 'contactURI' ];
		}
		else {
			$contactURI = __( 'Contact URI', 'sophstertoaster_sm_domain' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'instagramURI' ); ?>"><?php _e( 'Instagram URI:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'instagramURI' ); ?>" name="<?php echo $this->get_field_name( 'instagramURI' ); ?>" type="text" value="<?php echo esc_attr( $instagramURI ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'facebookURI' ); ?>"><?php _e( 'Facebook URI:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'facebookURI' ); ?>" name="<?php echo $this->get_field_name( 'facebookURI' ); ?>" type="text" value="<?php echo esc_attr( $facebookURI ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'etsyURI' ); ?>"><?php _e( 'Etsy URI:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'etsyURI' ); ?>" name="<?php echo $this->get_field_name( 'etsyURI' ); ?>" type="text" value="<?php echo esc_attr( $etsyURI ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'pinterestURI' ); ?>"><?php _e( 'Pinterest URI:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'pinterestURI' ); ?>" name="<?php echo $this->get_field_name( 'pinterestURI' ); ?>" type="text" value="<?php echo esc_attr( $pinterestURI ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'twitterURI' ); ?>"><?php _e( 'Twitter URI:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'twitterURI' ); ?>" name="<?php echo $this->get_field_name( 'twitterURI' ); ?>" type="text" value="<?php echo esc_attr( $twitterURI ); ?>" />
		</p>
				<p>
			<label for="<?php echo $this->get_field_id( 'contactURI' ); ?>"><?php _e( 'Contact URI:' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id( 'contactURI' ); ?>" name="<?php echo $this->get_field_name( 'contactURI' ); ?>" type="text" value="<?php echo esc_attr( $contactURI ); ?>" />
		</p>
		<?php
	}
	
	public function update( $new_instance, $old_instance) {
		$instance=$old_instance;
		$instance['title']=( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['instagramURI']=( ! empty( $new_instance['instagramURI'] ) ) ? strip_tags( $new_instance['instagramURI'] ) : '';
		$instance['facebookURI']=( ! empty( $new_instance['facebookURI'] ) ) ? strip_tags( $new_instance['facebookURI'] ) : '';
		$instance['etsyURI']=( ! empty( $new_instance['etsyURI'] ) ) ? strip_tags( $new_instance['etsyURI'] ) : '';
		$instance['pinterestURI']=( ! empty( $new_instance['pinterestURI'] ) ) ? strip_tags( $new_instance['pinterestURI'] ) : '';
		$instance['twitterURI']=( ! empty( $new_instance['twitterURI'] ) ) ? strip_tags( $new_instance['twitterURI'] ) : '';
		$instance['contactURI']=( ! empty( $new_instance['contactURI'] ) ) ? strip_tags( $new_instance['contactURI'] ) : '';
		return $instance;
	}
} // sophstertoaster_sm_widget

function sophstertoaster_load_widget() {
	register_widget( 'sopshtertoaster_sm_widget' );
}
add_action( 'widgets_init', 'sophstertoaster_load_widget' );

/* Stop Adding Functions Below this Line */
?>
